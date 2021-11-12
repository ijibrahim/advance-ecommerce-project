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
				  <h3 class="box-title">Add Blog Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

						<form method="POST" action="{{ route('blogcategory.update') }}">
							@csrf
							<input type="hidden" name="id" value="{{ $blogcategory->id }}">
							<div class="form-group">
								<h5>Blog Category English <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="blog_category_name_en" class="form-control" value="{{ $blogcategory->blog_category_name_en }}">
									@error('blog_category_name_en')
									<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
							</div>
												
							<div class="form-group">
								<h5>Blog Category Bangla<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="blog_category_name_bn" class="form-control" value="{{ $blogcategory->blog_category_name_bn }}">
									@error('blog_category_name_bn')
									<span class="text-danger">{{ $message }}</span>
									@enderror
								</div>
							</div>		
										
							<div class="text-xs-right">
								<input type="submit" class="btn btn-rounded btn-primary" value="Update">
							</div>
							
						</form>
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