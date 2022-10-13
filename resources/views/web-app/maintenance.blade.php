


<h1>maintenance</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Details</th>
        <th scope="col">datum</th>
    </tr>
    </thead>

    <tbody>
    @foreach($appointments as $appointment)
        <tr>
            <th><a href="{{route('maintenance.show', $appointment->company_id)}}">{{$appointment->company_id}}</a></th>
            <th>{{$appointment->date}}</th>
        </tr>
    @endforeach
    </tbody>
</table>
