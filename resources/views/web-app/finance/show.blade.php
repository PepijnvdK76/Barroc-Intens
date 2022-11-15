@extends('layouts.app')

@section('content')

    {{--    <a href=""  class="btn btn-primary btn-lg btn-block">Zie klanten lijst</a><br>--}}
    <h2 class="text-black fs-4 fw-bold">Alle facturen en contracten van bedrijf: {{$company->name}}</h2>
    <a href="{{route('finance.create')}}"  class="btn btn-primary btn-lg btn-block mt-3 mb-3">Maak factuur aan</a>


    <table class="table table-striped bg-white">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Status betaling</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>

        <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <th scope="row">{{$invoice->id}}</th>
                    <td>@if(empty($invoice->paid_at)) Nog niet betaald   @else Betaald op {{$invoice->paid_at->format('d-m-Y')}} @endif</td>
                    <td>{{$invoice->company_id}}</td>
                    <td><a class="btn btn-warning" href="{{route('finance.updatePaidStatus' , $invoice)}}">Status aanpassen</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="text-black fs-4 mb-3 fw-bold">Contracten</h2>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>periode</th>
            <th>start</th>
            <th>eind</th>
            <th>stoppen</th>
        </tr>

        </thead>

        @foreach($contracts as  $contract)
            <tbody>
            <tr>
                <td>{{$contract->id}}</td>
                <td>{{$contract->periode}}</td>
                <td> {{$contract->start_contract}}</td>
                    <td> {{$contract->end_contract}}</td>
                <form action="{{route('contract.update', $contract)}}" method="POST">
                @csrf
                @method('put')
                <td><input class="btn btn-primary bg-primary" type="submit" value="stoppen"></td>
                </form>

            </tr>

            </tbody>

        @endforeach


    </table>
@endsection





