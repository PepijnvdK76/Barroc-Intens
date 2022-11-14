<?php

namespace App\Http\Controllers;

use App\Models\Maintenance_appointment_review;
use App\Models\Part;
use App\Models\Product;
use App\Models\Review_product;
use Illuminate\Http\Request;

class OrderController extends Controller
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
        $reviews = Maintenance_appointment_review::all();
        $parts = Part::all();
        return view("web-app/order/create")
            ->with(['reviews' => $reviews,'parts' => $parts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $used = new Review_product();
       $used->review_id = $request->review_id;
       $used->product_id = $request->product_id;
        $used->amount = $request->amount;
        $used->save();

        $part = Part::where('id', $request->product_id)->first();
        $part->amount = $part->amount - $request->amount;
        $part->save();
        return redirect('maintenance');
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
