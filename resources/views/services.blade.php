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
                <h3>Ticket de Bus</h3>
            </div>
            <div class="membership-perks">
                <p>Reservez vos ticket de voyages</p>
                <p>À partir de 2000 FCFA</p>
            </div>
            <a href="#" class="button">Reserver</a>
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
            <a href="#" class="button">Envoyer</a>
        </div>
    </div>

</div>
</div>



@endsection
