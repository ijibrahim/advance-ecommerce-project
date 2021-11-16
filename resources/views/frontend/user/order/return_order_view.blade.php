@extends('frontend.main_master')

@section('content')

@section('title')
    Return Order List
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
                                    <label> Return Reason</label>
                                </td>
                                <td class="col-md-2">
                                    <label> Order Status</label>
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
                                <label> {{$order->return_reason}}</label>
                            </td>
                            <td class="col-md-2">

                                <label> 
                                    @if($order->return_order == 0)
                                    <span class="badge badge-pill badge-worning" style="background: #FF0000;">No Return Request</span> 
                                    @elseif($order->return_order == 1)
                                    <span class="badge badge-pill badge-worning" style="background: #800000;">Pending</span> 
                                    <span class="badge badge-pill badge-worning" style="background: red;"> Return Requested </span> 
                                    @elseif($order->return_order == 2)
                                    <span class="badge badge-pill badge-worning" style="background: #00FF00;">Success</span> 
                                    @endif
                                </label>
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
