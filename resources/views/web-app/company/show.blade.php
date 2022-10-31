@extends('layouts.app')

@section('content')
        <div class="">
            <h2>Uw Gegevens</h2>
            <h2>Naam: {{$company->name}}</h2>
            <h2>Telefoon: {{$company->phone}}</h2>
            <h2>Straat: {{$company->street}}</h2>
            <h2>Huisnummer{{$company->house_number}}</h2>
            <h2>Stad: {{$company->city}}</h2>
            <h2>Land code:{{$company->country_code}}</h2>
            <h2>BKR check: {{$company->bkr_checked_at}}</h2>
        </div>
@endsection
