@php use Illuminate\Support\Facades\Auth; @endphp

  @extends('layouts.base')
    @section('content')
    <div class="container">
    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="overflow-hidden card table-nowrap table-card">
                <div class="card-header d-flex justify-content-between ">
                    <h5 class="mb-0">Liste des candidats</h5>
                    @if(Auth::user()->role=='admin')
                        <a href="/candidats/ajout_candidat" class="btn btn-secondary" >Ajouter un candidat</a>
                    
                        <a href="/programmes/ajouter_programme" class="btn btn-secondary" >Ajouter un programe</a>
                     @endif  
                                    
                    <hr>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}

                        </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <table class="table mb-3">
                        <thead class="small text-uppercase bg-body text-muted">
                            <tr>
                                <th>#</th>
                                <th>Candidat</th>
                                <th>Parti</th>
                                <th>Biographie</th>
                                <th>Validation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php 
                                $ide = 1;
                            @endphp

                            @foreach($candidats as $candidat) 
                            
                            <tr class="align-middle">
                                <td>{{ $ide }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src='{{asset("/storage/$candidat->photo")}}' class="avatar sm rounded-pill me-3 flex-shrink-0" alt="">
                                        <div>
                                            <div class="h6 mb-0 lh-1">{{ $candidat->prenom}} {{ $candidat->nom}} </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $candidat->parti}}</td>
                                <td class="height-200px">{{ $candidat->biographie}}</td>
                                <td>{{ $candidat->validation ==1?'valide':'invalide'}}</td>
                                <td class="text-end">
                                    <div class="drodown">
                                        <a data-bs-toggle="dropdown" href="#" class="btn p-1" aria-expanded="false">
                                  <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                    @if(Auth::user()->role=='admin') 
                                            <a href="/modifier_candidat-candidats/{{ $candidat->id}}" class="text-white btn btn-success ml-2 pt-2"><i class="fa-sharp fa-solid fa-pen-to-square"></i>Modifier</a>
                                            <a href="/supprimer_candidat-candidats/{{ $candidat->id}}" class="text-white btn btn-danger ml-2 pt-2" ><i class="fa fa-trash"></i>Supprimer</a>
                                    @endif       
                                            <a href="{{ route('programmes',['candidat_id' => $candidat->id]) }}" class="text-white btn btn-warning ml-2 pt-2"><i class="fa fa-eye"></i>Voir en programmes</a>

                                        </div>
                                    </div>
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
    </div>
</div>



    
    
    @endsection   

    





    























