@extends('admin.admin_master')
@section('admin')



	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
 

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Panding Orders List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Coupon Name</th>
								<th>Coupon Discount</th>
								<th width="25%">Validity</th>
								<th>Status</th>
								<th width="20%">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($coupons as $item)
							<tr>
								<td>{{ $item->coupon_name }}</td>
								<td>{{ $item->coupon_discount }} %</td>
								<td>
									{{ Carbon\Carbon::parse( $item->coupon_validity)->format('D, d F Y') }}
								</td>
								<td>
                                    @if($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
                                        <span class="badge badge-pill badge-success">Valid</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Invalid</span>
                                    @endif
                                </td>
								<td>
									<a href="{{ route('coupon.edit',$item->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('coupon.delete',$item->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
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