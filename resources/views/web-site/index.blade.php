@extends('layouts.site')

@section('content')
    <style>
        .bg-vid {

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(5px);

            /* Full height */
            height: 100%;
            width: 100%;
        }

        /* Position text in the middle of the page/image */
        .bg-text {
            font-family: 'Big Shoulders Display', cursive;
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-size: 38px;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }
    </style>
        <video class="bg-vid" id="background-video" autoplay loop muted poster="{{ Vite::asset('public/content/img/coffee.mp4') }}">
            <source src="{{ Vite::asset('public/content/img/coffee.mp4') }}" type="video/mp4">
        </video>
    <div class="bg-text">
        <h1>Barroc Intens</h1>
        <p>Heerlijk wakkere koffie</p>
    </div>

@endsection
