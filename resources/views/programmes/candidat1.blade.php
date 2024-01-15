@extends('layouts.base')
    @section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                @if ($candidat)
                    <h1> {{ $candidat->prenom }} {{ $candidat->nom }}</h1>
                    <h1> {{ $candidat->parti }}</h1>
                @else
                    <p> Aucun candidat trouvé.</p>
                @endif

                <h3>JOTNA : Programme de politique économique et sociale Patriotisme – Souveraineté – Bonne Gouvernance – Justice sociale – Sécurité</h3>
                
                <hr>
              
                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                @endif

                  
                <table class="table">
                  <thead>
                    <tr>
                      <th>Secteur</th>
                      <th>Description</th>
                      <th>Document</th>
                      <th>Sondage</th>
                      <th>Action</th>  

                    </tr>
                  </thead>
                  <tbody>
                    @php 
                      $ide = 1;
                    @endphp

                    @if ($candidat)
                      @foreach ($candidat->programmes as $programme)
                   
                      <tr>
                          <td>{{ $programme->secteur }}</td>
                          <td>{{ $programme->description }}</td>
                          <td><a href="{{asset('/storage/'.$programme->document)}}">Voir document</a></td>

                    
                      
                          <td>
                            <button type='button' class="likeButton" data-programmeid="{{ $programme->id }}" onclick="handleLikeAjax({{ $programme->id }})">
                            <i class="fas fa-thumbs-up"></i></button>
                            <p class="likeCount">{{$programme->likes_count ?? "0"}}</p>
                            <button type='button' class="dislikeButton" data-programmeid="{{ $programme->id }}" onclick="handleDislikeAjax({{ $programme->id }})">
                            <i class="fas fa-thumbs-down"></i></button>
                            <p class="dislikeCount">{{$programme->dislikes_count ?? "0"}}</p>
                          </td>
                      
                      
                          <td>
                            @if(Auth::user()->role=='admin')
                               <a href="/modifier_programme-programmes/{{ $programme->id}}" class="text-white btn btn-success ml-2 pt-2" ><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                               <a href="/supprimer_programme-programmes/{{ $programme->id}}"class="text-white btn btn-danger ml-2 pt-2"><i class="fa fa-trash"></i></a>
                            @endif
                          </td>
                        </tr>
                      
                      @php 
                        $ide += 1;
                      @endphp
                      @endforeach
                      @else
                      <p> Aucun programme trouvé.</p>
                      @endif  
                  </tbody>
                </table>
            
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      function handleLike(button) {
        const parentTd = button.parentNode;
        const likeCount = parentTd.querySelector(".likeCount");
        const dislikeCount = parentTd.querySelector(".dislikeCount");

        if (!button.disabled) {
          let count = parseInt(likeCount.textContent);
          count++;
          likeCount.textContent = count;
          button.disabled = true;
          parentTd.querySelector(".dislikeButton").disabled = false;

          if (dislikeCount.textContent !== "0") {
            count = parseInt(dislikeCount.textContent);
            count--;
            dislikeCount.textContent = count;
          }
        }
      }

      function handleDislike(button) {
        const parentTd = button.parentNode;
        const likeCount = parentTd.querySelector(".likeCount");
        const dislikeCount = parentTd.querySelector(".dislikeCount");

        if (!button.disabled) {
          let count = parseInt(dislikeCount.textContent);
          count++;
          dislikeCount.textContent = count;
          button.disabled = true;
          parentTd.querySelector(".likeButton").disabled = false;

          if (likeCount.textContent !== "0") {
            count = parseInt(likeCount.textContent);
            count--;
            likeCount.textContent = count;
          }
        }
      }

      function handleLikeAjax(programme_id) {
            // Effectuer une requête AJAX pour enregistrer le clic "like"
            $.ajax({
                url: '/programmes/' + programme_id + '/like',
                method: 'POST',
                
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },

                success: function(response) {
                // Mettre à jour le compteur de likes du programme spécifique
                  const likeCount = $('button.likeButton[data-programmeid="' + programme_id + '"]').siblings('.likeCount');
                  likeCount.text(response.likeCount);

                  // Récupérer le compteur de dislikes du programme spécifique
                  const dislikeCount = $('button.likeButton[data-programmeid="' + programme_id + '"]').siblings('.dislikeCount');

                  // Vérifier si le compteur de dislikes est différent de zéro
                  if (dislikeCount.text() !== "0") {
                      let count = parseInt(dislikeCount.text());
                      count--;
                      dislikeCount.text(count);
                  }
                  },
                  error: function(xhr, status, error) {
                      // Gérer l'erreur
                  }
              });
      }

      function handleDislikeAjax(programme_id) {
              // Effectuer une requête AJAX pour enregistrer le clic "dislike"
              $.ajax({
                  url: '/programmes/' + programme_id + '/dislike',
                  method: 'POST',

                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },

                  success: function(response) {
                              // Mettre à jour le compteur de dislikes du programme spécifique
                    const dislikeCount = $('button.dislikeButton[data-programmeid="' + programme_id + '"]').siblings('.dislikeCount');
                    dislikeCount.text(response.dislikeCount);

                    // Récupérer le compteur de likes du programme spécifique
                    const likeCount = $('button.dislikeButton[data-programmeid="' + programme_id + '"]').siblings('.likeCount');

                    // Vérifier si le compteur de likes est différent de zéro
                    if (likeCount.text() !== "0") {
                        let count = parseInt(likeCount.text());
                        count--;
                        likeCount.text(count);
                    }
                },
                error: function(xhr, status, error) {
                    // Gérer l'erreur
                }
            });
      }
      </script>
   @endsection 