
@extends('layouts.app')
@section('content')
<h1 class="text-black">Uw Gegevens</h1>
    <form method="POST" action="{{route('company.update', $company)}}">
        @csrf
        @method('PUT')
    <h2>Naam</h2>
    <div class="form mb-3 shadow-sm">
        <input  type="text" name="name" class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Naam" value="{{$company->name}}">
    </div>
    <h2>Telefoon nummer</h2>
    <div class="form mb-3 shadow-sm ">
        <input  type="text" name="phone" class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{$company->phone}}">
    </div>
    <div class="mb-3 row ">
        <div class="col-auto ">
            <h2>Stad</h2>
            <div class="form mb-3 shadow-sm">
                <input  type="text" name="city" class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{$company->city}}">
            </div>
        </div>
        <div class="col-auto ">
            <h2>Straat</h2>
            <div class="form mb-3 shadow-sm ">
                <input  type="text" name="street" class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{$company->street}}">
            </div>
        </div>
        <div class="col-auto">
            <h2>Huis nummer</h2>
            <div class="form mb-3 shadow-sm ">
                <input  type="text" name="house_number" class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{$company->house_number}}">
            </div>
        </div>
    </div>
    <h2>Land code</h2>
    <div class="form mb-3 shadow-sm">
        <input  type="text" name="country_code" class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{$company->country_code}}">
    </div>
    <h2>BKR check</h2>
    <div class="form mb-3 shadow-sm">
        <input  type="email" name="bkr_checked_at"  readonly class="form-control-plaintext bg-gray-100 border-transparent rounded " placeholder="Telefoon nummer" value="{{$company->bkr_checked_at}}">
    </div>
    <h2>Gegevens aanpassen</h2>
        <input type="submit" value="Aanpassingen opslaan" class="btn btn-primary bg-primary">
    </form>
@endsection
