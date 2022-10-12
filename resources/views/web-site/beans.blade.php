@extends('layouts.site')

@section('content')
    <img src="{{ Vite::asset('public/content/img/beansbackground.jpg') }}" class=" d-block h-45 " alt="...">
    <div class="container-sm bg-white">
<div style="padding: 50vh;"></div>
    <div class="bg-text">
        <h1>Bonen</h1>
        <p>Barroc Intens</p>

    </div>
    @foreach($beans as $bean)
        <div class="card customCard" style="width: 18rem;">
            <img src="{{ Vite::asset('public/content/img/coffeeBeans.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body ">
                <h5 class="card-title text-white">{{$bean->name}}</h5>
                <p class="card-text text-white">{{$bean->description}}</p>
                <a href="#" class="btn btn-primary">Contact ons</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection
