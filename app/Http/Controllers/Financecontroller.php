<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Custom_invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web-app.finance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $products = Product::all();
        return view('web-app.createInvoice')
            ->with(['products' => $products])
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
        $invoice = Custom_invoice::create($request->except('_token') );
        return redirect(route('finance.index'))->with('message', "Factuur succesvol aangemaakt!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('web-app/finance.show', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::Findorfail($id);

        return view('web-app/finance.edit', ['company' => $company]);
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
        $company->bkr_checked_at = $request->bkr_checked_at;
        $company->save();

        $companies = Company::all();
        $products = Product::all();
        return view('web-app/finance')
        ->with(['products' => $products])
        ->with(['companies' => $companies]);
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
