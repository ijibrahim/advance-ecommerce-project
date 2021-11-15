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
				  <h3 class="box-title">Blog Post List <span class="badge badge-pill badge-danger">{{ count($blogpost) }}</span></h3>
				  <a href="{{ route('add.post') }}" class="btn btn-success" style="float: right;">Add Post</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Post Category</th>
								<th>Post Image</th>
								<th>Post Title English</th>
								<th>Post Title Bangla</th>
								<th style="width: 10%;">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($blogpost as $item)
							<tr>
								<td>{{ $item->category->blog_category_name_en }}</td>
								<td> <img src="{{ asset($item->post_image) }}" alt="{{ $item->post_title_en }}" width="60" height="60"></td>
								<td>{{ $item->post_title_en }}</td>
								<td>{{ $item->post_title_bn }}</td>
								<td>
									<a href="{{ route('blog.category.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('blog.category.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
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