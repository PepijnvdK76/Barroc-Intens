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
                                    @if($part->amount <= 100)
                                        <td class="text-danger">{{$part->amount}}</td>
                                    @elseif($part->amount <= 500)
                                        <td class="text-warning">{{$part->amount}}</td>
                                    @else
                                        <td>{{$part->amount}}</td>
                                        @endif
                                    <td>@if($part->varify == 1) bevestigd @else niet bevestigd @endif</td>
                                    <td class="d-flex   justify-end">

                                            <form method="POST" class="d-flex m-0" action="{{route('parts.update' , $part)}}" >
                                                @csrf
                                                @method('PUT')
                                                <input  type="number" name="amount" class="form-control-plaintext bg-gray-100 border-transparent rounded mr-4" placeholder="amount">
                                            <input class="btn btn-warning bg-warning mr-2" type="submit" value="order">
                                            </form>

                                        <form class="m-0" method="POST" action="{{route('parts.destroy' , $part)}}">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger bg-danger p-2" type="submit" value="Delete">
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
        <div class="row">
            <div class="col-md-offset-1 ">
                <div class="panel">
        <div class="panel-body table-responsive mt-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Naam</th>
                    <th scope="col">Beschrijving</th>
                    <th scope="col">Prijs</th>
                    <th scope="col">Aantal</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                @foreach($confirms as $confirm)
                    <tbody>
                    <tr class="border-bottom">
                        <th scope="row"></th>
                        <td>{{$confirm->name}}</td>
                        <td>{{$confirm->description}}</td>
                        <td>{{$confirm->price}}</td>
                        <td>{{$confirm->amount}}</td>
                        <td><form  method="POST" action="{{route('confirm.update', $part)}}">
                                @csrf
                                @method('put')
                                <input type="submit"  class="btn btn-warning bg-warning" value="bevestig">
                            </form></td>

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
