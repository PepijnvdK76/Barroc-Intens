@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('finance.update', $company)}}">
        @csrf
        @method("PUT")
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
