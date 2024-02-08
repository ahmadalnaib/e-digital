<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function __invoke()
    {
        $products=Product::take(3)->get();
        return view('home',compact('products'));
    }
}
