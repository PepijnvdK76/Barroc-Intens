@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('finance.update', $company)}}">
        @csrf
        @method("PUT")
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="text-white">Naam</th>
                <th scope="col" class="text-white">Nummer</th>
                <th scope="col" class="text-white">Adres</th>
                <th scope="col" class="text-white">Huisnummer</th>
                <th scope="col" class="text-white">Stad</th>
                <th scope="col" class="text-white">Land</th>
                <th scope="col" class="text-white">laatst geupdate</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><label class="text-white" for="">{{$company->name}}</label></td>
                <td><label class="text-white" for="">{{$company->phone}}</label></td>
                <td><label class="text-white" for="">{{$company->street}}</label></td>
                <td><label class="text-white" for="">{{$company->house_number}}</label></td>
                <td><label class="text-white" for="">{{$company->city}}</label></td>
                <td><label class="text-white" for="">{{$company->country_code}}</label></td>
                <td><label class="text-white" for="">{{$company->updated_at}}</label></td>
            </tr>
            </tbody>
        </table>
        <div class="form-group mt-3">
            <select class="form-control" name="bkr_checked_at">
                <option value="{{$company->bkr_checked_at}}">{{$company->bkr_checked_at}}</option>
                <option value="Niet gecheckt">Niet gecheckt</option>
                <option value="goed">goed</option>
                <option value="fout">fout</option>
            </select>
        </div>
        <button type="submit" class="btn bg-primary btn-primary mt-3" style="margin-bottom: 28%">Submit</button>
    </form>
@endsection
