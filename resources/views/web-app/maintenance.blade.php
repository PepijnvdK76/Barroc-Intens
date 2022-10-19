@extends('layouts.app')

@section('content')
<h1 class="text-dark">maintenance</h1>
        <table class="table text-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Datum</th>
                <th scope="col">Wijzig</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($appointments as $appointment)
                <td><label for="">{{$appointment->company_id}}</label></td>
                <td><label for="">{{$appointment->date->format('H:i - d/m/Y')}}</label></td>
                <td><a href="{{route('maintenance.show', $appointment->company_id)}}" class="btn btn-warning">Overzicht</a></td>
                @endforeach
            </tr>
            </tbody>
        </table>
@endsection
