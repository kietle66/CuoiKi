<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Frontend.index');
    }
    public function cart()
    {
        return view('Frontend.pages.cart');
    }

    public function single()
    {
        return view('Frontend.pages.single');
    }
}
