@extends('layouts.admin')

@section('content')

    <div class="container text-center" style="height: 600px;">
        <div class="text-center display-4">
            ADMIN PANEL
        </div>
        <div class="navbar-container my-5 ">
            <nav class="nav nav-pills nav-justified">
                <div class="navbar-menu">
                    <a href="{{ route('agences') }}" class="nav-item nav-link">Agences</a>
                    <a href="{{ route('bus') }}" class="nav-item nav-link">Bus</a>
                    <a href="{{ route('colis') }}" class="nav-item nav-link">Colis</a>
                    <a href="{{ route('conducteurs') }}" class="nav-item nav-link">Conducteurs</a>
                    <a href="{{ route('expediteurs') }}" class="nav-item nav-link">Expéditeurs</a>
                    <a href="{{ route('passagers') }}" class="nav-item nav-link">Passagers</a>
                    <a href="{{ route('reservations-liste') }}" class="nav-item nav-link">Reservations</a>
                    <a href="{{ route('tickets') }}" class="nav-item nav-link">Tickets</a>
                    <a href="{{ route('villes') }}" class="nav-item nav-link">Villes</a>
                    <a href="{{ route('voyages') }}" class="nav-item nav-link">Voyages</a>
                </div>
            </nav>
        </div>
        <div class="container text-center my-5">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>

@endsection
