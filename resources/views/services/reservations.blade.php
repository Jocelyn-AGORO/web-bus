@extends('layouts.base')

@section('content')

<div style="height: 100vh;">
    <h1 class="centerise">Reservations</h1>
    <div class="container mt-5">
    <form action="{{ route('reserver') }}" method="post">
        @csrf
        @method("POST")
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="row">
                    <label for="depart">Départ</label>
                </div>
                <div class="row mx-1">
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
                <div class="row mx-1">
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
                <label for="arrivee">Arrivée</label>
            </div>
            <div class="row">
                <input id="arrivee" type="date" class="form-control" placeholder="Saisissez la ville de départ ...">
            </div>
        </div>
        <div class="text-center mt-5">
            <button class="button">
                Rechercher des voyages
            </button>
        </div>
    </form>
    </div>

</div>

@endsection
