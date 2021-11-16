@extends('frontend.main_master')

@section('content')

@section('title')
    My Order
@endsection

<div class="body-content">
    <div class="container">
        <div class="row">

            @include('frontend.common.user_sidebar')
            <div class="col-md-2">
                
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr class="" style="background: #e2e2e2">
                                <td class="col-md-1">
                                    <label> Date</label>
                                </td>
                                <td class="col-md-3">
                                    <label> Total</label>
                                </td>
                                <td class="col-md-3">
                                    <label> Payment</label>
                                </td>
                                <td class="col-md-2">
                                    <label> Invoice</label>
                                </td>
                                <td class="col-md-2">
                                    <label> Order</label>
                                </td>
                                <td class="col-md-1">
                                    <label> Action</label>
                                </td>
                            </tr>
                        
                        

                        @foreach($orders as $order)
                        <tr>
                            <td class="col-md-1">
                                <label> {{$order->order_date}}</label>
                            </td>
                            <td class="col-md-3">
                                <label> {{$order->amount}}</label>
                            </td>
                            <td class="col-md-3">
                                <label> {{$order->payment_method}}</label>
                            </td>
                            <td class="col-md-2">
                                <label> {{$order->invoice_no}}</label>
                            </td>
                            <td class="col-md-2">
                                <label> 
                                    @if($order->status == 'Panding')
                                    <span class="badge badge-pill badge-worning" style="background: #808080;">Pending</span> 
                                    @elseif($order->status == 'Confirm')
                                    <span class="badge badge-pill badge-worning" style="background: #0000FF;">Confirm</span>  
                                    @elseif($order->status == 'Processing')
                                    <span class="badge badge-pill badge-worning" style="background: #FFA500;">Processing</span>  
                                    @elseif($order->status == 'Picked')
                                    <span class="badge badge-pill badge-worning" style="background: #808000;">Picked</span>  
                                    @elseif($order->status == 'Shipped')
                                    <span class="badge badge-pill badge-worning" style="background: #008000;">Shipped</span> 
                                    @elseif($order->status == 'Delivered')
                                    <span class="badge badge-pill badge-worning" style="background: #418DB9;">Delivered</span> 
                                        @if($order->return_order == 1)
                                        <span class="badge badge-pill badge-worning" style="background: red;"> Return Requested </span> 
                                        @endif

                                    @else
                                    <span class="badge badge-pill badge-worning" style="background: #FF0000;">Cancel</span> 
                                    @endif  
                                </label>
                            </td>
                            <td class="col-md-1">
                                <a href="{{ url('user/order_details/'.$order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
                                <a target="_blank" href="{{ url('user/invoice_download/'.$order->id) }}" class="btn btn-sm btn-danger" style="margin-top: 5px"><i class="fa fa-download"></i> Invoice</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- //col-md-8 -->



        </div> <!-- end row -->
    </div>
</div>




@endsection
