<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCartController extends FrontendController
{
    public function List(){
        return view('frontend.Cart.Cart-list');
    }
    public function Checkout_is(){
        return view('frontend.Cart.Checkout_is_member');
    }
    public function Checkout_not(){
        return view('frontend.Cart.Checkout_not_member');
    }
    public function invoice(){
        return view('frontend.Cart.invoice');
    }
}
