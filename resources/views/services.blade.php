@extends('layouts.base')
@section('content')
<style>
    .navbar{
        background: black;
    }
</style>

<div style="height: 100vh;" >
    <div class="membership-wrapper" style="border: 1px solid red">

        <div class="membership-card" style="border: 0px solid blue;box-shadow:1px 1px 2px rgba(0,0,0,0.5)">
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

        <div class="membership-card" style="border: 1px solid blue">
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
