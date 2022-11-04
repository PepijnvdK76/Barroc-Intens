@extends('layouts.app')
@section('headerName')
    <h1 class="text-black">Inkoop</h1>
@endsection
@section('content')

{{--<form action=""  class="col-9">
    @csrf
<div class="form-group">
    <input type="search" name="search" id="" class="form-control" style="border-radius: 0.375rem" placeholder="Zoek een product" value="{{$search}}">
</div>
    <button class="btn btn-primary">Search</button>
</form>
<ul>

        <table class="table" style="color: black">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Naam</th>
                <th scope="col">Beschrijving</th>
                <th scope="col">Product code</th>
                <th scope="col">Prijs</th>
                <th></th>
            </tr>
            </thead>
            @foreach($products as $product)
            <tbody>
            <tr>
                <th scope="row"><a href="{{route('inkoop.show', $product)}}">{{$product->id}}</a></th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->product_code}}</td>
                <td>{{$product->price}}</td>
                <td class="buttons d-flex">
                    <a class="btn btn-warning" href="{{route('inkoop.edit' , $product)}}">aanpassen</a>
                    <form method="POST" action="{{route('inkoop.destroy', $product)}}">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger bg-danger" type="submit" value="delete">
                    </form>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>

        <a class="btn btn-warning" href="{{route('inkoop.create')}}">Product aanmaken</a>
</ul>--}}
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 ">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">Product <span>Lijst</span></h4>
                        </div>
                        <div class="col-sm-9 col-xs-12 text-right">
                            <div class="btn_group">
                                <a class="btn btn-warning mb-2" href="{{route('inkoop.create')}}">Product aanmaken</a>

                                <form action="" >
                                    @csrf
                                        <input type="search" name="search" id="" class="form-control" placeholder="Zoek een product" value="{{$search}}">
                                    <button class="btn btn-default">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Naam</th>
                            <th scope="col">Beschrijving</th>
                            <th scope="col">Product code</th>
                            <th scope="col">Prijs</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($products as $product)
                            <tbody>
                            <tr class="border-bottom">
                                <th scope="row"></th>
                                <td><a href="{{route('inkoop.show', $product)}}">{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->price}}</td>
                                <td class="d-flex align-items-center justify-end">
                                    <a class="btn btn-warning mr-2" href="{{route('inkoop.edit' , $product)}}">Edit</a>
                                    <form class="m-0" method="POST" action="{{route('inkoop.destroy', $product)}}">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger bg-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <style>

    </style>
@endsection
