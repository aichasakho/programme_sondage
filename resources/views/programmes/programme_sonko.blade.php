<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programmes Politiques pour une Élection</title>
    <link href="https://cdn.jsde<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <meta charset="ulivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      h1 {
        text-align: center;
      }
      body {
        background-color: #F5F5DC
      }
      table {
      border-collapse: collapse; /* Fusionner les bordures adjacentes */
      width: 100%; /* Ajuster la largeur du tableau à 100% de son conteneur */
    }
    
    th, td {
      border: 1px solid black; /* Ajouter une bordure de 1 pixel solide */
      padding: 8px; /* Ajouter un espace de remplissage autour du contenu */
      text-align: left; /* Aligner le texte à gauche */
     
    }
    .active {
    background-color: #ccc;
  }
    

        
    
     

    </style>
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                
                <h1>JOTNA : Programme de politique économique et sociale Patriotisme – Souveraineté – Bonne Gouvernance – Justice sociale – Sécurité</h1>
                <hr>
              
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                        </div>
                    @endif
                    
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Programmes</th>
                                <th>Sondage</th>  
                            </tr>
                            
                        </thead>
                        <tbody>

                              @php 
                                  $ide = 1;
                              @endphp

                              @foreach($afficher as $programme1) 
                              <tr>
                                  <td>{{ $ide }}</td>
                                  <td>{{ $programme1->description}}</td>
                            
                                  <td>
                                      <button class="likeButton" onclick="handleLike(this)"> <i class="fas fa-thumbs-up"></i></button><p class="likeCount">0</p>
                                      <button class="dislikeButton" onclick="handleDislike(this)"><i class="fas fa-thumbs-down"></i></button> <p class="dislikeCount">0</p>
                                  </td>
                              </tr>
                                @php 
                                    $ide += 1;
                                @endphp
                                @endforeach

                          </tbody>
                        <!--<tbody>
                              <tr>
                              <td>1</td>
                              <td> 
                                  <h2>Solutions sur le plan politique</h2>
                        
                                  <h3> Pour un nouveau pacte républicain et un engagement au service de l’Afrique</h3>

                                   <br> • Réconcilier nos identités et renforcer notre ancrage dans nos valeurs <br>
                                  • Repenser les leviers communautaires, privilégier l’Afrique et diversifier nos partenariats <br>
                                  • Redorer le blason de notre diplomatie et mieux impliquer la diaspora<br> 

                                  <h3> Institutions et libertés publiques</h3>

                                  • Instaurer un pouvoir exécutif responsable et contenu <br>
                                  • Renforcer l’Assemblée nationale pour un réel contrôle de l’Exécutif <br>
                                  • Créer des pôles régionaux pour des collectivités territoriales fortes<br> 
                                  • Instaurer un pouvoir judiciaire libre et indépendant<br>  
                                  • Administrer d’ordre et pour le compte du peuple<br>  
                                  • Réguler l’État contre les abus de pouvoir et protéger les libertés fondamentales <br> 
                                  • Instaurer le culte de la transparence et de la reddition des comptes <br> 
                                  • Sécuriser et rassurer les Sénégalais<br>
                              </td>
                              
                              <td>
                                  <button class="likeButton" onclick="handleLike(this)"> <i class="fas fa-thumbs-up"></i></button><p class="likeCount">0</p>
                                  <button class="dislikeButton" onclick="handleDislike(this)"><i class="fas fa-thumbs-down"></i></button> <p class="dislikeCount">0</p>
                                    
                              </td>
                               
                    
                            </tr>
                            

                            <tr>
                              <td>2</td>
                              <td> 
                                  <h2>Solutions sur le plan économique </h2>
                                  <h3> Produire par et pour nous-mêmes et viser le monde</h3>
                                
                                   • Faire de l’agriculture le fer de lance de notre économie <br>
                                  • Propulser un élevage dynamique <br> 
                                  •Protéger et assurer le développement durable de la pêche et de l’aquaculture <br>
                                  • Gérer de façon concertée, durable et profitable les ressources naturelles <br>
                                  • Promouvoir l’industrialisation pour un développement endogène <br>
                                  • Fournir une énergie durable et de l’eau potable accessibles à tous <br>
                                  • Structurer le secteur privé autour des PME/PMI <br>
                                  • Protéger le secteur du commerce pour un impact positif sur les ménagesbr 
                                  • Reconquérir le levier monétaire pour une économie forte <br>
                                  • L’artisanat et la culture pour un tourisme intégré et une société épanouie <br>
                                  • Veiller à l’équilibre de l’écosystème et préserver l’environnement <br>
                                  • Mieux planifier l’urbanisation pour un meilleur habitat <br>
                                  • Réorienter la formation professionnelle pour une meilleure employabilité <br>
                                  • Faciliter la circulation des personnes et des biens <br>
                                  • Mettre le numérique au service de la création de valeurs <br> 
                              </td>

                              <td>
                                  <button class="likeButton" onclick="handleLike(this)"> <i class="fas fa-thumbs-up"></i></button><p class="likeCount">0</p>
                                  <button class="dislikeButton" onclick="handleDislike(this)"><i class="fas fa-thumbs-down"></i></button> <p class="dislikeCount">0</p>
                                    
                              </td>
                            </tr>

                            <tr>
                               <td>3</td>
                              <td> 
                                  <h2>Solutions sur le plan social </h2>
                                   <h3>Protéger les Sénégalais et réduire les inégalités </h3>

                                   • Égaliser les chances par l’éducationbre <br> 
                                  • Promouvoir la femme et veiller sur l’enfant <br>
                                  • Promouvoir la solidarité par le soutien aux séniors et aux personnes vulnérablesbre <br>
                                  • Assurer des soins de qualité et une meilleure protection sociale aux populations <br> 
                                  • Démocratiser l’accès au foncier et à un logement décent <br>
                                  • Socialiser par le sport et hisser notre niveau de compétitivité<br> 
                              </td>

                              <td>
                                  <button class="likeButton" onclick="handleLike(this)"> <i class="fas fa-thumbs-up"></i></button><p class="likeCount">0</p>
                                  <button class="dislikeButton" onclick="handleDislike(this)"><i class="fas fa-thumbs-down"></i></button> <p class="dislikeCount">0</p>
                                    
                              </td>

                            </tr>
                            <tr> 
                              <td>4</td>
                              <td> 
                                  <h2> Solutions sur le financement</h2>
                                  <h3> Promouvoir les financements innovants et diversifier les sources de recettes</h3>

                                  • Rationaliser le schéma institutionnel du financement autour de la CDC <br>
                                  • Instituer des “fonds patriotes” sectoriels pour financer les PME, les Entrepreneurs et les start-up <br>
                                  • Mobiliser le secteur privé national dans l’exécution des grands projets de l’État en leur accordant <br>
                                  • Adapter le cadre légal du financement participatif pour des financements innovants <br>
                                  • Mettre en place des fonds de pension et d’investissement de la diaspora des garanties souveraines <br>
                                  • Réduire le train de vie de l’État pour mieux orienter la dépense publique <br>
                                  • Réformer l’Administration financière pour plus d’efficacité dans la mobilisation des ressources <br> 
                              </td>

                              <td>
                                  <button  type="button" class="likeButton" onclick="handleLike(this)"> <i class="fas fa-thumbs-up"></i></button><p class="likeCount">0</p>
                                  <button  type="button" class="dislikeButton" onclick="handleDislike(this)"><i class="fas fa-thumbs-down"></i></button> <p class="dislikeCount">0</p>
                                    
                              </td>

                            </tr>-->
                            
                        
 <!--<a href="/ajouter" class=" btn btn-secondary ">Ajouter un etudiant</a>
                    <hr>

                    

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Action</th>  
                            </tr>
                        </thead>
                     
  -->

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

























