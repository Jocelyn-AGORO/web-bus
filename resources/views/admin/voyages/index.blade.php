@extends('layouts.admin')

@section('content')

    <div>
        <div>
            <div class="display-4 text-center my-3">
                <h1>Programmer vos voyages</h1>
                Ajouter un nouveau Voyage
            </div>
            <div class="container">
                <form action="#" method="POST">
                    @csrf
                    @method("POST")
                    <div class="my-2">
                        <div class="row col-sm mt-3">
                            <div class="col-6 col-sm my-3">
                                <div class="row mx-1"><label for="depart">Départ</label></div>
                                <div class="row mx-1">
                                    <select name="depart" id="depart" class="form-control shadow">
                                        {{-- @foreach ( $villes as $ville)
                                        <option value=""></option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-sm my-3">
                                <div class="row mx-1"><label for="arrivee">Arrivée</label></div>
                                <div class="row mx-1">
                                    <select name="arrivee" id="arrivee" class="form-control shadow">
                                        {{-- @foreach ( $villes as $ville)
                                        <option value=""></option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row col-sm mt-3">
                            <div class="col-6 col-sm my-3">
                                <div class="row mx-1"><label for="date">Date</label></div>
                                <div class="row mx-1"><input id="date" name="date" type="date" class="form-control shadow"></div>
                            </div>
                            <div class="col-6 col-sm my-3">
                                <div class="row mx-1"><label for="bus">Bus</label></div>
                                <div class="row mx-1">
                                    <select id="bus" name="bus" class="form-control">
                                        {{-- @foreach ( $villes as $ville)
                                        <option value=""></option>
                                        @endforeach --}}
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-sm mt-3">
                        <div class="col-6 col-sm my-3">
                            <div class="row mx-1"><label for="conducteur">Conducteur</label></div>
                            <div class="row mx-1">
                                <select id="conducteur" name="conducteur" class="form-control shadow">
                                    {{-- @foreach ( $villes as $ville)
                                    <option value=""></option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-sm my-3">
                            <div class="row mx-1"><label for="conducteur">Durée Moyenne</label></div>
                            <div class="row mx-1">
                                <select id="conducteur" name="conducteur" class="form-control shadow">
                                    <option value="4">4h</option>
                                    <option value="4.5">4.5h</option>
                                    <option value="5">5h</option>
                                    <option value="5.5">5.5h</option>
                                    <option value="6">6h</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
             </form>
        </div>
        <div>
            <div class="display-4 text-center my-3">Liste des Voyages effectués</div>
            <div> enregistré(e)s</div>
            {{-- @foreach ( as )

            @endforeach --}}
        </div>
    </div>

@endsection
