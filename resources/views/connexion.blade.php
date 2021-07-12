@extends('layouts.auth')
<style>
    input {
        text-align: center;
    }

    ::-webkit-input-placeholder {
        text-align: center;
    }

    :-moz-placeholder {
        text-align: center;
    }
</style>
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
                    <div class="toast-body text-primary font-weight-bold">
                        {{ $message }}
                    </div>
                </div>
            </div>
        @endif
        <div class="container my-5 border-primary rounded-2">
            <form action="{{ route('connexion') }}" method="POST">
                @csrf
                @method("POST")
                <div class="mx-auto w-75 my-3">
                    <div class="my-3">
                        <div class="row my-5 w-50 mx-auto">
                            <div class="mx-auto"><label for="username">Email </label></div>
                            <input id="username" name="username" type="text" class="form-control shadow" placeholder="Email ...">
                        </div>
                        <div class="row my-5 w-50 mx-auto">
                            <div class="mx-auto"><label for="password">Mot de Passe</label></div>
                            <input id="password" name="password" type="text" class="form-control shadow" placeholder="Mot de passe ...">
                        </div>
                        <div class="row my-5 w-50 mx-auto">
                                <div class="mx-auto"><label for="type">Type de client</label></div>
                                <select name="type" id="type" class="form-control shadow">
                                    <option value="passager">Passager</option>
                                    <option value="expediteur">Expediteur</option>
                                </select>
                        </div>
                        <div class="row my-5 w-75 mx-auto">
                            <button class="mx-auto button w-25">
                                Connexion
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mx-auto">
                <div class="text-primary text-medium font-weight-bold text-center">Vous n'êtes pas encore inscrit ? Incrivez-vous <i class="fas fa-arrow-down"></i> </div>
                <div class="row my-5 w-75 mx-auto">
                    <a href="{{ route('inscription') }}" class="navbar-link nav-signup mx-auto {{request()->is('inscription')?'active-page':''}}"><i class="fas fa-user-lock"></i>&nbsp;S'inscrire</a>
                </div>
            </div>
        </div>
    </div>

@endsection
