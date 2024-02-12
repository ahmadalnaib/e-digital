<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
{
    $cart = Cart::bySession()->first();
    $checkout = $request->user()->checkout($cart->products->pluck('stripe_id')->toArray(), [
        // 'success_url' => route('checkout.success'),
        'cancel_url' => route('cart.index'),
    ]);

    // Redirect to Stripe checkout session
    return Redirect::to($checkout->url);
}
}
