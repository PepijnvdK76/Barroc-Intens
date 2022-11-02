@extends('layouts.app')
@section('header')
    @include('components.app-header')
@endsection
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 mb-4 ">
            <h2 class="mb-3 text-black fs-3 fw-bold">Detail pagina afspraak</h2>
            <p class="text-black fs-5"><span class="fw-bold">Bedrijfnaam: </span>{{$company->name}}</p><br>
            <p class="text-black fs-5"><span class="fw-bold">Telefoonnummer: </span>{{$company->phone}}</p><br>
            <p class="text-black fs-5"><span class="fw-bold">Adres: </span>{{$company->street}} {{$company->house_number}} {{$company->city}}</p><br>
            <p class="text-black fs-5"><span class="fw-bold">Datum: </span>{{$appointment->date->format('H:i - d/m/Y')}}</p><br>
            <p class="text-black fs-5"><span class="fw-bold">Opmerking: </span>{{$appointment->remark}}</p>
            <a href="{{route('maintenance.index')}}" class="btn btn-primary mt-4">Ga terug naar overzicht</a><br>
            <a class="btn btn-primary mt-4" href="{{route('review.edit', $appointment)}}">review aanmaken</a>
        </div>
    </div>
@endsection


