<?php

namespace App\Http\Controllers;

use App\Models\Maintenance_appointment_review;
use App\Models\Maintenance_appointments;
use App\Models\Review;
use App\Models\Review_product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointments = null;

        if ($request->tijd_id == 1)
        {
            $appointments = Maintenance_appointments::all();

        }
        elseif ($request->tijd_id == 2)
        {
            $date = now()->subDays(7);
            $appointments = Maintenance_appointments::whereDate('date', '>=', $date)->get();
        }
        elseif ($request->tijd_id == 3)
        {
            $appointments = Maintenance_appointments::whereDate('date', '=', today())->get();

        }

        $orders = Maintenance_appointment_review::all();
        return view('web-app/maintenance')
            ->with(['appointments' => $appointments])
            ->with(['orders' => $orders]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
