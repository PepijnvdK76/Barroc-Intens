<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Custom_invoice;
use App\Models\Custom_invoice_product;
use App\Models\Maintenance_appointments;
use App\Models\Product;
use App\Models\Review_product;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
            $products = Product::where('name', 'LIKE', "%$search%")->orWhere('price', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->orWhere('product_code', 'LIKE', "%$search%")->get();
        } else {
            $products = Product::all();
        }
        $data = compact('products','search');
        return view('web-app/inkoop')
            ->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('web-app/inkoop.create')
            ->with(['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $search = $request['search'] ?? "";
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image_path' => 'nullable',
            'product_code' => 'required',
            'price' => 'required',
            'status' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'products_category_id' => 'required',

        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image_path = $request->image_path;
        $product->product_code = $request->product_code;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->amount = $request->amount;
        $product->status = $request->status;
        $product->products_category_id = $request->products_category_id;
        $product->save();

        $products = Product::all();
        $data = compact('products','search');
        return view('web-app/inkoop')
            ->with(['products' => $products])
            ->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findorfail($id);
        return view('web-app/inkoop.show', ['product' => $product]);
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
        if(Review_product::where('product_id', $id)->exists())
        {
            return redirect()->back()->withError('No post found.');        }
        elseif(Maintenance_appointments::where('product_id', $id)->exists())
            {
                return redirect()->back()->withError('No post found.');            }

                elseif(Custom_invoice_product::where('product_id', $id)->exists())
                {
                    return redirect()->back()->withError('No post found.');                }

                    elseif(Custom_invoice::where('product_id', $id)->exists())
                    {
                        return redirect()->back()->withError('No post found.');                    }

                        else
                        {
                            Product::destroy($id);
                            return redirect('inkoop');
                        }

    }
}
