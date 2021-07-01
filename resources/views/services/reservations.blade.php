@extends('layouts.base')

@section('content')

<div style="margin-top: 10rem">
    <h1 class="centerise">Reservations</h1>
    <div class="container mt-5">
    <form action="{{ route('places-disponibles') }}" method="get">
        @csrf
        @method("GET")
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <label for="depart">Départ</label>
                </div>
                <div class="row form-wrapper mx-1">
                    <select id="depart" type="text" class="form-control px-1" name="depart">
                        <option value="Saisissez la ville de départ ...">Saisissez la ville de départ ...</option>
                        {{-- @foreach ( as )

                        @endforeach --}}
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <label for="arrivee">Arrivée</label>
                </div>
                <div class="row form-wrapper mx-1">
                    <select id="arrivee" type="text" class="form-control px-1" name="arrivee">
                        <option value="Saisissez la ville d'arrivée ...">Saisissez la ville d'arrivée ...</option>
                        {{-- @foreach ( as )

                        @endforeach --}}
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 m-auto">
            <div class="row">
                <label for="date">Date</label>
            </div>
            <div class="row form-wrapper">
                <input id="date" type="date" class="form-control" placeholder="Saisissez la ville de départ ...">
            </div>
        </div>
        <div class="text-center mt-5">
            <button class="button">
                Rechercher des voyages
            </button>
        </div>
    </form>
    </div>
     <div class="mt-5 table table-striped">
        <div class="container">
            <div class="container my-5 p-2">
                <div>
                        {{-- @foreach ( $voyages as $voyage )
                           <ol class="list-group my-2">
                            <li class="list-group-item clearfix">
                            <h3 class="list-group text-right">
                             <div class="list-group-item">Date : {{ $voyage->date }}</div>
                             <div class="py-3">
                                 <a href="{{ route('reserver',['id' => 1]) }}" class="button">Reserver</a>
                            </div>
                            </h3>
                            <h2>Places Disponibles : </h2>
                            <h2>Départ : {{ $voyage->parcours }} </h2>
                            <h3>Arrivée : {{ $voyage->parcours }}</h3>
                            <h4>Heure de départ :{{ $voyage->heure_depart }}</h4>
                            <h5>Durée moyenne du voyage : 1h30</h5>
                            </li>
                        </ol>
                         @endforeach
                </div> --}}
                <section class="search-results">
                    <header>
                    <h1 class="h3">Résultats de la Recherche</h1>
                    </header>
                        <ol class="list-group my-2">
                            <li class="list-group-item clearfix">
                            <h3 class="list-group text-right">
                             <div class="list-group-item">Date : 30-06-2021</div>
                             <div class="py-3">
                                 <a href="{{ route('reserver',['id' => 1]) }}" class="button">Reserver</a>
                            </div>
                            </h3>
                            <h2>Places Disponibles : </h2>
                            <h2>Départ : Lomé</h2>
                            <h3>Arrivée : Atakpamé</h3>
                            <h4>Heure de départ : 12h30</h4>
                            <h5>Durée moyenne du voyage : 1h30</h5>
                            </li>
                        </ol>
                        <ol class="list-group my-2">
                            <li class="list-group-item clearfix">
                            <h3 class="list-group text-right">
                             <div class="list-group-item">Date : 28-06-2021</div>
                             <div class="py-3">
                                 <a href="{{ route('reserver',['id' => 2]) }}" class="button">Reserver</a>
                            </div>
                            </h3>
                            <h2>Places Disponibles : </h2>
                            <h2>Départ : Lomé</h2>
                            <h3>Arrivée : Kara</h3>
                            <h4>Heure de départ : 6h30</h4>
                            <h5>Durée moyenne du voyage : 6h</h5>
                            </li>
                            </ol>
                </section>
            </div>
            
    </div>
</div>

@endsection
