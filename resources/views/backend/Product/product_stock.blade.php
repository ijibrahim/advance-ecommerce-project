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
				  <h3 class="box-title">Product Stock List <span class="badge badge-pill badge-danger">{{ count($products) }}</span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Name English</th>
								<th>Price</th>
								<th>Quantity</th>
                                <th>Discount</th>
                                <th>Status</th>
							</tr>
						</thead>
						<tbody>
							@foreach($products as $item)
							<tr>
								<td>
									<img src="{{ asset($item->product_thambnail) }}" width="60" height="50" alt="">
								</td>
								<td>{{ $item->product_name_en }}</td>
								<td>{{ $item->selling_price }} $</td>
								<td>{{ $item->product_qty }} Pices</td>

                                <td>
                                    @if($item->discount_price == Null)
                                        <span class="text-danger">No Discount</span>
                                    @else
                                        @php 
                                           $amount = $item->discount_price / $item->selling_price;
                    						$percent = $amount * 100;
                                        @endphp
                                            <span>{{ round($percent) }} %</span>
                                    @endif
                                </td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="badge badge-primary-light">Active</span>
                                    @else
                                        <span class="badge badge-danger-light">Inactive</span>
                                    @endif
                                </td>

								
							</tr>
							@endforeach
						</tbody>
					  </table>
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