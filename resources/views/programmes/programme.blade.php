<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programmes Politiques pour une Élection</title>
    <link href="https://cdn.jsde<!doctype html>
<html lang="en">
  <head>
    <meta charset="ulivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    table {
      border-collapse: collapse; /* Fusionner les bordures adjacentes */
      width: 100%; /* Ajuster la largeur du tableau à 100% de son conteneur */
    }
    
    th, td {
      border: 1px solid black; /* Ajouter une bordure de 1 pixel solide */
      padding: 8px; /* Ajouter un espace de remplissage autour du contenu */
      text-align: left; /* Aligner le texte à gauche */
      font-size: 25px;
      
    }
    
    th {
      background-color: #008000; /* Ajouter une couleur de fond aux en-têtes de colonne */
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
                
                <h1><marquee>Programmes Politiques pour une Élection</marquee></h1>
                <hr>

                   

                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Contenu</th>  
                            </tr>
                            
                        </thead>
                    
                        <tbody>
                            <tr>
                                <td>Les programmes politiques de Ousmane Sonko</td><br><br>
                                <td>
                                    <br><br><a href="{{ route('liste_programme')}}" class="btn btn-success">Voir plus</a>

                                </td>
                            </tr>
                            

                            <tr>
                                <td>Les programmes politiques de Macky Sall</td><br><br>
                                <td>
                                    <br><br><a href="{{ route('liste_programme')}}" class="btn btn-success">Voir plus</a>

                                </td>
                            </tr>
                            
                        </tbody>


                    </table>
      
            
            </div>
        </div>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

























