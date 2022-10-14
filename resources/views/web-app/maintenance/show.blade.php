<body>
@extends('layouts.app')

@section('content')
<a href="{{route('maintenance.index')}}" class="text-white">Ga terug naar overzicht</a>


<table class="table table-striped text-white">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">naam</th>
        <th scope="col">telefoon</th>
        <th scope="col">huisnummer</th>
        <th scope="col">stad</th>
        <th scope="col">opmerking</th>
        <th scope="col">datum</th>
    </tr>
    </thead>

    <tbody>
        <tr>
            <th scope="row" class="text-white">{{$company->id}}</th>
            <td class="text-white">{{$company->name}}</td>
            <td class="text-white">{{$company->phone}}</td>
            <td class="text-white">{{$company->house_number}}</td>
            <td class="text-white">{{$company->city}}</td>
            <td class="text-white">{{$appointment->remark}}</td>
            <td class="text-white">{{$appointment->date}}</td>
        </tr>
    </tbody>
</table>


@endsection
</body>

