@extends('layouts.app')
<!-- CSS only -->
@section('content')
<div class="container">
<h1 class="text-black">Uw Factuur</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Factuur nummer</th>
        <th scope="col">naam product</th>
        <th scope="col">prijs per product</th>
        <th scope="col">hoeveelheid</th>
        <th scope="col">subtotaal</th>
        <th scope="col">Datum</th>
        <th scope="col">Betaald om</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$invoice->id}}</td>
            <td>{{$Product->name}}</td>
            <td>{{$invoiceProduct->price_per_product}}</td>
            <td>{{$invoiceProduct->amount}}</td>
            <td>$ {{$invoiceProduct->amount * $invoiceProduct->price_per_product}}</td>
            <td>{{$invoice->date}}</td>
            @if($invoice->paid_at != null) <td style="color:green">{{$invoice->paid_at}}</td> @else <td style="color: red;">nog niet betaald</td> @endif</tr>
    </tbody>
</table>

    <button class="btn btn-primary"><a class="text-white" href="{{route('dashboard')}}">Terug naar overzicht</a></button>
</div>
@endsection
