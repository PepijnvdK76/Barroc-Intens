@extends('layouts.app')

@section('content')
    <div class="container-sm bg-white">
    <div style="padding: 33vh;">


        <div class="container text-center">
            <div class="row g-2">
                <div class="col-6">
                    <div class="p-3  border bg-light rounded-5"><a href="{{ route('inkoop.index') }}">Inkoop</a></div>
                </div>
                <div class="col-6">
                     <div class="p-3 border bg-light rounded-5"><a href="{{ route('finance.index') }}">Finance</a></div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light rounded-5"><a href="{{ route('maintenance.index') }}">Maintenance</a></div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light rounded-5"><a href="{{ route('sales.index') }}">Sales</a></div>
                </div>
            </div>
        </div>
    </div>


@endsection
