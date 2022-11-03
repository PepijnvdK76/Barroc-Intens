@extends('layouts.app')

@section('content')

    {{--    <a href=""  class="btn btn-primary btn-lg btn-block">Zie klanten lijst</a><br>--}}
    <h2 class="text-black fs-4 fw-bold">Alle facturen van bedrijf: {{$company->name}}</h2>
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
                    <td>@if(empty($invoice->paid_at)) Nog niet betaald   @else {{$invoice->paid_at->format('d-m-Y')}} @endif</td>
                    <td>{{$invoice->company_id}}</td>
                    <td><a class="btn btn-warning" href="{{route('finance.updatePaidStatus' , $invoice)}}">Status aanpassen</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection





