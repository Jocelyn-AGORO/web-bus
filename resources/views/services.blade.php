@extends('layouts.base')
@section('content')
<style>
    .navbar{
        background: black;
    }
</style>

<div class="h-100 d-flex justify-content-center align-items-center m-5">
    <div class="membership-wrapper d-flex justify-content-around" style="padding:5rem">

        <div class="membership-card text-center mr-md-3" style="box-shadow:1px 1px 2px rgba(0,0,0,0.5)">
            <div class="membership-title">
                <i class="fas fa-receipt card-icon"></i>
                <h3>Reservez une place</h3>
            </div>
            <div class="membership-perks">
                <p>Reservez vos places et recevez un ticket</p>
                <p>Vous pourrez consultez les voyages disponibles en suivant ce lien.Vous aurez a choisir une ville de départ, une destination et une date de voyage.
                </p>
            </div>
            <a href="{{ route('reservations') }}" class="button">Reserver une place</a>
        </div>

        <div class="membership-card text-center ml-md-3" style="box-shadow:1px 1px 2px rgba(0,0,0,0.5)">
            <div class="membership-title">
                <i class="fas fa-box card-icon"></i>
                <h3>Envoie de colis</h3>
            </div>
            <div class="membership-perks">
                <p>Envoyez des colis à vos proches</p>
                <p>À partir de 500 FCFA</p>
            </div>
            <a href="{{ route('expeditions') }}" class="button">Envoyer</a>
        </div>
    </div>

</div>
</div>



@endsection
