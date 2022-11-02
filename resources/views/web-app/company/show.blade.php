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
            <div class="container">
                <h1>Uw Gegevens</h1>

                <div class="mb-3 row">
                    <h2>Naam</h2>
                    <div class="form ">
                        <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Naam" value="{{\Auth::user()->company->name ?? 'None'}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <h2>Telefoon nummer</h2>
                    <div class="form ">
                        <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->phone ?? 'None'}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-auto">
                    <h2>Stad</h2>
                        <div class="form">
                            <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->city ?? 'None'}}">
                        </div>
                    </div>
                    <div class="col-auto">
                    <h2>Straat</h2>
                        <div class="form ">
                            <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->street ?? 'None'}}">
                        </div>
                    </div>
                    <div class="col-auto">
                        <h2>Huis nummer</h2>
                        <div class="form ">
                            <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->house_number ?? 'None'}}">
                        </div>
                    </div>
                </div>

                <h2>Land code</h2>
                <div class="form mb-3">
                    <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->country_code ?? 'None'}}">
                </div>
                <h2>BKR check</h2>
                <div class="form mb-3">
                    <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->bkr_checked_at ?? 'None'}}">
                </div>

            </div>
        </div>
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
