@extends('layouts.base')
    @section('content')
    <div class="container ">
        <div class="row">
            <div class="col s12">
                
                <h1>AJOUTER UN CANDIDAT</h1>
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
                <form Action="/ajout_candidat/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                        <div class="form-group">
                            <label for="Prénom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="Prénom" name="prenom">
                        </div>

                        <div class="form-group">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom">
                        </div>

                        <div class="form-group">
                            <label for="Parti" class="form-label">Parti</label>
                            <input type="text" class="form-control" id="Parti" name="parti">
                        </div><br>

                        <div class="form-group">
                            <label for="biographie" class="form-label">biographie</label>
                            <input type="text" class="form-control" id="biographie" name="biographie">
                        </div><br>

                        <div class="form-check mb-2" >
                            <input class="form-check-input" type="checkbox" value="on" id="validation"  name="validation" checked >
                            <label class="form-check-label" for="validation">
                            Validation
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div><br>

                        <button type="submit" class="btn btn-secondary">AJOUTER UN CANDIDAT</button>
                    <br> <br>
                    <a href="/candidats/candidat" class="btn btn-danger">Revenir à la liste des candidats</a>    
                </form>
                <hr>
                  
      
            
            </div>
        </div>
    </div>
    
    

    @endsection 

























