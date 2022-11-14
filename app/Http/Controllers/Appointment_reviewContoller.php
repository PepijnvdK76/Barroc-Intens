<?php

namespace App\Http\Controllers;

use App\Models\Maintenance_appointment_review;
use App\Models\Maintenance_appointments;
use App\Models\Part;
use App\Models\Product;
use App\Models\Review;
use App\Models\Review_product;
use Illuminate\Http\Request;

class Appointment_reviewContoller extends Controller
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
        $appointments = Maintenance_appointments::all();
        return view('web-app/review/create')
            ->with(['appointments' => $appointments]);
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
            'title' => 'required',
            'appointment_id' => 'required',
            'problem' => 'required',

        ]);
        $review = new Maintenance_appointment_review();
        $review->title = $request->title;
        $review->appointment_id = $request->appointment_id;
        $review->problem = $request->problem;
        $review->save();

        return redirect('/order/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $review = Maintenance_appointment_review::findorfail($id);
        $detail = Review_product::where('review_id', $id)->first();
        $product = Product::where( 'id', $detail->product_id)->first();
        return view('web-app/review/show')
            ->with(['review' => $review])
            ->with(['detail' => $detail])
            ->with(['product' => $product]);

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
