@extends('layouts.app')

@section('content')

    <?php $datetoday = date("Y-m-d"); ?>
    <form method="POST" action="{{route('paidstatus.update', $invoice)}}">
        @csrf
        @method("PUT")
        <div class="form-group mb-3">
            <label class="mt-3 text-black " for="date ">Datum van betaling </label>
            <input style="border-radius: 0.375rem" value="<?php echo $datetoday; ?>" type="date" class="form-control" id="paid_at" name="paid_at">
        </div>
        <button type="submit" class="btn bg-primary btn-primary mt-3" style="margin-bottom: 28%">Submit</button>
    </form>
@endsection
