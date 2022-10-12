<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function finance(){
        $companies = Company::all();
        return view('web-app/finance')
            ->with(['companies' => $companies]);
    }

    public function sales()
    {
        return view('web-app/sales');
    }
    public function index()
    {
        return view('web-site/index')  ;
    }
    public function contact()
    {
        return view('web-site/contact')  ;
    }
    public function bonen()
    {
        $beans = Product::query()
            ->where('products_category_id', '=', 1)
            ->get();
        return view('web-site/beans')
            ->with(['beans' => $beans]);
    }
    public function machines()
    {
        $machines = Product::query()
            ->where('products_category_id', '=', 2)
            ->get();
        return view('web-site/machines')
            ->with(['machines' => $machines]);
    }
}
