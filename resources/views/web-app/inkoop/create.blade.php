@extends('layouts.app')

@section('content')


<div class="container-sm bg-white">

    <div class="container-sm d-flex" style="max-width: 5000px; color: white; align-items: center; padding-left: 250px">

        <div class="shadow p-3 mb-5  rounded" style="background-color: #212121; margin-top: 50px; border-radius: 10px;  width: 800px;">
            <div>
                <h1>Producten</h1>
            </div>

    <form method="POST" action="{{route('inkoop.store')}}">
    @csrf
    <div class="mb-3">
        <label for="" style="border-radius: 10px;">name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">description</label>
        <textarea name="description" class="form-control" id="" cols="" rows="10"> </textarea>
    </div>
    <div class="form-group" >
        <label for="" style="border-radius: 10px;">image path</label>
        <input type="text" name="image_path" class="form-control">
    </div>

    <div class="form-group" >
        <label for="" style="border-radius: 10px;">price</label>
        <input type="number" step="any" name="price" class="form-control">
    </div>


    <select name="products_category_id" style="color: black; border-radius: 10px;">
        <option value="1">bonen</option>
        <option value="2">apparaten</option>
        <option value="3">materiaal</option>

    </select>

        <div >
            <button type="submit" value="Save Company" class="btn " style="background-color: #ffd700">Send</button>
        </div>
</form>
        </div>
    </div>
</div>


<div style="padding: 12vh;"></div>
</div>
@endsection
