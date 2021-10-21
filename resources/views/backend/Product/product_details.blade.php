@extends('admin.admin_master')
@section('admin')



	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
 

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Product Details</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="box-header">
						<div class="row">
							<div class="col-md-4">
								<img src="{{ asset($products->product_thambnail) }}" height="300" alt="{{ $products->product_name_en }}">
							</div>
							
							<div class="col-md-8">
								<h1>{{ $products->product_name_en }}</h1>
								<p>{{ $products->sort_descp_en }}</p>
								<span>
									<strong class="float-left">Code: {{ $products->product_code }}</strong>
									<strong class="float-right">Quantity: {{ $products->product_qty }}</strong>
								</span> <br>
								<p class="float-left"><b>Color: </b>{{ $products->product_color_en }} </p>
								<p class="float-right"><b>Tags: </b>{{ $products->product_tags_en }} </p>

								<br><br>
								<span style="font-size: 22px; font-weight: 300;">
									<strong class="text-warning"><del>Sellig Price{{ $products->selling_price }} $</del></strong> 
									<strong>Discount Price {{ $products->discount_price }} $ 
										<sup>
											@if($products->discount_price == Null)
                                        <span class="">No Discount</span>
                                    	@else
                                        @php 
                                           $amount = ($products->selling_price - $products->discount_price);
                                           $discount = ($amount/$products->selling_price) * 100
                                        @endphp
                                            <span class="text-danger" style="font-size: 14px">( {{ round($discount) }} % ) </span>
                                    @endif
										</sup>
									</strong>
								</span>
							</div>
						
						</div><br>
						<div class="row row-sm">
							 @foreach($multiimgs as $img)

								<div class="col-md-1">
									<img src="{{ asset($img->photo_name) }}" alt="">
								</div>

							@endforeach
						</div>
					</div>
					<div class="box-footer">
						<h1>Long Description</h1>
						<strong>{{ $products->long_descp_en }}</strong>
					</div>

				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			  <!-- /.box -->          
			</div>
			<!-- /.col -->

			
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>





@endsection