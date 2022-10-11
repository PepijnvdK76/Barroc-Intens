<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function finance()
    {
        return view('web-app/finance');
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
