<<<<<<< Updated upstream

    <h1>finance</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">naam</th>
            <th scope="col">telefoon</th>
            <th scope="col">straat</th>
            <th scope="col">huisnummer</th>
            <th scope="col">stad</th>
            <th scope="col">landnummer</th>
            <th scope="col">bkr check</th>
        </tr>
        </thead>

        <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{{$company->id}}</th>
                <td>{{$company->name}}</td>
                <td>{{$company->phone}}</td>
                <td>{{$company->street}}</td>
                <td>{{$company->house_number}}</td>
                <td>{{$company->city}}</td>
                <td>{{$company->country_code}}</td>
                <td>{{$company->bkr_checked_at}}</td>
                <td><a class="btn btn-warning" href="{{route('finance.edit' , $company)}}">BKR aanpassen</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-site-layout>
        <x-slot:content>
            <div class="container" >
=======
@extends('layouts.app')
@section('content')
>>>>>>> Stashed changes
                <form>
                    <div class="form-group">
                        <label class="text-white" for="exampleFormControlInput1 ">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>bedrijf 1</option>
                            <option>bedrijf 2</option>
                            <option>bedrijf 3</option>
                            <option>bedrijf 4</option>
                            <option>bedrijf 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
                <button type="submit" class="btn bg-primary btn-primary mt-3">Submit</button>
@endsection
