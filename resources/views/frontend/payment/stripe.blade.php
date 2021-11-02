@extends('frontend.main_master')

@section('content')


@section('title')
Stripe
@endsection


<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Strip</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
            	
               

                <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Your Shopping Amount </h4>
                            </div>
                            <div class="">
                                <ul class="nav nav-checkout-progress list-unstyled">

                                   

                                    <li>

                                        @if(Session::has('coupon'))
                                        <hr>
                                        <strong>SubTotal: </strong> ${{ $cartTotal }}
                                        <hr>
                                        <strong>Coupon Name: </strong> {{ session()->get('coupon')['coupon_name'] }}
                                        ({{ session()->get('coupon')['coupon_discount'] }}%)
                                        <hr>
                                        <strong>Coupon Discount: </strong> {{ session()->get('coupon')['discount_amount'] }}
                                        <hr>
                                        <strong>Grand Total: </strong> {{ session()->get('coupon')['total_amount'] }}

                                        @else

                                        <hr>
                                        <strong>SubTotal: </strong>  ${{ $cartTotal }}
                                        <hr>
                                        <strong>Grand Total: </strong>  ${{ $cartTotal }}

                                        @endif
                                        <hr>
                                    </li>
                                </ul>       
                            </div>
                        </div>
                    </div>
                </div> 
<!-- checkout-progress-sidebar -->              
</div>


 			<div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Select Payment Method</h4>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                	<label for="">Stripe</label>
                                	<input type="radio" name="payment_method" value="stripe">
                                	<img src="{{ asset('frontend/assets/images/payments/4.png') }}">
                                </div>	<!-- /col-md-4 -->
                                <div class="col-md-4">
                                	<label for="">Card</label>
                                	<input type="radio" name="payment_method" value="card">
                                	<img src="{{ asset('frontend/assets/images/payments/3.png') }}">
                                </div>	<!-- /col-md-4 -->
                                <div class="col-md-4">
                                	<label for="">Cash</label>
                                	<input type="radio" name="payment_method" value="cash">
                                	<img src="{{ asset('frontend/assets/images/payments/2.png') }}">
                                </div>	<!-- /col-md-4 -->
                            </div><!-- /row -->
                            <hr>
                            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">PAYMENT STEP</button>
                        </div>
                    </div>
                </div> 
<!-- checkout-progress-sidebar -->              
			</div>
	</div><!-- /.row -->
</div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('frontend.body.brands')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    
</div><!-- /.container -->
</div><!-- /.body-content -->



@endsection