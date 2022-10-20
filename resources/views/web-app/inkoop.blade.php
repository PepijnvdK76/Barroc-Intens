@extends('layouts.app')

@section('content')
<h1>Inkoop</h1>
<form action=""  class="col-9">
    @csrf
<div class="form-group">
    <input type="search" name="search" id="" class="form-control" placeholder="Zoek een product" value="{{$search}}">
</div>

    <button class="btn btn-primary">Search</button>
</form>
<ul>

        <table class="table" style="color: black">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">naam</th>
                <th scope="col">beschrijving</th>
                <th scope="col">prijs</th>
            </tr>
            </thead>
            @foreach($products as $product)
            <tbody>
            <tr>
                <th scope="row"><a href="{{route('inkoop.show', $product)}}">{{$product->id}}</a></th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td class="buttons d-flex">
                    <a class="btn btn-warning" href="{{route('inkoop.edit' , $product)}}">aanpassen</a>
                    <form method="POST" action="{{route('inkoop.destroy', $product)}}">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="delete">
                    </form>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>

        <a class="btn btn-warning" href="{{route('inkoop.create')}}">Product aanmaken</a>
</ul>
@endsection
