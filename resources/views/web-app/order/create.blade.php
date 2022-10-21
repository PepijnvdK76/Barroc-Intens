@extends('layouts.app')

@section('content')

<h1>Producten gebruikt</h1>


<label for="">werkbon</label>
<form method="POST" action="{{route('order.store')}}">
    @csrf
    <select class="form-control" id="review_id" name="review_id">
        @foreach($reviews as $review)
            <option value="{{$review->id}}">{{$review->title}}</option>
        @endforeach
    </select>

    <label for="">Producten</label>
    <select class="form-control" id="product_id" name="product_id">
        @foreach($products as $product)
            <option value="{{$product->id}}">{{$product->name}}</option>
        @endforeach
    </select>
    <div class="form-group">
        <label for="">hoeveelheid</label>
        <input type="number" step="any" name="amount" class="form-control" style="border-radius: 8px">
    </div>

    <div>
        <input type="submit" value="save item" class=" btn btn-primary bg-primary">
    </div>
</form>

@endsection

