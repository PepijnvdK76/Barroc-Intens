@extends('layouts.site')
@section('img')
    <img src="{{ Vite::asset('public/content/img/machinebackground.jpg') }}" class=" d-block h-45 " alt="...">
    <div class="bg-text">
        <h1>Koffie Machines</h1>
        <p>Barroc Intens</p>
    </div>
@endsection
    @section('content')
            <div class="row py-4">
                @foreach($machines as $machine)
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ Vite::asset('public/content/img/machinebackground.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$machine->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$machine->product_code}}</h6>
                                <p class="card-text">{{$machine->description}}</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                <a href="{{ route('offerte') }}" class="btn mr-2 "><i class="fas fa-link"></i> Contact ons</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    @endsection


