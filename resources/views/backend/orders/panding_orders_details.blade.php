@extends('admin.admin_master')
@section('admin')



	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Order Details</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Home</li>
								<li class="breadcrumb-item" aria-current="page">Orders</li>
								<li class="breadcrumb-item active" aria-current="page">Order Details</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  <div class="col-md-6 col-12">
				  <div class="box box-bordered border-primary">
					  <div class="box-header with-border">
						<h4 class="box-title"><strong>Shipping Details</strong></h4>
					  </div>
					  <div class="box-body">
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
				</div> {{-- //col-md-6 --}}

			  <div class="col-md-6 col-12">
				  <div class="box box-bordered border-primary">
					  <div class="box-header with-border">
						<h4 class="box-title"><strong>Order Details <span class="text-danger">Invoice: {{ $order->invoice_no }}</span></strong></h4>
					  </div>
					  <div class="box-body">
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
                                        <span class="badge badge-pill badge-worning" style="background: #418DB9; color: #FFFFFF">{{$order->status}}</span> 
                                    </label>
                                </td> 
                                
                            </tr>
                           
                            <tr>
                                <td></td>
                                <td>
                                    @if($order->status == 'Panding')

                                    <a href="{{ route('panding-confirm',$order->id) }}" class="btn btn-block btn-success" id="confirm">Confirm Order</a>

                                    @elseif($order->status == 'Confirm')

                                     <a href="{{ route('confirm-processing',$order->id) }}" class="btn btn-block btn-success" id="processing">Processing Order</a>

                                    @elseif($order->status == 'Processing')

                                     <a href="{{ route('processing-picked',$order->id) }}" class="btn btn-block btn-success" id="picked">Picked Order</a>

                                    @elseif($order->status == 'Picked')

                                     <a href="{{ route('picked-shipped',$order->id) }}" class="btn btn-block btn-success" id="shipped">Shipped Order</a>

                                    @elseif($order->status == 'Shipped')

                                     <a href="{{ route('shipped-delivered',$order->id) }}" class="btn btn-block btn-success" id="delivered">Delivered Order</a>

                                    @elseif($order->status == 'Delivered')

                                     <a href="{{ route('delivered-cancel',$order->id) }}" class="btn btn-block btn-success" id="cancel">Cancel Order</a>

                                    @endif
                                </td>
                               

                            
                            </tr>
                           
                        </table>
					  </div>
					</div>
				</div>{{-- //col-md-6 --}}
				
			  <div class="col-md-12 col-12">
				  <div class="box box-bordered border-primary">
					  <div class="box-header with-border">
						<h4 class="box-title"><strong>Product Details</strong></h4>
					  </div>
					  <div class="box-body">
						<table class="table">
                            <tbody>
                                <tr class="">
                                    <td>
                                        <label> Image</label>
                                    </td>
                                    <td>
                                        <label> Product Name</label>
                                    </td>
                                    <td>
                                        <label> Product Code</label>
                                    </td>
                                    <td>
                                        <label> Color</label>
                                    </td>
                                    <td>
                                        <label> Size</label>
                                    </td>
                                    <td>
                                        <label> Quantity</label>
                                    </td>
                                    <td>
                                        <label> Price</label>
                                    </td>
                                </tr>
                            
                            

                            @foreach($orderItem as $item)
                            <tr>
                                <td>
                                    <label> <img src="{{ asset($item->product->product_thambnail) }}" width="50" height="50"></label>
                                </td>
                                <td>
                                    <label> {{$item->product->product_name_en}}</label>
                                </td>
                                <td>
                                    <label> {{$item->product->product_code}}</label>
                                </td>
                                <td>
                                    <label> {{$item->color}}</label>
                                </td>
                                <td>
                                    <label> {{$item->size}}</label>
                                </td>
                                <td>
                                    <label> {{$item->qty}}</label>
                                </td>
                                <td>
                                    <label> ${{$item->price}} Total ($ {{$item->price * $item->qty}}) </label>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
					  </div>
					</div>
				</div>{{-- //col-12-md- --}}
				
		  </div><!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>





@endsection