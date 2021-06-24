@extends('layouts.base')

@section("content")
<!-- Hero -->
    <div class="hero">
        <div class="hero-content">
            <h1>WEB BUS</h1>
            <p>Faites vos reservation de bus en ligne</p>
            <a href="#" class="button" id="show-modal-bis">Démarrer</a>
        </div>
    </div>

    <!-- Modal for services -->

    {{--<div class="modal modal-hidden">
        <div class="modal-content">
            <div class="modal-close" id="close-modal">&times;</div>
            <h2 style="text-align: center;">Veuillez selectionner une option.</h2>
            <center><hr class="sep-modal"/></center>
            <div class="services-btn-container"></div>
                <center>
                    <button class="button opt-btn" id="res-btn"><a href="/reservation-ticket">Reserver un ticket</a></button>
                    <!-- <div style="border-left:8px solid yellow;height:500px"></div> -->
                    <button class="button opt-btn" id="col-btn"><a href="/envoie-colis">Envoyer un colis</a></button>
                </center>
            </div>
        </div>
    </div>--}}

    <!-- Sevices -->
    <div class="services">
        <div class="services-container">
            <div>
                <p class="topline">web-bus</p>
                <h1 class="services-heading">Nos services</h1>
                <div class="services-fts">
                    <p class="services-ft">
                        <i class="fas fa-check-circle"></i> Reservation</p>
                </div>
                <div class="services-fts">
                    <p class="services-ft">
                        <i class="fas fa-check-circle"></i> Envoie de colis</p>
                </div>
                <div class="services-fts">
                    <p class="services-ft">
                        <i class="fas fa-check-circle"></i> Sécurité</p>
                </div>
                <div class="services-fts">
                    <p class="services-ft">
                        <i class="fas fa-check-circle"></i> Assurance</p>
                </div>
            </div>
            <div>
                <img src="/storage/passengers-bus.jpg" alt="" class="services-img">
            </div>

        </div>
    </div>

    <!-- membership -->
    <div class="membership">
        <h1>Voir nos offres</h1>
        <p class="membership-desc">
            Reservez vos ticket et simplifiez l'envoie de vos colis
        </p>

        <div class="membership-wrapper">

            <div class="membership-card">
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

            <div class="membership-card">
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

            <div class="membership-card">
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
        </div>
    </div>

    <!-- Agences -->
    {{-- Using bootstrap slider  --}}
    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div> --}}

    <!-- Email -->
    <div class="email">
        <div class="email-content">
            <h1>Contactez Nous</h1>
            <p>Abonnez vous gratuitement à notre newsletter pour ne pas manquer nos annonces <br/> concenant les agences de voyages !</p>
            <form action="#">
                <div class="form-wrap">
                    <label for="email">
                        <input type="email" placeholder="Saisissez votre mail" id="email"/>
                    </label>
                    <button class="button" type="submit">Souscrire</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
