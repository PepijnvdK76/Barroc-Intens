@extends('layouts.site')

    @section('content')
        <img src="{{ Vite::asset('public/content/img/machinebackground.jpg') }}" class=" d-block h-45 " alt="...">
        <div class="bg-text">
            <h1>Koffie Machines</h1>
            <p>Barroc Intens</p>
        </div>
        <div class="container-sm bg-white">
            @foreach($machines as $machine)
                <div class="card customCard" style="width: 18rem;">
                    <img src="{{ Vite::asset('public/content/img/coffeeBeans.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-white">{{$machine->name}}</h5>
                        <p class="card-text text-white">{{$machine->description}}</p>
                        <a href="{{ route('offerte') }}" class="btn btn-primary">Contact ons</a>
                    </div>
                </div>
                <div style="padding: 50vh;"></div>
        </div>

        @endforeach
    @endsection


