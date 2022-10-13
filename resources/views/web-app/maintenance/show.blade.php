


<h1>{{$company->name}}</h1>

<p>telefoon: {{$company->phone}}</p>
<p>straat : {{$company->street}}</p>
<p>huisnummer : {{$company->house_number}}</p>
<p>stad : {{$company->city}}</p>
<p>opmerking : {{$appointment->remark}}</p>
<p>datum : {{$appointment->date}}</p>

<a href="{{route('maintenance.index')}}">Ga terug naar overzicht</a>

