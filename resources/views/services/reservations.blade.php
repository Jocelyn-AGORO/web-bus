@extends('layouts.base')

@section('content')

<div style="height: 100vh;">
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
            <div class="row" style="background-color: var(--yellow); color : var(--white);">
                <div scope="col" class="col-sm row-cols-sm-1">Départ</div>
                <div scope="col" class="col-sm row-cols-sm-1">Arrivée</div>
                <div scope="col" class="col-sm row-cols-sm-1">Date</div>
                <div scope="col" class="col-sm row-cols-sm-1">Heure</div>
                <div scope="col" class="col-sm row-cols-sm-1">Durée Moyenne</div>
            </div>
            <div>
                <div class="row" >
                    <div scope="col" class="col-sm row-cols-sm-1">Lomé</div>
                    <div scope="col" class="col-sm row-cols-sm-1">Atakpamé</div>
                    <div scope="col" class="col-sm row-cols-sm-1">13-06-2018</div>
                    <div scope="col" class="col-sm row-cols-sm-1">6h30</div>
                    <div scope="col" class="col-sm row-cols-sm-1">2h</div>
                </div>
                <div class="row" >
                    <div scope="col" class="col-sm row-cols-sm-1">Lomé</div>
                    <div scope="col" class="col-sm row-cols-sm-1">Sokodé</div>
                    <div scope="col" class="col-sm row-cols-sm-1">13-06-2018</div>
                    <div scope="col" class="col-sm row-cols-sm-1">12h30</div>
                    <div scope="col" class="col-sm row-cols-sm-1">4h30</div>
                </div>
            </div>
                {{-- @foreach ( as )
                    <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>

                            @endforeach --}}
        </div>
    </div>


</div>

@endsection
