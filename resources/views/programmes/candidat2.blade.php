<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programmes Politiques pour une Élection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      h1 {
        text-align: center;
      }
      body {
        background-color: #F5F5DC;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
    
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }
      .active {
        background-color: #ccc;
      }
      .titre{
        font-size: 18px;
    }
    </style>
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                @if ($candidat)
                    <h1> {{ $candidat->prenom }} {{ $candidat->nom }}</h1>
                    <h1> {{ $candidat->parti }}</h1>
                @else
                    <p> Aucun candidat trouvé.</p>
                @endif

                <h3>Nous entendons gagner et gérer ensemble </h3>
                <hr>
              
                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                @endif

                  
                <table class="table">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Description</th>
                      <th>Sondage</th>  
                    </tr>
                  </thead>
                  <tbody>
                    @php 
                      $ide = 1;
                    @endphp

                    @if ($candidat)
                      @foreach ($candidat->programmes as $programme)
                   
                      <tr>
                          <td class="titre">{{ $programme->titre }}</td>
                          <td>{{ $programme->description }}</td>
                    
                      
                        <td>
                          <button class="likeButton" onclick="handleLike(this)"><i class="fas fa-thumbs-up"></i></button>
                          <p class="likeCount">0</p>
                          <button class="dislikeButton" onclick="handleDislike(this)"><i class="fas fa-thumbs-down"></i></button>
                          <p class="dislikeCount">0</p>
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
    </script>
  </body>
</html>