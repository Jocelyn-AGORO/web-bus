@extends('layouts.base')

@section('content')

            <div class="my-5">
                <div class="font-weight-bold text-center my-5">
                    <h1>Inscrivez Vous Maintenant !!!</h1>
                </div>
                <div class="container my-5">
                    <form action="{{ route('home') }}" method="POST">
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
                                    <div class="row mx-1"><label for="addresse">Addresse</label></div>
                                    <div class="row mx-1"><input id="addresse" name="addresse" type="text" class="form-control shadow"></div>
                                </div>
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="profession">Profession</label></div>
                                    <div class="row mx-1"><input id="profession" name="profession" type="text" class="form-control shadow"></div>
                                </div>
                            </div>
                            <div class="row col-sm mt-3">
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="age">Age</label></div>
                                    <div class="row mx-1"><input id="age" name="age" type="text" class="form-control shadow"></div>
                                </div>
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="tel">Numéro de Téléphone</label></div>
                                    <div class="row mx-1"><input id="tel" name="tel" type="tel" class="form-control shadow"></div>
                                </div>
                            </div>
                            <div class="row col-sm mt-3">
                                <div class="col-6 col-sm my-3">
                                    <div class="row mx-1"><label for="email">Adresse mail</label></div>
                                    <div class="row mx-1"><input id="email" name="email" type="email" class="form-control shadow"></div>
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
