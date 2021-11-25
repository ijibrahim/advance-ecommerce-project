@extends('admin.admin_master')
@section('admin')



	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
 

			<div class="col-md-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Total Admin User <span class="badge badge-pill badge-danger"> 0 </span></h3>
				  <a href="{{ route('add.admin') }}" class="btn btn-success" style="float: right;">Add Admin User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Image</th>
								<th>Name</th>
								<th>Email</th>
								<th>Access</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($adminuser as $item)
							<tr>
								<td>
									<img src="{{ asset($item->profile_photo_path) }}" alt="">
								</td>
								<td>{{ $item->name }}</td>
								<td>${{ $item->email }}</td>
								<td> </td>
								
								<td>
									<a href="{{ route('panding.order.details',$item->id) }}" class="btn btn-info" title="Product Details"><i class="fa fa-eye"></i></a>
									<a target="_blank" href="{{ route('invoice.download',$item->id) }}" class="btn btn-danger" title="Invoice Download"><i class="fa fa-download"></i></a>
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