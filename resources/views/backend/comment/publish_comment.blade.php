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
				  <h3 class="box-title">Publish All Comments <span class="badge badge-pill badge-danger">{{ count($comment) }}</span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Title</th>
								<th>Comment</th>
								<th>User</th>
								<th>Email</th>
								<th>Blog Post</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($comment as $item)
							<tr>
								<td>{{ $item->title }}</td>
								<td>{{ \Illuminate\Support\Str::limit($item->comment, 40) }}</td>
								<td>{{ $item->user->name }}</td>
								<td>{{ $item->user->email }}</td>
								<td>{{ \Illuminate\Support\Str::limit($item->blogpost->post_title_en, 40) }}</td>
								<td>
									<a href="{{ route('delete.comment',$item->id) }}" class="btn btn-danger" id="delete">Delete</a>
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