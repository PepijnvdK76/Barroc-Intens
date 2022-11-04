@extends('layouts.app')
@section('headerName')
    <h1 class="text-black">Inkoop</h1>
@endsection
@section('content')
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
                                <form action="" >
                                    @csrf
                                        <input type="search" name="search" id="" class="form-control" placeholder="Zoek een product" value="{{$search}}">
                                    <button class="btn btn-default">Search</button>
                                </form>
                                <a class="btn btn-warning" href="{{route('inkoop.create')}}">Product aanmaken</a>

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
                            <tr class="border-bottom" >
                                <th scope="row"></th>
                                <td><a href="{{route('inkoop.show', $product)}}">{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->price}}</td>
                                <td class="buttons d-flex justify-content-end">
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
                </div>
            </div>
        </div>
    </div>
</div>
    <style>

    </style>
@endsection
