@extends('layouts.app')

@section('headerName')
    <h1 class="text-black">Sales</h1>
@endsection

@section('content')
    <div class="container">
        <a href="{{route('company.index')}}" class="klant_aanmaken text-dark"><img src="{{ Vite::asset('public/content/img/notes.png') }}" width=4%" alt="" style="background-color: lightgray; border-radius: 10px" class="p-2">Klant gegevens</a>
    </div>
    <div class="container">
        <a href="{{route('createCustomer')}}" class="klant_aanmaken text-dark"><img src="{{ Vite::asset('public/content/img/add-user.png') }}" width=4%" alt="" style="background-color: lightgray; border-radius: 10px" class="p-2">Klant Aanmaken</a>
    </div>
    <div class="container">
        <a href="{{route('sales.create')}}" class="klant_aanmaken text-dark"><img src="{{ Vite::asset('public/content/img/notes.png') }}" width=4%" alt="" style="background-color: lightgray; border-radius: 10px" class="p-2">Notities</a>
    </div>
@endsection

