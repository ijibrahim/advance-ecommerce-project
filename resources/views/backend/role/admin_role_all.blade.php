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
				  <h3 class="box-title">Total Admin User <span class="badge badge-pill badge-danger"> {{ count($adminuser) }} </span></h3>
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
								<th style="width:35%">Access</th>
								<th >Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($adminuser as $item)
							<tr>
								<td>
									<img src="{{ asset($item->profile_photo_path) }}" width="50" height="50" alt="{{ $item->name }}" title="{{ $item->name }}">
								</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->email }}</td>
								<td> 
									@if($item->brand == 1)
										<span class="badge badge-primary">Brand</span>
									@else
									@endif

									@if($item->category == 1)
										<span class="badge badge-secondary">Category</span>
									@else
									@endif

									@if($item->product == 1)
										<span class="badge badge-success">Product</span>
									@else
									@endif

									@if($item->slider == 1)
										<span class="badge badge-danger">Slider</span>
									@else
									@endif

									@if($item->coupon == 1)
										<span class="badge badge-warning">Coupon</span>
									@else
									@endif

									@if($item->shipping == 1)
										<span class="badge badge-light">Shipping</span>
									@else
									@endif

									@if($item->blog == 1)
										<span class="badge badge-dark">Blog</span>
									@else
									@endif

									@if($item->setting == 1)
										<span class="badge badge-primary">Setting</span>
									@else
									@endif

									@if($item->returnorder == 1)
										<span class="badge badge-secondary">Return Order</span>
									@else
									@endif

									@if($item->review == 1)
										<span class="badge badge-success">Review</span>
									@else
									@endif

									
									@if($item->orders == 1)
										<span class="badge badge-warning">Orders</span>
									@else
									@endif

									@if($item->stock == 1)
										<span class="badge badge-info">Stock</span>
									@else
									@endif

									@if($item->reports == 1)
										<span class="badge badge-dark">Reports</span>
									@else
									@endif

									@if($item->allusers == 1)
										<span class="badge badge-light">All Users</span>
									@else
									@endif

									@if($item->adminuserrole == 1)
										<span class="badge badge-primary">Admin User Role</span>
									@else
									@endif

									@if($item->reports == 1)
										<span class="badge badge-secondary">Reports</span>
									@else
									@endif

								</td>
								
								<td>
									<a href="{{ route('edit.admin.user',$item->id) }}" class="btn btn-info" title="User Edit"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('delete.admin.user',$item->id) }}" class="btn btn-danger" title="User Delete" id="delete"><i class="fa fa-trash"></i></a>
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