<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Maintenance_appointments;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    //web-app

    public function finance(){
        $companies = Company::all();
        return view('web-app/finance')
            ->with(['companies' => $companies]);
    }

    public function company(){
        $companies = Company::all();
        return view('web-app/company')
            ->with(['companies' => $companies]);
    }


    public function maintenance()
    {
        $appointments = Maintenance_appointments::all();
        return view('web-app/maintenance')
            ->with(['appointments' => $appointments]);
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
    public function dashboard()
    {
        return view('web-app/dashboard')
            ;
    }

    //web-site

    public function offerte()
    {
        return view('web-site/offerte');

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

