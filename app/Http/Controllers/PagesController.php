<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    //web-app

    public function finance(){
        $companies = Company::all();
        return view('web-app/finance')
            ->with(['companies' => $companies]);
    }


    public function sales()
    {
        return view('web-app/sales');
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
    public function bonen()
    {
        return view('web-site/beans')  ;
    }

}

