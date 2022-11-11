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
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="facturen-tab" data-bs-toggle="tab" data-bs-target="#afspraak-tab-pane" type="button" role="tab" aria-controls="afspraak-tab-pane-tab-pane" aria-selected="false">afspraak aanmaken</button>
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
                    @if($contract->end_contract >= today())
                    <tbody>
                    <tr>
                        <td>{{$contract->id}}</td>
                        <td>{{$contract->periode}}</td>
                        <td> {{\Carbon\Carbon::parse($contract->start_contract)->format('d/m/Y')}}</td>
                        @if($contract->end_contract == null)
                           <td class="text-black">nog niet gestopt</td>
                        @else
                            <td> {{\Carbon\Carbon::parse($contract->end_contract)->format('d/m/Y')}}</td>
                        @endif

                    </tr>

                    </tbody>
@endif
                @endforeach


            </table>

            <div class="form mb-3 fw-bold text-center">
                <p> Om contracten te laten stoppen moet u een mail sturen naar : finance@barroc.it</p>
            </div>

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
                    @if($appointment->date > today())
                    <tr>
                        <td>{{$appointment->id}}</td>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->remark}}</td>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="afspraak-tab-pane" role="tabpanel" aria-labelledby="afspraak-tab" tabindex="0">
            <h1>storings afspraak maken</h1>

            <?php $datetoday = date("d-m-Y H:i"); ?>
            <form action="{{route('maintenance.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titel</label>
                    <input type="text" class="form-control" id="title" name="title" style="border-radius: 6px">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlSelect1">Bedrijf</label>
                    <select class="form-control" id="company_id" name="company_id">
                            <option value="{{$company->id}}">{{$company->name}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Product</label>
                    <select class="form-control" id="product_id" name="product_id">
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Notities</label>
                    <textarea class="form-control" id="remark" name="remark" rows="8"></textarea>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Datum</label>
                    <input type="datetime-local" class="form-control" value="<?php echo $datetoday ?>" id="date" name="date" style="border-radius: 6px">
                </div>
                <input type="submit" value="Maak afpraak aan" class="btn btn-primary bg-primary">
            </form>
        </div>
        </div>
@endsection
