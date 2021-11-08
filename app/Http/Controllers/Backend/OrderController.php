<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use Auth;
use Carbon\Carbon;


class OrderController extends Controller
{
    public function PandingOrders(){

        $orders = Order::where('status','Panding')->orderBy('id','DESC')->get();
        return view('backend.orders.panding_orders',compact('orders'));

    } // panding order end
}
