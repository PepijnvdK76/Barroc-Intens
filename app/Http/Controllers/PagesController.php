<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //web-app

    public function finance()
    {
        return view('web-app/finance');
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

}

