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
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="facturen-tab" data-bs-toggle="tab" data-bs-target="#Maintenance-tab-pane" type="button" role="tab" aria-controls="Maintenance-tab-pane" aria-selected="false">Storingsaanvragen</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <div class="container">
                <h1>Uw Gegevens</h1>
                    <h2>Naam</h2>
                    <div class="form mb-3 shadow-sm">
                        <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Naam" value="{{\Auth::user()->company->name ?? 'None'}}">
                    </div>
                    <h2>Telefoon nummer</h2>
                    <div class="form mb-3 shadow-sm ">
                        <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->phone ?? 'None'}}">
                    </div>
                    <div class="mb-3 row ">
                        <div class="col-auto ">
                        <h2>Stad</h2>
                            <div class="form mb-3 shadow-sm">
                                <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->city ?? 'None'}}">
                            </div>
                        </div>
                        <div class="col-auto ">
                        <h2>Straat</h2>
                            <div class="form mb-3 shadow-sm ">
                                <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->street ?? 'None'}}">
                            </div>
                        </div>
                        <div class="col-auto">
                            <h2>Huis nummer</h2>
                            <div class="form mb-3 shadow-sm ">
                                <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->house_number ?? 'None'}}">
                            </div>
                        </div>
                    </div>
                    <h2>Land code</h2>
                    <div class="form mb-3 shadow-sm">
                        <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->country_code ?? 'None'}}">
                    </div>
                    <h2>BKR check</h2>
                    <div class="form mb-3 shadow-sm">
                        <input  type="email" readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{\Auth::user()->company->bkr_checked_at ?? 'None'}}">
                    </div>
                <div class="form mb-3 mt-6">
                    <td><button type="button" class="btn btn-primary bg-primary text-white"><a class="text-white" href="{{route("company.edit", $company->id)}}">aanpassen</a></button></td>
                    <div class="form mb-3 fw-bold text-center">
                        <p> Om u gegevens te laten verwijderen moet u een mail sturen naar : privacy@barroc.it</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="Contract-tab-pane" role="tabpanel" aria-labelledby="Contract-tab" tabindex="0">
            <h1>Contracten</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>periode</th>
                    <th>start</th>
                    <th>eind</th>
                </tr>

                </thead>

                @foreach($contracts as  $contract)
                    <tbody>
                    <tr>
                        <td>{{$contract->id}}</td>
                        <td>{{$contract->periode}}</td>
                        <td> {{$contract->start_contract}}</td>
                        @if($contract->end_contract == null)
                           <td class="text-black">nog niet gestopt</td>
                        @else
                            <td> {{$contract->end_contract}}</td>
                        @endif

                    </tr>

                    </tbody>

                @endforeach


            </table>



        </div>
        <div class="tab-pane fade " id="facturen-tab-pane" role="tabpanel" aria-labelledby="facturen-tab" tabindex="0">
            <div class="container">
            <h1>Facturen</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Factuur nummer</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Betaald om</th>
                        <th scope="col">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoices as $invoice)
                    <tr>
                        <td>{{$invoice->id}}</td>
                        <td>{{$invoice->date}}</td>
                        <td>@if($invoice->paid_at != null) {{$invoice->paid_at}} @else nog niet betaald @endif</td>
                        <td><a class="btn btn-primary text-white" href="{{route("invoice.show", $invoice->id)}}">Details</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        <div class="tab-pane fade" id="Maintenance-tab-pane" role="tabpanel" aria-labelledby="Maintenance-tab" tabindex="0">
            <h1>Storingsaanvragen</h1>
            <a href="{{route('maintenance.createAppointment', $company)}}" class="btn btn-primary">Afspraak aanmaken</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Afspraak nummer</th>
                    <th scope="col">Datum</th>
                    <th scope="col">Opmerking</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{$appointment->id}}</td>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->remark}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
@endsection
