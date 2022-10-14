<body>
@extends('layouts.app')

@section('content')
<h1>maintenance</h1>
    <tbody>
    @foreach($appointments as $appointment)
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="text-white">Id</th>
                <th scope="col" class="text-white">Datum</th>
                <th scope="col" class="text-white">Wijzig</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><label class="text-white" for="">{{$appointment->company_id}}</label></td>
                <td><label class="text-white" for="">{{$appointment->date}}</label></td>
                <td><a href="{{route('maintenance.show', $appointment->company_id)}}" class="btn btn-warning">Overzicht</a></td>
            </tr>
            </tbody>
        </table>
    @endforeach
    </tbody>
</table>
@endsection
</body>
