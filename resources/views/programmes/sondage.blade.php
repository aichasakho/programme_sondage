@extends('layouts.base')

@section('title', __('Diagramme des likes et dislikes ') )

@section('content')
    <h2 class="border-bottom mb-3">@yield('title')</h2>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @vite(['resources/js/chartjs.js'])
@endsection