
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
				  <h3 class="box-title">Edit Sub Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

						<form method="POST" action="{{ route('subcategory.update') }}">
							@csrf
							<input type="hidden" name="id" value="{{ $subcategory->id }}">
								<div class="form-group">
									<h5>Sub Category <span class="text-danger">*</span></h5>
									<div class="controls">
										<select name="category_id" class="form-control">
											<option value="" selected="" disabled="">Category Select</option>
											@foreach($categories as $category)
											<option value="{{ $category->id }}" {{ $category->id ==$subcategory->category_id ? 'selected' : '' }}>{{ $category->category_name_en }}</option>
											@endforeach
										</select>
										@error('category_id')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<h5>Sub Category Name English <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="subcategory_name_en" class="form-control" value="{{ $subcategory->subcategory_name_en }}">
										@error('subcategory_name_en')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
													
								<div class="form-group">
									<h5>Sub Category Name Bangla<span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="subcategory_name_bn" class="form-control" value="{{ $subcategory->subcategory_name_bn }}" >
										@error('subcategory_name_bn')
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