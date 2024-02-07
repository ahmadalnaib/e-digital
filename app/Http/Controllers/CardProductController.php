<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CardProductController extends Controller
{
    //

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
       $cart = Cart::firstOrCreate(
           [
            'user_id' => auth()->id(),
               'session_id' => session()->getId()
           ]
       );
    }
}
