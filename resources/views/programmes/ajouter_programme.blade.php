<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTES DES PROGRAMMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        <div class="row">
            <div class="col s12">
                
                <h1>AJOUTER UN PROGRAMME</h1>
                <hr>

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}

                </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach

                </ul>
                <form Action="/programmes/ajouter_programme/" method="POST" class="form-group">
                    @csrf
                    <table> 
                            <tr>
                                <th>Titre</th><br>
                                <th>Description</th><br>
                                
                            </tr>
                            <tr> 
                                <td> 
                                <label for="Titre" class="form-label"></label>
                                <input type="text" class="form-control" id="Titre" name="titre">
                                </td><br><br><br>

                                <td> 
                                <label for="Description" class="form-label"></label>
                                <input type="text" class="form-control" id="Description" name="description">
                                </td>

                            </tr>
                            <tr> 
                                <td> 
                                <button type="submit" class="btn btn-secondary">AJOUTER UN PROGRAMME</button><br>
                                <a href="{{ route('liste_programme')}}" class="btn btn-danger">Revenir à la liste des programmes de Sonko</a>
                                <a href="{{ route('affiche_programme')}}" class="btn btn-danger">Revenir à la liste des programmes de Macky Sall</a>    
                                </td>

                            </tr>
                    </table> 
                </form>
                <hr>
                  
      
            
            </div>
        </div>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<!--
     <form Action="/ajouter/traitement" method="POST" class="form-group">
                    @csrf
                        <div class="form-group">
                            <label for="Prénom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="Prénom" name="prenom">
                        </div>

                        <div class="form-group">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom">
                        </div>
                        <br>

                        <button type="submit" class="btn btn-secondary">AJOUTER UN ETUDIANT</button>
                    <br> <br>
                    <a href="/apprenants" class="btn btn-danger">Revenir à la liste des apprenants</a>    
                    </form>
                    <hr>
 -->























