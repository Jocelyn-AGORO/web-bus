@extends('layouts.admin')

@section('content')

    <div class="my-5">
        <div class="font-weight-bold text-center my-5">
            <h1>Connexion Administrateur</h1>
        </div>
        <div class="container text-center my-5">
            <form action="{{ route('connexion_admin') }}" method="POST">
                @csrf
                @method("POST")
                <div class="my-2">
                    <div class="w-50 mx-auto mt-3">
                        <div class="row my-5">
                            <div class="mx-auto"><label for="username">Nom d'utilisateur </label></div>
                            <input id="username" name="username" type="text" class="form-control shadow" placeholder="Nom d'utilisateur ...">
                        </div>
                        <div class="row my-5">
                            <div class="mx-auto"><label for="password">Mot de Passe</label></div>
                            <input id="password" name="password" type="text" class="form-control shadow" placeholder="Mot de passe ...">
                        </div>
                    </div>
                </div>
                <div class="text-center my-3">
                    <button class="button">
                        Connexion
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
