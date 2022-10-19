<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Maintenance_appointments;
use Illuminate\Http\Request;

class Maintenance_appointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Maintenance_appointments::all();
        return view('web-app/maintenance')
            ->with(['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $appointments = Maintenance_appointments::all();
        return view('web-app/maintenance.create')
            ->with(['appointments' => $appointments])
            ->with(['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maintenance_appointment = maintenance_appointments::create($request->except('_token'));
        return redirect(route('maintenance.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Maintenance_appointments::findorfail($id);
               $company = Company::findorfail($id);
                return view('web-app/maintenance.show', ['company' => $company, 'appointment' => $appointment]);
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

    public function filter(Request $request)
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

}
