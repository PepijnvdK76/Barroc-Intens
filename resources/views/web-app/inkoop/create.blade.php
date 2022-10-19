@extends('layouts.app')

@section('content')


<div class="container-sm bg-white">

    <div class="container-sm d-flex" style="max-width: 1000px;">
        <div class="shadow p-3 mb-5  rounded" style="background-color: #212121; margin-top: 50px; border-radius: 10px; color: white; margin-left: 300px;  ">
            <h1>Producten</h1>
        <h2>voeg een product toe</h2>
    <form method="POST" action="{{route('inkoop.store')}}">
    @csrf
    <div class="form-group">
        <label for="">name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">description</label>
        <textarea name="description" class="form-control" id="" cols="" rows="10"> </textarea>
    </div>
    <div class="form-group">
        <label for="">image path</label>
        <input type="text" name="image_path" class="form-control">
    </div>

    <div class="form-group">
        <label for="">price</label>
        <input type="number" step="any" name="price" class="form-control">
    </div>

    <select name="products_category_id" style="color: black">
        <option value="1" style="color: black">bonen</option>
        <option value="2" style="color: black">apparaten</option>
        <option value="3" style="color: black">materiaal</option>
    </select>
        <div>
             <input type="submit" value="save item" class=" btn btn-primary">
        </div>
</form>
        </div>
    </div>
</div>


<div style="padding: 12vh;"></div>
</div>
@endsection
