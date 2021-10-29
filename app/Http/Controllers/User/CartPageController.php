<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartPageController extends Controller
{
    // Start my cart

    public function MyCart(){
        return view('frontend.mycart.view_mycart');
    } //end method


    public function GetCartProduct(){

        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(

            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => round($cartTotal),

        ));
    } // end Method

    public function RemoveCartProduct($rowId){
        Cart::remove($rowId);

        return response()->json(['success' => 'Successfully remove From Cart']);
    } // end method

// Start Cart Increment Method 
    public function CartIncrement($rowId){
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty + 1);

        return response()->json('increment');

    } // end method

// Start Cart Decrement Method 
    public function CartDecrement($rowId){
        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty - 1);

        return response()->json('decrement');

    } // end method
}
