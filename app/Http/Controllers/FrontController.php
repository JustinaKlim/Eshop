<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Services\CartService;

class FrontController extends Controller
{
    public function home(CartService $cart)
    {

        $products = Product::all();
        return view('front.home', array_merge( 
            compact('products'), 
            $cart->get()
        ));
    }

    public function add(CartService $cart)
    {
        $cart->add();
        return redirect()->back();
    }

    public function addJs(CartService $cart)
    {
        $cart->add();
        $miniCartHtml = view('front.mini-cart', $cart->get())->render();
        
        return response()->json([
            'html' => $miniCartHtml,
            'cart' => 'OK',
        ]);
    }



    public function remove(CartService $cart)
    {
        $cart->remove();
        return redirect()->back();
    }

}