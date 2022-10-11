
    <h1>finance</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">naam</th>
            <th scope="col">telefoon</th>
            <th scope="col">straat</th>
            <th scope="col">huisnummer</th>
            <th scope="col">stad</th>
            <th scope="col">landnummer</th>
            <th scope="col">bkr check</th>
        </tr>
        </thead>

        <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{{$company->id}}</th>
                <td>{{$company->name}}</td>
                <td>{{$company->phone}}</td>
                <td>{{$company->street}}</td>
                <td>{{$company->house_number}}</td>
                <td>{{$company->city}}</td>
                <td>{{$company->country_code}}</td>
                <td>{{$company->bkr_checked_at}}</td>
                <td><a class="btn btn-warning" href="{{route('finance.edit' , $company)}}">BKR aanpassen</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>



