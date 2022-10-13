@extends('layouts.app')

@section('content')


    @if(Session::has('alert'))
        <p class="alert {{ Session::get('alert') }}">{{ Session::get('alert') }}</p>
    @endif
    <div class="container" style="max-width: 1000px;">
        <div class="shadow p-3 mb-5 bg-white rounded" style="background-color: white; margin-top: 50px; border-radius: 10px;  ">

            <form class="row g-3"  method="post" action="{{route('company.store')}}">
                @csrf
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Berijfsnaam</label>
                    <input type="text" class="form-control" placeholder="" name="name" aria-label="Bedrijfsnaam">
                </div>
                <div class="col-md-6">
                    <label for="inputPhoneNumber4" class="form-label">Telefoon Nummer</label>
                    <input type="phonenumber" class="form-control" name="phone" id="inputPhoneNumber44">
                </div>
                <div class="col-6">
                    <label for="inputStraatnaam" class="form-label">Straatnaam</label>
                    <input type="text" class="form-control" id="inputStraatnaam" name="street" >
                </div>
                <div class="col-6">
                    <label for="inputHuisNummer" class="form-label">Huis Nummer</label>
                    <input type="text" class="form-control" id="inputHuisNummer" name="house_number">
                </div>


                <div class="col-4">
                    <label for="land" class="form-label">Land</label>
                    <input type="text" maxlength="3" class="form-control" id="inputLand" name="country_code">
                </div>

                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Stad</label>
                    <input type="text" class="form-control" id="inputCity" name="city">
                </div>


                <div class="col-12">
                    <button type="submit" value="Save Company" class="btn btn-primary bg-primary" >Send</button>
                </div>
            </form>

        </div>
    </div>
    </div>

@endsection
