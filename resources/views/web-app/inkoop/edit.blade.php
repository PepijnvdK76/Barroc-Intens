@extends('layouts.app')

@section('content')
    <h2 class="fs-2" style="color: black">Pas een product aan</h2>
<form method="POST" action="{{route('inkoop.update', $product)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Naam</label>
        <input type="text" name="name" class="form-control" style="border-radius: 0.375rem" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label for="">Beschrijving</label>
        <textarea name="description" class="form-control" id="" cols="" rows="8">{{$product->description}} </textarea>
    </div>
    <div class="form-group">
        <label for="">image path</label>
        <input type="text" name="image_path" class="form-control" style="border-radius: 0.375rem" value="{{$product->image_path}}">
    </div>

    <div class="form-group">
        <label for="">Product Code</label>
        <input type="text" name="product code" class="form-control" style="border-radius: 0.375rem" value="{{$product->product_code}}">
    </div>

    <div class="form-group">
        <label for="">Prijs</label>
        <input type="number" step="any" name="price" class="form-control" style="border-radius: 0.375rem" value="{{$product->price}}">
    </div>

    <select name="product_category_id" style="border-radius: 0.375rem">
        <option value="{{$product->product_category_id}}"></option>
        <option value="1">bonen</option>
        <option value="2">apparaten</option>
        <option value="3">materiaal</option>
    </select>
    <input type="submit" value="save item" class="btn btn-primary bg-primary">
</form>

@endsection
