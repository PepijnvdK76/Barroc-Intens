@extends('layouts.app')

@section('content')

<h1 style="color: black">{{$product->name}}</h1>
<div class="col-lg-8 mb-4 ">
    <p class="text-black fs-5"><span class="fw-bold">Beschrijving: </span>{{$product->description}}</p><br>
    <p class="text-black fs-5"><span class="fw-bold">Afbeelding pad: </span>{{$product->image_path}}</p><br>
    <p class="text-black fs-5"><span class="fw-bold">Product code: </span>{{$product->product_code}}</p><br>
    <p class="text-black fs-5"><span class="fw-bold">Prijs: </span>{{$product->price}}</p><br>
    <a href="{{route('inkoop.index')}}" class="btn btn-primary mt-4">Ga terug naar overzicht</a><br>
</div>


@endsection
