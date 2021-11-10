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


    public function PandingOrdersDetails($id){

        $order = Order::with('division','district','state','user')->where('id',$id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$id)->orderBy('id','DESC')->get();

        return view('backend.orders.panding_orders_details',compact('order','orderItem'));
    }

    public function ConfirmedOrder(){

        $orders = Order::where('status','Confirm')->orderBy('id','DESC')->get();
        return view('backend.orders.confirmed_orders',compact('orders'));
    }
    public function ProcessingOrder(){

        $orders = Order::where('status','Processing')->orderBy('id','DESC')->get();
        return view('backend.orders.processing_orders',compact('orders'));
    }
    public function PickedOrder(){

        $orders = Order::where('status','Picked')->orderBy('id','DESC')->get();
        return view('backend.orders.picked_orders',compact('orders'));
    }
    public function ShippedOrder(){

        $orders = Order::where('status','Shipped')->orderBy('id','DESC')->get();
        return view('backend.orders.shipped_orders',compact('orders'));
    }

    public function DeliveredOrder(){

        $orders = Order::where('status','Delivered')->orderBy('id','DESC')->get();
        return view('backend.orders.delivered_orders',compact('orders'));
    }


    public function CancelOrder(){

        $orders = Order::where('status','Cancel')->orderBy('id','DESC')->get();
        return view('backend.orders.cancel_orders',compact('orders'));
    }



    public function PandingConfirm($order_id){

        $order = Order::findOrFail($order_id)->update([

            'status' => 'Confirm',
            'confirmed_date' => Carbon::now(),

        ]);


       $notification = array(
            'message' => 'Order Confirm Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('panding-orders')->with($notification);

    } // End method 

    public function ConfirmProcessing($order_id){

        $order = Order::findOrFail($order_id)->update([

            'status' => 'Processing',
            'processing_date' => Carbon::now(),

        ]);


       $notification = array(
            'message' => 'Order Processing Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('confirmed-order')->with($notification);

    } // End method 


    public function ProcessingPicked($order_id){

        $order = Order::findOrFail($order_id)->update([

            'status' => 'Picked',
            'packed_date' => Carbon::now(),

        ]);


       $notification = array(
            'message' => 'Order Picked Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('processing-order')->with($notification);

    } // End method 


    public function PickedShipped($order_id){

        $order = Order::findOrFail($order_id)->update([

            'status' => 'Shipped',
            'shipped_date' => Carbon::now(),

        ]);


       $notification = array(
            'message' => 'Order Shipped Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('picked-order')->with($notification);

    } // End method 


    public function ShippedDelivered($order_id){

        $order = Order::findOrFail($order_id)->update([

            'status' => 'Delivered',
            'delivered_date' => Carbon::now(),

        ]);


       $notification = array(
            'message' => 'Order Delivered Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('shipped-order')->with($notification);

    } // End method 


    public function DeliveredCancel($order_id){

        $order = Order::findOrFail($order_id)->update([

            'status' => 'Cancel',
            'cancel_date' => Carbon::now(),

        ]);


       $notification = array(
            'message' => 'Order Cancel Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('delivered-order')->with($notification);

    } // End method 


}
