@extends('layouts.base')
    @section('content')
  
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
                <form Action="{{ route('enregistrerProgramme')}}" method="POST" class="form-group" enctype="multipart/form-data">
                    @csrf
                    <table> 
                            
                            <tr>
                                <td>
                                    <label for="candidat_id" class="form-label">Candidat : </label>
                                    <select name="candidat_id" class="form-control " id="candidat_id">
                                        <option value="" disabled selected>Selectionner un candidat</option>
                                        @foreach($candidats as $candidat)
                                        <option value="{{$candidat->id}}">{{$candidat->prenom}} {{$candidat->nom}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                <label for="secteur" class="form-label">Secteur :</label>
                                <input type="text" class="form-control " id="secteur" name="secteur" required>
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
                                <label for="document" class="form-label">Document</label>
                                <input type="file" class="form-control" id="document" name="document">
                                </td>
                            </tr>
                        </div><br>
                            <tr> 
                                <td> 
                                <button type="submit" value="Ajouter un programme" class="btn btn-secondary">AJOUTER UN PROGRAMME</button><br><br>
                                <a href="{{ route('programmes',['candidat_id' => $candidat->id]) }}" class="btn btn-success">Voir les programmes</a>

                                </td>
                            </tr>
                    </table> 
                </form>
                <hr>
                  
      
            
            </div>
        </div>
    </div>
    
    

    @endsection 

























