<h1>review aanmaken</h1>

<form method="POST" action="{{route('review.store')}}">
    @csrf
    <div class="form-group">
        <label for="">titel</label>
        <input type="text" step="any" name="title" class="form-control">
    </div>

    <select class="form-control" id="appointment_id" name="appointment_id">
        @foreach($appointments as $appointment)
            <option value="{{$appointment->id}}">{{$appointment->title}}</option>
        @endforeach
    </select>

    <div class="form-group">
        <label for="">probleem</label>
        <textarea name="problem" class="form-control" id="" cols="" rows="10"> </textarea>
    </div>
    <div>
        <input type="submit" value="save item" class=" btn btn-primary">
    </div>
</form>
