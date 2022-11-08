@extends('layouts.app')
@section('headerName')
    <h1 class="text-black">Onderdelen</h1>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 ">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-3 col-xs-12">
                                <h4 class="title">Onderdelen <span>Lijst</span></h4>
                            </div>
                            <div class="col-sm-9 col-xs-12 text-right">
                                <div class="btn_group">
                                    <a class="btn btn-warning mb-2" href="">Product aanmaken</a>

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
                                <th scope="col"></th>
                                <th scope="col">Naam</th>
                                <th scope="col">Beschrijving</th>
                                <th scope="col">Prijs</th>
                                <th scope="col">Aantal</th>
                                <th scope="col">Bevestigd</th>
                                <th></th>
                            </tr>
                            </thead>
                            @foreach($parts as $part)
                                <tbody>
                                <tr class="border-bottom">
                                    <th scope="row"></th>
                                    <td>{{$part->name}}</td>
                                    <td>{{$part->description}}</td>
                                    <td>{{$part->price}}</td>
                                    <td>{{$part->amount}}</td>
                                    <td>@if($part->varify == 1) bevestigd @endif</td>
                                    <td class="d-flex align-items-center justify-end">
                                        <a class="btn btn-warning mr-2" href="">Order</a>
                                        <form class="m-0" method="POST" action="">
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
@endsection
