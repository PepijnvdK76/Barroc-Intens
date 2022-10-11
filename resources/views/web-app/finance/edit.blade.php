<form method="POST" action="{{route('finance.update', $company)}}">
    @csrf
    @method("PUT")
    <label for="">{{$company->name}}</label>
    <label for="">{{$company->phone}}</label>
    <label for="">{{$company->street}}</label>
    <label for="">{{$company->house_number}}</label>
    <label for="">{{$company->city}}</label>
    <label for="">{{$company->country_code}}</label>
    <select name="bkr_checked_at">
        <option value="{{$company->bkr_checked_at}}">{{$company->bkr_checked_at}}</option>
        <option value="Niet gecheckt">Niet gecheckt</option>
        <option value="goed">goed</option>
        <option value="fout">fout</option>
    </select>

    <button type="submit" value="update">Update</button>
</form>
