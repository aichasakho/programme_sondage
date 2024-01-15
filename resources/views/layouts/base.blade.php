<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Programmes Politiques pour une Élection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
      h1 {
        text-align: center;
      }
      body {
        background-color: #FFE4E1;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
    
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }
      .active {
        background-color: #ccc;
      }

      body{margin-top:25px;
    
    }
    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }
    .avatar.sm {
        width: 2.25rem;
        height: 2.25rem;
        font-size: .818125rem;
    }
    .table-nowrap .table td, .table-nowrap .table th {
        white-space: nowrap;
    }
    .table>:not(caption)>*>* {
        padding: 0.75rem 1.25rem;
        border-bottom-width: 1px;
    }
    table th {
        font-weight: 600;
        background-color: #eeecfd !important;
    }

    
    </style>
</head>
        <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route ('dashboard')}}">Tableau de bord</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/candidats/candidat">Liste Candidat</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route ('sondage')}}">Graphique</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Autres pages  
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/programmes/programme">Liste des programmes</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
            </nav> 
            <section>
                <div class="container">
                    @yield('content')
                </div>
            </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
        </body>
</html>