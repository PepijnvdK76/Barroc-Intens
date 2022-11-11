<?php

namespace App\Http\Controllers;
use App\Models\Company;

use App\Models\Contract;
use App\Models\Custom_invoice;
use App\Models\Custom_invoice_product;
use App\Models\Maintenance_appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";

        if ($search != "") {
            //where
            $companies = Company::where('name', 'LIKE', "%$search%")->orWhere('phone', 'LIKE', "%$search%")->orWhere('street', 'LIKE', "%$search%")->orWhere('house_number', 'LIKE', "%$search%")->orWhere('city', 'LIKE', "%$search%")->orWhere('country_code', 'LIKE', "%$search%")->get();
        } else {
            $companies = Company::all();
        }
        $data = compact('companies','search');
        return view('web-app.company.index')
            ->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'house_number' => 'required',
            'city' => 'required',
            'country_code' => 'required',

        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->phone = $request->phone;
        $company->street = $request->street;
        $company->house_number = $request->house_number;
        $company->city = $request->city;
        $company->country_code = $request->country_code;
        $company->save();
        $companies = Company::all();
        return view('web-site/offerte')
            ->with('alert', "Offerte succesvol aangemaakt!");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $company = Company::where('contact_id', Auth::id())->get();
        $appointments = Maintenance_appointments::where('company_id', $id)->get();
        $invoices = Custom_invoice::where('company_id', $id)->get();
        $contracts = Contract::where('company_id', $id)->get();
        return view('web-app.company.show')
            ->with(['company'=> $company, 'invoices' => $invoices, 'appointments' => $appointments, '$contracts' => $contracts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findorfail($id);
        return view('web-app/company/edit')->with(['company' => $company]);
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
        $company = Company::findorfail($id);
        $company->name = $request->name;
        $company->phone = $request->phone;
        $company->street = $request->street;
        $company->house_number = $request->house_number;
        $company->city = $request->city;
        $company->country_code = $request->country_code;
        $company->save();

        return redirect('dashboard');
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
