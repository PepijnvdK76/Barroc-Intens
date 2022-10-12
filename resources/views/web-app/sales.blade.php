<body style="background-color: white">
@extends('layouts.site')

@section('content')
    <div class="container">
        <a href="" class="klant_aanmaken"><img src="{{ Vite::asset('public/content/img/notes.png') }}" width=4%" alt="" style="background-color: lightgray; border-radius: 10px" class="p-2">Klant gegevens</a>
    </div>
    <div class="container">
        <a href="" class="klant_aanmaken"><img src="{{ Vite::asset('public/content/img/add-user.png') }}" width=4%" alt="" style="background-color: lightgray; border-radius: 10px" class="p-2">Klant Aanmaken</a>
    </div>
    <div class="container">
        <a href="{{route('sales.create')}}" class="klant_aanmaken"><img src="{{ Vite::asset('public/content/img/notes.png') }}" width=4%" alt="" style="background-color: lightgray; border-radius: 10px" class="p-2">Notities</a>
    </div>
@endsection
</body>
