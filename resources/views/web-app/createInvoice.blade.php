@extends('layouts.app')

@section('content')
    <?php $datetoday = date("Y-m-d"); ?>
        <form method="post" action="{{route('finance.store')}}">
            @csrf
                <div class="form-group">
                    <label class="text-white mt-3" for="date ">Datum van factuur </label>
                    <input style="border-radius: 0.375rem" value="<?php echo $datetoday; ?>" type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label class="text-white" for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="company_id" name="company_id">
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
            <button type="submit" class="btn bg-primary btn-primary mt-3" style="margin-bottom: 28%">Submit</button>
        </form>
@endsection
