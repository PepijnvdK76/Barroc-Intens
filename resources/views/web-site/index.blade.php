@extends('layouts.site')

@section('img')
    <div class="sec">
        <video class="bg-vid" id="background-video" autoplay loop muted poster="{{ Vite::asset('public/content/img/coffee.mp4') }}0">
            <source src="{{ Vite::asset('public/content/img/coffee.mp4') }}" type="video/mp4">
        </video>
    <div class="bg-text">
        <h1>Barroc Intens</h1>
        <p>Heerlijk wakkere koffie</p>
    </div>
    </div>
@endsection
@section('content')
    <div class="row py-4">
        <h1 class="text-black">Het verhaal achter Barroc Intens</h1>

        De gebroeders Maarten en Joris Pulles hebben na het afronden van hun studie de gok gewaagd om een onderneming te starten. De liefde voor koffie ontstond toen Maarten tijdens een stage in Lucca, Italië de vurige passie van het Italiaanse volk voor koffie ervoer. Zijn droom was om een brug te slaan tussen deze passie en de 'slappe koffie' cultuur die heerst binnen de Nederlandse maatschappij.

        Dat en de toevallige timing waarmee het afstudeeronderzoek van zijn broer Joris werd afgerond (Joris onderzocht het verband tussen succesvolle ondernemingen en de kwaliteit aan koffie die in deze ondernemingen werd geschonken.) , deed ze besluiten om de stap te nemen om met een heel duidelijke missie de Nederlandse koffiemarkt in te stappen met een revolutionaire koffiemachine die de ambachtelijke Italiaanse wijze van koffie maken in stand zal houden, mét het gebruiksgemak en comfort van de 'alledaagse' koffieautomaat.
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input class="btn btn-danger bg-danger" type="submit" value="delete">
        </form>
    </div>
@endsection
