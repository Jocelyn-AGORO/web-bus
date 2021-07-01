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
            <div class="display-4 text-center my-3">
                Liste des Voyages
            </div>
            <div class="text-md"> enregistré(e)s</div>
            {{-- @foreach ( as )

            @endforeach --}}
        </div>
        <div class="mt-5 table table-striped">
            <div class="container">
                <div class="container my-5 p-2">
                    <div>
                            {{-- @foreach ( $voyages as $voyage )
                               <ol class="list-group my-2">
                                <li class="list-group-item clearfix">
                                <h3 class="list-group text-right">
                                 <div class="list-group-item">Date : $voyage->date</div>
                                 <div class="py-3">
                                     <a href="{{ route('editervoyage',['id' => ]) }}" class="button bg-success">Editer</a>
                                     <a href="{{ route('supprimervoyage',['id' => 1]) }}" class="button bg-danger">Supprimer</a>
                                </div>
                                </h3>
                                <h2>Places Disponibles : $voyage->places</h2>
                                <h3>Départ : $voyage->parcours</h3>
                                <h3>Arrivée : $voyage->parcours</h3>
                                <h3>Bus : $voyage->bus</h3>
                                <h3>Conducteur : $voyage->conducteur</h3>
                                <h5>Durée moyenne du voyage : $voyage->duree</h5>
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
                                     <a href="{{ route('reserver',['id' => 1]) }}" class="button bg-success">Editer</a>
                                     <a href="{{ route('reserver',['id' => 1]) }}" class="button bg-danger">Supprimer</a>
                                </div>
                                </h3>
                                <h2>Places Disponibles : </h2>
                                <h3>Départ : Lomé</h3>
                                <h3>Arrivée : Atakpamé</h3>
                                <h3>Bus : </h3>
                                <h3>Conducteur : </h3>
                                <h5>Durée moyenne du voyage : 1h30</h5>
                                </li>
                            </ol>
                    </section>
                </div>
        </div>
    </div>
    </div>

@endsection
