<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Online ljekarna Sanitas</title>
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/santass.jpg') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/projekt.css') }}">
        <style>
            body{background-image:url('assets/pozadina.jpg');}
        </style>
    </head>
    <body>
    <div id="k_prvi">
            <div id="ljekarna"><img src="assets/logo.png" alt="Sanitas logo" width="200px" height="70px"></div>
            <div class="kartica"><a href="{{ url('/dashboard') }}" id="rubrika1">Početna</a></div>
            <div class="kartica"><a href="{{ url('/products') }}">Proizvodi</a></div>
            <div class="kartica"><a href="{{ url('/about')}}" id="rubrika3" >O projektu</a></div>
			<div class="kartica"><a href="{{ url('/cart')}}">Košarica<img src="assets/cart.png" width="20" height="20"></a></div>
            <div class="kartica">Pozdrav, {{Auth::user()->name}}</div>
            @if (Route::has('login'))
            <div class="kartica">
                @auth
                <a href="{{ route('logout') }}">Odjava</a>
            </div>
            @endif
            @endauth
    </div>
    </div>
    <div id="pozdrav_text"><p>Dobro došli!<br><br>Zdravlje na prvom,<br>a Vi na pravom mjestu.</div>
    <div id="footer">
    <div id="footer1">
    <h3>Kontaktirajte nas i na:</h3>
    <h5>Kontakt telefon: +387 36 123 456</h5>
    <h5>Kontakt mail: mail@sanitas.ba</h5>
    </div>
    <div id="footer2">
    <div class="ikona"><a href="https://www.facebook.com" target="_blank"><img src="assets/facebook.png" alt="facebook_logo" width="20%" height="20%"></a></div>
    <div class="ikona"><a href="https://www.instagram.com" target="_blank"><img src="assets/instagram.png" alt="instagram_logo" width="20%" height="20%"></a></div>    
    <div class="ikona"><a href="https://www.twitter.com" target="_blank"><img src="assets/twitter.png" alt="twitter_logo" width="20%" height="20%"></a></div>
    </div>
    </div>
    </body>
</html>
