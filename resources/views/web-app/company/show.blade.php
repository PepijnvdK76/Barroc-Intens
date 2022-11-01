@extends('layouts.app')

@section('content')
    <ul class="nav nav-tabs py-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">User</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="Contract-tab" data-bs-toggle="tab" data-bs-target="#Contract-tab-pane" type="button" role="tab" aria-controls="Contract-tab-pane" aria-selected="false">Contract</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="facturen-tab" data-bs-toggle="tab" data-bs-target="#facturen-tab-pane" type="button" role="tab" aria-controls="facturen-tab-pane" aria-selected="false">Facturen</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <h1>Uw Gegevens</h1>
            <h2>Naam: {{$company->name}}</h2>
            <h2>Telefoon: {{$company->phone}}</h2>
            <h2>Straat: {{$company->street}}</h2>
            <h2>Huisnummer{{$company->house_number}}</h2>
            <h2>Stad: {{$company->city}}</h2>
            <h2>Land code:{{$company->country_code}}</h2>
            <h2>BKR check: {{$company->bkr_checked_at}}</h2></div>
        <div class="tab-pane fade" id="Contract-tab-pane" role="tabpanel" aria-labelledby="Contract-tab" tabindex="0">
            <h1>Contracten</h1>
            {{--@foreach($contracts as  $company)
                <h2>Naam: {{$contract->name}}</h2>


            @endforeach--}}
        </div>
        <div class="tab-pane fade" id="facturen-tab-pane" role="tabpanel" aria-labelledby="facturen-tab" tabindex="0">
            <h1>Facturen</h1>
        </div>
    </div>
@endsection
