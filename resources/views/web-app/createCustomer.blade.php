@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Naam</th>
            <th scope="col">Email</th>
            <th scope="col">Active</th>
            <th scope="col">Account Activeren</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            @if($user->active =='1')
                <td>active</td>
            @else
                <td>not active</td>
            @endif
            <td><a class="btn btn-warning" href="{{route('user.edit' , $user)}}">Account Activeren</a></td>
        </tr>

        </tbody>
        @endforeach
    </table>

@endsection
