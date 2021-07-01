@extends('layouts.admin')

@section('content')

    <div class="text-center my-5">
            <h1 class="my-5">Gérez vos Bus</h1>
    </div>
        <div class="mt-5 table table-striped">
            <div class="container">
                <div class="container my-5 p-2">
                    <div>
                    <section class="search-results">
                        <header>
                        <h1 class="h3">Résultats de la Recherche</h1>
                        </header>
                        {{-- @foreach ( $buss as $bus )
                            <ol class="list-group my-2">
                                <li class="list-group-item clearfix">
                                <h3 class="list-group text-right">
                                <div class="py-3">
                                    <a href="{{ route('editerbus',['id' => 1]) }}" class="button bg-success">Editer</a>
                                    <a href="{{ route('supprimerbus',['id' => 1]) }}" class="button bg-danger">Supprimer</a>
                                </div>
                                </h3>
                                <h3>Numéro :   $bus->id</h3>
                                <h3>Nom : $bus->code</h3>
                                <h3>Capacité :  $bus->capacite</h3>
                                <h3>Etat :  $bus->etat</h3>
                                </li>
                            </ol>
                            @endforeach
                            
                    </section>
                    </div> --}}
                    <ol class="list-group my-2">
                                <li class="list-group-item clearfix">
                                <h3 class="list-group text-right">
                                <div class="py-3">
                                    <a href="{{ route('editerbus',['id' => 1]) }}" class="button bg-success">Editer</a>
                                    <a href="{{ route('supprimerbus',['id' => 1]) }}" class="button bg-danger">Supprimer</a>
                                </div>
                                </h3>
                                <h3>Numéro :   $bus->id</h3>
                                <h3>Nom : $bus->code</h3>
                                <h3>Capacité :  $bus->capacite</h3>
                                <h3>Etat :  $bus->etat</h3>
                                </li>
                    </ol>
            </div>
        </div>
    </div>


@endsection
