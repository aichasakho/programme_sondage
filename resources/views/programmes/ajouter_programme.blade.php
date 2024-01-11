<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTES DES PROGRAMMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
   tr,td,label input{
        width: 100%;
    }
    
  </style>
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
                <form Action="{{ route('enregistrerProgramme')}}" method="POST" class="form-group">
                    @csrf
                    <table> 
                            
                            <tr>
                                <td>
                                <label for="prenom" class="form-label">Prénom du Candidat :</label>
                                   <input type="text" class="form-control" id="prenom" name="prenom" required>
                                </td> <br>
                            </tr>
                            <tr> 
                                <td>
                                   <label for="nom" class="form-label">Nom du Candidat :</label>
                                   <input type="text" class="form-control" id="nom" name="nom" required>

                                </td><br>
                            </tr>
                            <tr> 
                                <td>
                                   <label for="parti" class="form-label">Parti :</label>
                                   <input type="text" class="form-control" id="parti" name="parti" required>

                                </td><br>
                            </tr>    
                            <tr>
                                <td> 
                                <label for="titre" class="form-label">Titre :</label>
                                <input type="text" class="form-control " id="titre" name="titre">
                                </td><br><br><br>
                            </tr>
                            <tr> 
                                <td> 
                                <label for="description" class="form-label">Description :</label>
                                <textarea rows="10" cols="30" class="form-control" id="description" name="description" required></textarea>
                                </td><br>

                            </tr>
                            <tr> 
                                <td> 
                                <button type="submit" value="Ajouter un programme" class="btn btn-secondary">AJOUTER UN PROGRAMME</button><br><br>
                                <a href="{{ route('programmes',['candidat_id' => 1]) }}" class="btn btn-danger">Revenir à la liste des programmes de Sonko</a><br><br>
                                <a href="{{ route('programmes',['candidat_id' => 2]) }}" class="btn btn-danger">Revenir à la liste des programmes de Macky</a><br><br>

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

























