@extends('layouts.auth')

@section('content')

    <div class="my-5">
        <div class="font-weight-bold text-center my-5">
            <h1>Connexion</h1>
        </div>
        @if ( $message )
            <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong class="me-auto">Notification d'inscription</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ $message }}
                    </div>
                </div>
            </div>
        @endif
        <div class="container text-center my-5">
            <form action="{{ route('connexion') }}" method="POST">
                @csrf
                @method("POST")
                <div class="w-50 mx-auto my-2">
                    <div class="my-3">
                        <div class="row my-5 w-75">
                            <div class="mx-auto"><label for="username">Email </label></div>
                            <input id="username" name="username" type="text" class="form-control shadow" placeholder="email ...">
                        </div>
                        <div class="row my-5 w-75">
                            <div class="mx-auto"><label for="password">Mot de Passe</label></div>
                            <input id="password" name="password" type="text" class="form-control shadow" placeholder="mot de passe ...">
                        </div>
                        <div class="row my-5 w-75">
                            <select name="type" id="type" class="form-control shadow">
                                <option value="passager">Passager</option>
                                <option value="expediteur">Expediteur</option>
                            </select>
                        </div>
                    </div>
                    <div class="mx-auto my-3">
                        <button class="button">
                            Connexion
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
