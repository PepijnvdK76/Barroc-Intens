<body>
@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 mb-4 ">
            <h2 class="mb-3 text-white fs-3 fw-bold">Detail pagina afspraak</h2>
            <p class="text-white fs-5"><span class="fw-bold">Bedrijfnaam: </span>{{$company->name}}</p><br>
            <p class="text-white fs-5"><span class="fw-bold">Telefoonnummer: </span>{{$company->phone}}</p><br>
            <p class="text-white fs-5"><span class="fw-bold">Adres: </span>{{$company->street}} {{$company->house_number}} {{$company->city}}</p><br>
            <p class="text-white fs-5"><span class="fw-bold">Datum: </span>{{$appointment->date->format('H:i - d/m/Y')}}</p><br>
            <p class="text-white fs-5"><span class="fw-bold">Opmerking: </span>{{$appointment->remark}}</p>
            <a href="{{route('maintenance.index')}}" class="btn btn-primary mt-4">Ga terug naar overzicht</a>
        </div>
    </div>


<table class="table table-striped text-dark">
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

