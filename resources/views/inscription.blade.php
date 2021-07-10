@extends('layouts.auth')

@section('content')

            <div class="my-5 clearfix">
                <div class="font-weight-bold text-center my-5">
                    <h1 class="my-5 clearfix">Inscrivez Vous Maintenant !!!</h1>
                </div>
            @if( $message )
                <!-- Flexbox container for aligning the toasts -->
                    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

                        <!-- Then put toasts within -->
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <i class="fas fa-exclamation-triangle"></i>
                                <strong class="me-auto">Notification d'erreur</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                {{ $message }}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="container my-5 w-75">
                    <form action="{{ route('inscrire') }}" method="POST">
                        @csrf
                        @method("POST")
                        <div class="my-2">
                            <div class="row col-sm mt-3">
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="nom">Nom</label></div>
                                    <div class="row mx-1"><input id="nom" name="nom" type="text" class="form-control shadow"></div>
                                </div>
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="prenom">Prénom</label></div>
                                    <div class="row mx-1"><input id="prenom" name="prenom" type="text" class="form-control shadow"></div>
                                </div>
                            </div>
                            <div class="row col-sm mt-3">
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="adresse">Adresse</label></div>
                                    <div class="row mx-1"><input id="adresse" name="adresse" type="text" class="form-control shadow"></div>
                                </div>
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="profession">Profession</label></div>
                                    <div class="row mx-1"><input id="profession" name="profession" type="text" class="form-control shadow"></div>
                                </div>
                            </div>
                            <div class="row col-sm mt-3">
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="age">Age</label></div>
                                    <div class="row mx-1"><input id="age" name="age" type="number" value="18" max="99" class="form-control shadow"></div>
                                </div>
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="tel">Numéro de Téléphone (précédé de +228 )</label></div>
                                    <div class="row mx-1"><input id="tel" name="tel" type="tel" class="form-control shadow" maxlength="12"></div>
                                </div>
                            </div>
                            <div class="row col-sm mt-3">
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="email">Adresse mail</label></div>
                                    <div class="row mx-1"><input id="email" name="email" type="email" class="form-control shadow"></div>
                                </div>
                                <div class="col-6 col-sm my-3">
                                        <div class="row mx-1"><label for="mot_de_passe">Mot de passe</label></div>
                                        <div class="row mx-1"><input id="mot_de_passe" name="mot_de_passe" type="password" class="form-control shadow" required ></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mx-auto w-25 my-5">
                                    <div class="row mx-1"><label for="type">Type de Client</label></div>
                                    <div class="row mx-1">
                                        <select name="type" id="type" class="form-control shadow">
                                            <option value="passager">Passager</option>
                                            <option value="expediteur">Expediteur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-3">
                            <button class="button">
                                Créer mon compte
                            </button>
                        </div>
                    </form>
                </div>
            </div>

@endsection
