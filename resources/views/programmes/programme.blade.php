@extends('layouts.base')
    @section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                
                <h1><marquee>Programmes Politiques pour une Élection</marquee></h1>
                <hr>
          
                  

                    <table class="table" >
                        <thead>
                            <tr>
                                
                                <th>Description</th>
                                <th>Contenu</th>  
                            </tr>
                            
                        </thead>
                    
                        <tbody>
                        <tr>
                              <td>Les programmes politiques de Ousmane Sonko</td>
                              <td>
                                  <a href="{{ route('programmes',['candidat_id' => 1]) }}" class="btn btn-secondary">Voir en détails</a>
                              </td>
                        </tr>
                            

                        <tr>
                              <td>Les programmes politiques de Macky Sall</td>
                              <td>
                                  <a href="{{ route('programmes',['candidat_id' => 2]) }}" class="btn btn-secondary">Voir en détails</a>

                              </td>
                        </tr>
                        
                            
                        </tbody>


                    </table>
      
            
            </div>
        </div>
    </div>
   
   
    

    @endsection 

























