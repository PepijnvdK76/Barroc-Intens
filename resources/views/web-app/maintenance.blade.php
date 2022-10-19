
@extends('layouts.app')
@section('content')
<h1 class="text-dark">maintenance</h1>
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
    <table class="table text-white">
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
                <td><a href="{{route('maintenance.show', $appointment->company_id)}}" class="btn btn-warning">Overzicht</a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
