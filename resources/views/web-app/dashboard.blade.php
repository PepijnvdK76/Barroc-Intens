@extends('layouts.app')

@section('content')
    <div class="container-sm bg-white">
    <div style="padding: 29vh;">
        <div class="container text-center">
            <div class="row g-2">
                <div class="col-6">
                    <a href="{{ route('inkoop.index') }}">  <div class="contactBtn rounded-5">Inkoop</div></a>
                </div>
                <div class="col-6">
                    <a href="{{ route('finance.index') }}">    <div class="contactBtn rounded-5">Finance</div></a>
                </div>
                <div class="col-6">
                    <a href="{{ route('maintenance.index') }}">   <div class="contactBtn rounded-5">Maintenance</div></a>
                </div>
                <div class="col-6">
                    <a href="{{ route('sales.index') }}"><div class="contactBtn rounded-5">Sales</div></a>
                </div>
            </div>
            <div class="row g-2 d-flex justify-content-center">
                <div class="col-6 p-2">
                    <a href="{{ route('company.index') }}"> <div class="contactBtn rounded-5">Klanten lijst</div></a>
                </div>
            </div>
        </div>
    </div>


@endsection
