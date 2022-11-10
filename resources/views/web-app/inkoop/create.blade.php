@extends('layouts.app')

@section('content')



    <div class="container-sm d-flex" style="max-width: 5000px; color: white; align-items: center; padding-left: 250px">

        <div class="shadow p-3 mb-5  rounded" style="background-color: #212121; margin-top: 50px; border-radius: 10px;  width: 800px;">
            <div>
                <h1>Product aanmaken</h1>
            </div>

    <form method="POST" action="{{route('inkoop.store')}}">
    @csrf
    <div class="mb-3">
        <label for="">Naam</label>
        <input type="text" name="name" class="form-control" style="border-radius: 0.375rem">
    </div>
    <div class="form-group">
        <label for="">Beschrijving</label>
        <textarea name="description" class="form-control" id="" cols="" rows="10"> </textarea>
    </div>
    <div class="form-group" >
        <label for="">Foto</label>
        <input type="text" name="image_path" class="form-control" style="border-radius: 0.375rem">
    </div>

    <div class="form-group" >
        <label for="">Product code</label>
        <input type="text" name="product_code" class="form-control" style="border-radius: 0.375rem">
    </div>

    <div class="form-group" >
        <label for="">Prijs</label>
        <input type="number" step="any" name="price" class="form-control" style="border-radius: 0.375rem">
    </div>

    <div class="form-group" >
        <label for="" style="border-radius: 10px;">status</label>
        <select class="form-control" name="status" style="color: black; border-radius: 10px;">
            @foreach ($products as $product)
                <option value="{{$product->status}}">{{$product->status}}</option>
            @endforeach
            <option value="Momenteel leverbaar">Momenteel leverbaar</option>
            <option value="Uit vooraad">Uit vooraad</option>
        </select>
    </div>

    <div class="form-group" >
        <label for="" style="border-radius: 10px;">amount</label>
        <input type="number" step="any" name="amount" class="form-control" style="border-radius: 0.375rem">
    </div>

    <div class="form-group">
        <label for="">Categorie</label>
        <select class="form-control" name="products_category_id" style="color: black; border-radius: 10px;">
            <option value="1">bonen</option>
            <option value="2">apparaten</option>
            <option value="3">materiaal</option>
        </select>
    </div>


        <div >
            <button type="submit" value="Save Company" class="btn " style="background-color: #ffd700; margin-top: 10px">Send</button>
        </div>
</form>
        </div>
    </div>
@endsection
