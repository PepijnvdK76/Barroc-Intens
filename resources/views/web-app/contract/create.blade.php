@extends('layouts.app')

@section('content')
    <h1 class="text-black">Contract aanmaken</h1>

    <?php $datetoday = date("Y-m-d"); ?>
    <form method="post" action="{{route('contract.store')}}">
        @csrf
        <select class="form-control" name="periode">
            <option value="maandelijks">maandelijks</option>
            <option value="Periodieke">Periodieke</option>
        </select>

        <label for="exampleFormControlSelect1">Bedrijf</label>
        <select class="form-control" id="company_id" name="company_id">
            @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn bg-primary btn-primary mt-3">Submit</button>
    </form>
@endsection
