@extends('layouts.base')
    @section('content')
    <div class="container ">
        <div class="row">
            <div class="col s12">
                
                <h1>MODIFIER UN PROGRAMME</h1>
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
                <form Action="/modifier_programme/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                        @csrf
                        <div>
                        <label for="candidat_id" class="form-label">Candidat : </label>
                                    <select name="candidat_id" class="form-control " id="candidat_id" value="{{ $change->candidat_id }}">
                                        <option value="" disabled selected>Selectionner un candidat</option>
                                        @foreach($candidats as $candidat)
                                        <option value="{{$candidat->id}}">{{$candidat->prenom}} {{$candidat->nom}}</option>
                                        @endforeach
                                    </select>
                        </div>

                        <div class="form-group">
                            <label for="secteur" class="form-label">Secteur :</label>
                            <input type="text" class="form-control " id="secteur" name="secteur" value="{{ $change->secteur }}" > 
                        </div>

                        <div class="form-group">
                            <label for="description" class="form-label">Description :</label>
                            <textarea rows="10" cols="30" class="form-control" id="description" name="description"  value="{{ $change->description }}" ></textarea> 
                        </div>

                        <div class="form-group">
                            <label for="document" class="form-label">Document</label>
                            <input type="file" class="form-control" id="document" name="document" value="{{ $change->document }}">  
                        </div><br>
                        <br>

                        

                        <button type="submit" class="btn btn-secondary">MODIFIER UN PROGRAMME</button>
                    
                    
                  
      
            
            </div>
        </div>
    </div>
    
    
    @endsection 

























