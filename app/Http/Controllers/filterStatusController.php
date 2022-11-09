<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class filterStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        if ($request->status == 1)
        {

            $products = product::all();
            return view('web-app/inkoop')
                ->with(['products' => $products]);
        }
        elseif ($request->status == 2)
        {
            $products = product::where( 'status', "=" ,'Momenteel leverbaar')->get();
            return view('web-app/inkoop')
                ->with(['products' => $products]);
        }
        elseif ($request->status == 3)
        {

            $products = product::where('status', '=', 'Uit vooraad')->get();
            return view('web-app/inkoop')
                ->with(['products' => $products]);
        }
        else
        {
            return view('inkoop.index');
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
