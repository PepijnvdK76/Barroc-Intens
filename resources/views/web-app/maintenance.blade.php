@extends('layouts.app')
@section('headerName')
    <h1 class="text-black">Maintenance</h1>
@endsection
@section('content')
    <a href="{{route('maintenance.create')}}" class="btn btn-primary">Afspraak aanmaken</a>
<form action="{{route('filter.store')}}" method="POST">
    @csrf
<select class="form-control" id="tijd_id" name="tijd_id">
        <option value="1">alles</option>
    <option value="2">1 week</option>
    <option value="3">1 dag</option>
</select>
    <input type="submit" value="filter opslaan" class="btn btn-primary bg-primary">
</form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Datum</th>
                <th scope="col">Wijzig</th>
            </tr>
        </thead>
        @foreach($appointments as $appointment)
        <tbody>
            <tr>
                <td><label for="">{{$appointment->company_id}}</label></td>
                <td><label for="">{{$appointment->date->format('H:i - d/m/Y')}}</label></td>
                <td><a href="{{route('maintenance.show', $appointment->company_id ?? 0)}}" class="btn btn-warning">Overzicht</a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <h1 class="mt-6 text-black" >werk bonnen</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">title</th>
            <th scope="col">appointment id</th>
            <th scope="col">probleem</th>
            <th scope="col">overzicht</th>
        </tr>
        </thead>
        @foreach($orders as $order)
            <tbody>
            <tr>
                <td><label for="">{{$order->id}}</label></td>
                <td><label for="">{{$order->title}}</label></td>
                <td><label for="">{{$order->appointment_id}}</label></td>
                <td><label for="">{{$order->problem}}</label></td>
                <td><a href="{{route('review.show', $order->id)}}" class="btn btn-warning">Overzicht</a></td>
            </tr>
            </tbody>
        @endforeach
    </table>
@endsection
