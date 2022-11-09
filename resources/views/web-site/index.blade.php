@extends('layouts.site')

@section('img')
    <div class="sec">
        <video class="bg-vid" id="background-video" autoplay loop muted poster="{{ Vite::asset('public/content/img/coffee.mp4') }}0">
            <source src="{{ Vite::asset('public/content/img/coffee.mp4') }}" type="video/mp4">
        </video>
    <div class="bg-text">
        <h1>Barroc Intens</h1>
        <p>Heerlijk wakkere koffie</p>
        <div class="row px-6 pt-4">
            <div class="col">
                <input class="btn BarrocYellowBtn px-5 py-3 " type="submit" value="Bonen">
            </div>
            <div class="col">
                <input class="btn BarrocYellowBtn px-5 py-3" type="submit" value="Apparaten">
            </div>
        </div>
    </div>
    </div>
@endsection
@section('content')
    <div class="row py-4">
        TErstTErst
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <input class="btn btn-danger bg-danger" type="submit" value="delete">
        </form>
    </div>
@endsection
