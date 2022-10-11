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
}
