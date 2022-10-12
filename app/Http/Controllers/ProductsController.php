<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('web-app/inkoop')
            ->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web-app/inkoop.create');
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
            'description' => 'required',
            'image_path' => 'nullable',
            'price' => 'required',
            'products_category_id' => 'required',

        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image_path = $request->image_path;
        $product->price = $request->price;
        $product->products_category_id = $request->products_category_id;
        $product->save();

        $products = Product::all();
        return view('web-app/inkoop')
            ->with(['products' => $products]);
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
        $product = Product::Findorfail($id);

        return view('web-app/inkoop.edit', ['product' => $product]);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image_path' => 'nullable',
            'price' => 'required',
            'products_category_id' => 'required',

        ]);

        $product = Product::findorfail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image_path = $request->image_path;
        $product->price = $request->price;
        $product->products_category_id = $request->products_category_id;
        $product->save();

        $products = Product::all();
        return view('web-app/inkoop')
            ->with(['products' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
