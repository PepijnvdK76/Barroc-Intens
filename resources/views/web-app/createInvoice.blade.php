@extends('layouts.app')

@section('content')
    <?php $datetoday = date("Y-m-d"); ?>
        <form method="post" action="{{route('finance.store')}}">
            @csrf
                <div class="form-group mb-3">
                    <label class="mt-3 text-black " for="date ">Datum van factuur </label>
                    <input style="border-radius: 0.375rem" value="<?php echo $datetoday; ?>" type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group mb-3">
                    <label class="text-black" for="exampleFormControlSelect1">Bedrijf</label>
                    <select class="form-control" id="company_id" name="company_id">
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>

            <div class="form-group mb-3">
                <label class="text-black" for="exampleFormControlSelect1">Producten</label>
                <select class="form-control" id="product_id" name="product_id">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn bg-primary btn-primary mt-3">Submit</button>
        </form>
@endsection
