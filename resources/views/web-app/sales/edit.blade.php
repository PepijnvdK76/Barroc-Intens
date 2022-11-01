@extends('layouts.app')

@section('content')


    <form method="POST" action="{{route('user.update', $user)}}">
        @csrf
        @method("PUT")

        <div class="form-group mt-3">
            <select class="form-control" name="Account Activeren">
                <option value=""></option>
                <option value="Activeren">Activeren</option>
                <option value="DeActiveren">DeActiveren</option>
            </select>
        </div>
        <button type="submit" class="btn bg-primary btn-primary mt-3" style="margin-bottom: 28%">Submit</button>
@endsection
