<body style="background-color: white">
@extends('layouts.app')


@section('content')
    <?php $datetoday = date("Y-m-d"); ?>
    <form action="{{route('sales.store')}}" method="post">
        @csrf
        <div class="mb-3" style="padding-top: 100px">
            <label for="date" class="form-label">Datum</label>
            <input type="date" class="form-control" value="<?php echo $datetoday ?>" id="date" name="date" style="border-radius: 6px">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Bedrijf</label>
            <select class="form-control" id="company_id" name="company_id">
                @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="note" class="form-label">Notities</label>
            <textarea class="form-control" id="note" name="note" rows="8"></textarea>
        </div>
        <input type="submit" value="Sla notities op" class="btn btn-primary bg-primary">
    </form>
@endsection
</body>
