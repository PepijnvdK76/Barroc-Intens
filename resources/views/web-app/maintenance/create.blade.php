@extends('layouts.app')
@section('content')
        <?php $datetoday = date("d-m-Y H:i"); ?>
        <form action="{{route('maintenance.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" class="form-control" id="title" name="title" style="border-radius: 6px">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Bedrijf</label>
                <select class="form-control" id="company_id" name="company_id">
                    @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Product</label>
                <select class="form-control" id="product_id" name="product_id">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Notities</label>
                <textarea class="form-control" id="remark" name="remark" rows="8"></textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Datum</label>
                <input type="datetime-local" class="form-control" value="<?php echo $datetoday ?>" id="date" name="date" style="border-radius: 6px">
            </div>
            <input type="submit" value="Maak afpraak aan" class="btn btn-primary bg-primary">
        </form>
@endsection
