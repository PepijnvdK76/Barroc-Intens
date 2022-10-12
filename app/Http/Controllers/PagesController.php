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

    public function inkoop()
    {
        $products = Product::all();
        return view('web-app/inkoop')
            ->with(['products' => $products]);
    }

    public function sales()
    {
        return view('web-app/sales');
    }
    public function index()
    {
        return view('web-site/index')  ;
    }
    public function bonen()
    {
        return view('web-site/beans')  ;
    }
}
