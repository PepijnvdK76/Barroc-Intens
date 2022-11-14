@extends('layouts.app')

@section('content')

    <h1 class="mt-6 text-black"> werkbon details</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">title</th>
            <th scope="col">appointment id</th>
            <th scope="col">probleem</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td><label for="">{{$review->id}}</label></td>
                <td><label for="">{{$review->title}}</label></td>
                <td><label for="">{{$review->appointment_id}}</label></td>
                <td><label for="">{{$review->problem}}</label></td>
            </tr>
    </table>

    <h1 class="mt-6 text-black" >details</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">product naam</th>
            <th scope="col">hoeveelheid</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td><label for="">{{$detail->review_id}}</label></td>
                <td><label for="">{{$product->name}}</label></td>
                <td><label for="">{{$detail->amount}}</label></td>

            </tr>
            </tbody>
    </table>

    <a class="btn btn-primary" href="{{route('maintenance.index')}}">terug naar overzicht</a>

@endsection
