@extends('layouts.app')

@section('content')


    <form method="POST" action="{{route('user.update', $user)}}">
        @csrf
        @method("PUT")

        <div class="form-group mt-3">
            <select class="form-control" name="active">
                <option value="{{$user->active}}">{{$user->active}}</option>
                <option value="1">Activeren</option>
                <option value="0">DeActiveren</option>
            </select>
        </div>
        <button type="submit" class="btn bg-primary btn-primary mt-3" style="margin-bottom: 28%">Submit</button>
@endsection
