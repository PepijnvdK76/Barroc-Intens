@extends('layouts.app')

@section('content')
    @if (auth()->user()->isAdmin())
        <h1>Testje</h1>
    @endif
    <div class="container-sm bg-white">
        <div class="bg-gray-800">
            <h1>Uw Gegevens</h1>
            <h1>Naam: {{$company->name}}</h1>
            <h1>Telefoon: {{$company->phone}}</h1>
            <h1>Straat: {{$company->street}}</h1>
            <h1>Huisnummer{{$company->house_number}}</h1>
            <h1>Stad: {{$company->city}}</h1>
            <h1>Land code:{{$company->country_code}}</h1>
            <h1>BKR check: {{$company->bkr_checked_at}}</h1>
        </div>
    </div>
@endsection
