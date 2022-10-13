@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('finance.update', $company)}}">
        @csrf
        @method("PUT")
            <label class="text-white" for="">{{$company->name}}</label>
            <label class="text-white" for="">{{$company->phone}}</label>
            <label class="text-white" for="">{{$company->street}}</label>
            <label class="text-white" for="">{{$company->house_number}}</label>
            <label class="text-white" for="">{{$company->city}}</label>
            <label class="text-white" for="">{{$company->country_code}}</label>
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
