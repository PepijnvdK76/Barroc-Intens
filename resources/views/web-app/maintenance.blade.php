<body>
@extends('layouts.app')

@section('content')
<h1>maintenance</h1>
    <tbody>
    @foreach($appointments as $appointment)
        <table class="table text-white">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Datum</th>
                <th scope="col">Wijzig</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><label for="">{{$appointment->company_id}}</label></td>
                <td><label for="">{{$appointment->date}}</label></td>
                <td><a href="{{route('maintenance.show', $appointment->company_id)}}" class="btn btn-warning">Overzicht</a></td>
            </tr>
            </tbody>
        </table>
    @endforeach
    </tbody>
</table>
@endsection
</body>
