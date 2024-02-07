<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function __invoke()
    {
        $products=Product::all();
        return view('home',compact('products'));
    }
}
