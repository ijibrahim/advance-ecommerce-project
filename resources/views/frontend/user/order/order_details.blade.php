@extends('frontend.main_master')

@section('content')

@section('title')
    Order Details
@endsection
<div class="body-content">
    <div class="container">
        <div class="row">

            @include('frontend.common.user_sidebar')

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><h4>Shipping Details</h4></div>
                    <hr>
                    <div class="card-body" style="background: #E9EBEC">
                        <table class="table">
                            <tr>
                                <th>Shipping Name: </th>
                                <td>{{ $order->name }}</td>
                            </tr>
                            <tr>
                                <th>Shipping Phone: </th>
                                <td>{{ $order->phone }}</td>
                            </tr>
                            <tr>
                                <th>Shipping Email: </th>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <th>Division: </th>
                                <td>{{ $order->division->division_name }}</td>
                            </tr>
                            <tr>
                                <th>District: </th>
                                <td>{{ $order->district->district_name }}</td>
                            </tr>
                            <tr>
                                <th>State: </th>
                                <td>{{ $order->state->state_name }}</td>
                            </tr>
                            <tr>
                                <th>Post Code: </th>
                                <td>{{ $order->post_code }}</td>
                            </tr>
                            <tr>
                                <th>Order Date: </th>
                                <td>{{ $order->order_date }}</td>
                            </tr>
                           
                        </table>
                    </div>
                </div>
            </div> <!-- // col-md-5 -->


            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Details <span class="text-danger">Invoice: {{ $order->invoice_no }}</span></h4>

                    </div>
                    <hr>
                    <div class="card-body" style="background: #E9EBEC">
                        <table class="table">
                            <tr>
                                <th>Name: </th>
                                <td>{{ $order->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Phone: </th>
                                <td>{{ $order->user->phone }}</td>
                            </tr>
                            <tr>
                                <th>Payment Type: </th>
                                <td>{{ $order->payment_method }}</td>
                            </tr>
                            <tr>
                                <th>Trnx ID: </th>
                                <td>{{ $order->transection_id }}</td>
                            </tr>
                            <tr>
                                <th>Invoice: </th>
                                <td class="text-danger">{{ $order->invoice_no }}</td>
                            </tr>
                            <tr>
                                <th>Order Total: </th>
                                <td>{{ $order->amount }}</td>
                            </tr>
                            <tr>
                                <th>Order: </th>
                                <td>
                                    <label> 
                                        <span class="badge badge-pill badge-worning" style="background: #418DB9;">{{$order->status}}</span> 
                                    </label>
                                </td>
                            </tr>
                           
                        </table>
                    </div>
                </div>
            </div> <!-- // second col-md-5 -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr class="" style="background: #e2e2e2">
                                    <td class="col-md-1">
                                        <label> Image</label>
                                    </td>
                                    <td class="col-md-3">
                                        <label> Product Name</label>
                                    </td>
                                    <td class="col-md-2">
                                        <label> Product Code</label>
                                    </td>
                                    <td class="col-md-1">
                                        <label> Color</label>
                                    </td>
                                    <td class="col-md-1">
                                        <label> Size</label>
                                    </td>
                                    <td class="col-md-1">
                                        <label> Quantity</label>
                                    </td>
                                    <td class="col-md-3">
                                        <label> Price</label>
                                    </td>
                                    <td class="col-md-3">
                                        <label> Download</label>
                                    </td>
                                </tr>
                            
                            

                            @foreach($orderItem as $item)
                            <tr>
                                <td class="col-md-1">
                                    <label> <img src="{{ asset($item->product->product_thambnail) }}" width="50" height="50"></label>
                                </td>
                                <td class="col-md-3">
                                    <label> {{$item->product->product_name_en}}</label>
                                </td>
                                <td class="col-md-2">
                                    <label> {{$item->product->product_code}}</label>
                                </td>
                                <td class="col-md-1">
                                    <label> {{$item->color}}</label>
                                </td>
                                <td class="col-md-1">
                                    <label> {{$item->size}}</label>
                                </td>
                                <td class="col-md-1">
                                    <label> {{$item->qty}}</label>
                                </td>
                                <td class="col-md-3">
                                    <label> ${{$item->price}} Total ($ {{$item->price * $item->qty}}) </label>
                                </td>


                                @php
                                    $file = App\Models\Product::where('id',$item->product_id)->first();
                                @endphp
                                <td class="col-md-1">
                                    @if($order->status == 'Pending')
                                        <strong><span class="badge badge-pill badge-success" style="background: #418DB9;">No File</span></strong>
                                    @elseif($order->status == 'Confirm')
                                        <a target="_blank" href="{{ asset('upload/pdf/'.$file->digital_file) }}"><strong><span class="badge badge-pill badge-success" style="background: #FF0000;">Download Ready</span></strong></a>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div> {{-- //end order Item row --}}

            @if($order->status !== "Delivered")

            @else

                @php 
                    $order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
                @endphp

                @if($order)
                    <form method="POST" action="{{ route('return.order',$order->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="label">Order Return Reason: </label>
                            <textarea name="return_reason" id="" class="form-control" cols="30" rows="10" placeholder="Return Reason"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger">Order Return</button>
                    </form>
                @else
                    <span class="badge badge-pill badge-worning" style="background: red;">You Have send return request for this product</span>
                @endif

            @endif

            <br><br>
        </div> <!-- end row -->
    </div>
</div>




@endsection
