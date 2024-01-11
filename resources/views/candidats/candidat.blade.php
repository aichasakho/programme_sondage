<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTES DES CANDIDATS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    table {
      border-collapse: collapse; /* Fusionner les bordures adjacentes */
      width: 75%; /* Ajuster la largeur du tableau à 100% de son conteneur */
    }
   
    th, td {
      border: 1px solid black; /* Ajouter une bordure de 1 pixel solide */
      padding: 8px; /* Ajouter un espace de remplissage autour du contenu */
      text-align: left; /* Aligner le texte à gauche */
      font-size: 25px;
      
    }
    th{
        border: 2px solid black;
    }
    
   
    
    td, button, a{ 
        font-size:20px;


    }
    
    
    
    
  </style>

</head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                
                <h1><marquee>LISTES DES CANDIDATS</marquee></h1>
                <hr>
                    <a href="/candidats/ajout_candidat" class="btn btn-primary" >Ajouter un candidat</a>
                    <hr>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                        </div>
                    @endif
               
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Parti</th>
                                <th>Action</th>

                               <!-- <th>Validation</th>
                                <th>Photo</th>-->


                            </tr>
                        </thead>
                        <tbody>

                            @php 
                                $ide = 1;
                            @endphp

                            @foreach($candidats as $candidat) 
                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $candidat->prenom}}</td>
                                <td>{{ $candidat->nom}}</td>
                                <td>{{ $candidat->parti}}</td>
                                <!--<td>{{ $candidat->validation}}</td>
                                <td>{{ $candidat->photo}}</td>-->
                                <td>
                                    <a href="/modifier_candidat-candidats/{{ $candidat->id}}" class="btn btn-info" >Modifier</a>
                                    <a href="/supprimer_candidat-candidats/{{ $candidat->id}}"class="btn btn-danger">Supprimer</a>
                                    <a href="/programmes/programme" class="btn btn-success">Voir programmes</a>

                                </td>
                                

                            

                                
                            </tr>
                            @php 
                                $ide += 1;
                            @endphp
                            @endforeach
                        </tbody>


                    </table>
                
            
            </div>
        </div>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

























