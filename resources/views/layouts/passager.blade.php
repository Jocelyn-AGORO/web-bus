<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/storage/icon.png" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>web-bus</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<div class="navbar-container">
    <nav class="navbar">
        <a href="/" class="navbar-logo">BUS R.C</a>
        <div class="navbar-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="navbar-menu">
            <a href="{{ route('acceuil') }}" class="navbar-link {{request()->is('/')?'active-page':''}}"><i class="fas fa-home"></i>&nbsp;Accueil</a>
            <a href="{{ route('reservations') }}" class="navbar-link selected {{request()->is('services')?'active-page':''}}" id="show-modal"> Reservations</a>
            <a href="{{ route('historique_passager') }}" class="navbar-link selected {{request()->is('services')?'active-page':''}}" id="show-modal"> Historique</a>
            <a href="{{ route('galerie_photo') }}" class="navbar-link selected {{request()->is('suggestions')?'active-page':''}}" id="show-modal"> Photos</a>
            <a href="{{ route('suggestions') }}" class="navbar-link selected {{request()->is('suggestions')?'active-page':''}}" id="show-modal"> Suggestions</a>
        </div>
    </nav>
</div>
{{-- Sections on other pages --}}
@yield('content')
<!-- footer -->
<div class="footer">
    <div class="footer-wrapper">
        <div class="footer-desc">
            <h1>WEB BUS</h1>
            <p>Reservation de ticket de bus de voyages et envoie de colis en ligne</p>
            <p id="phone">(00228) 96858733</p>
        </div>
        <div class="footer-links">
            <h2 class="footer-title">Contactez-nous</h2>
            <a href="{{ route('contacts') }}" class="footer-link">Contact</a>
            <a href="{{ route('services') }}" class="footer-link">Services</a>
            <a href="{{ route('about') }}" class="footer-link">À propos</a>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-links">
            <h2 class="footer-title">Social</h2>
            <a href="" class="footer-link">Facebook</a>
            <a href="" class="footer-link">Whatsapp</a>
            <a href="" class="footer-link">Twitter</a>
        </div>
        <div class="footer-links">
            <h2 class="footer-title">Services</h2>
            <a href="{{ route('reservations') }}" class="footer-link">Reservations</a>
            <a href="{{ route('expeditions') }}" class="footer-link">Colis</a>
            <a href="{{ route('lines') }}" class="footer-link">Lignes</a>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
