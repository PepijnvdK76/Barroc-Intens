<?php

namespace App\Http\Controllers;

use App\Models\Maintenance_appointments;
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
        if ($request->tijd_id == 1)
        {
            $appointments = Maintenance_appointments::all();
            return view('web-app/maintenance')
                ->with(['appointments' => $appointments]);
        }
        elseif ($request->tijd_id == 2)
        {
            $date = now()->subDays(7);
            $appointments = Maintenance_appointments::whereDate('date', '>=', $date)->get();
            return view('web-app/maintenance')
                ->with(['appointments' => $appointments]);
        }
        elseif ($request->tijd_id == 3)
        {
            $appointments = Maintenance_appointments::whereDate('date', '=', today())->get();
            return view('web-app/maintenance')
                ->with(['appointments' => $appointments]);
        }
        else
        {
            return view('maintenance.index');
        }
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
