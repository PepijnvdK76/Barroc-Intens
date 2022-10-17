@extends('layouts.site')

@section('content')
    <div class="sec">
        <video class="bg-vid" id="background-video" autoplay loop muted poster="{{ Vite::asset('public/content/img/coffee.mp4') }}">
            <source src="{{ Vite::asset('public/content/img/coffee.mp4') }}" type="video/mp4">
        </video>
    <div class="bg-text">
        <h1>Barroc Intens</h1>
        <p>Heerlijk wakkere koffie</p>
    </div>
    </div>
@endsection
