<h1>{{$product->name}}</h1>

<p>beschrijving:  {{$product->description}}</p>
<p>afbeelding pad:  {{$product->image_path}}</p>
<p>prijs:  {{$product->price}}</p>

<a href="{{route('inkoop.index')}}">Ga terug naar overzicht</a>
