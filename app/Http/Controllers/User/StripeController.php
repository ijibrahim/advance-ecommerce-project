<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;

class StripeController extends Controller
{
    public function StripeOrder(Request $request){
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey('sk_test_51JrRzvDCS5b7eY6rD55dECik3GWYHSE3TYuZBgzRXOTFYruXsqO5chj0p7JO6PNEBs2sDT7jNHqMI7S2YR3zZ0qI00oaqsDdvN');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
          'amount' => 999*100,
          'currency' => 'usd',
          'description' => 'DevsStream Online Shop',
          'source' => $token,
          'metadata' => ['order_id' => '6735'],
        ]);

        dd($charge);
    }
}
