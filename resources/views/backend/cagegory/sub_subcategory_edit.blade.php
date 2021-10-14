@extends('admin.admin_master')
@section('admin')



	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  

			<!-- Add Sub Sub CAtegory Page Edit -->

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Sub-Sub Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

						<form method="POST" action="{{ route('subsubcategory.update') }}">
							@csrf
							<input type="hidden" name="id" value="{{ $subsubcategories->id }}">
								<div class="form-group">
									<h5>Category <span class="text-danger">*</span></h5>
									<div class="controls">
										<select name="category_id" class="form-control">
											<option value="" selected="" disabled="">Category Select</option>

											@foreach($categories as $category)
												<option value="{{ $category->id }}" {{ $category->id == $subsubcategories->category_id ? 'selected' : '' }}> {{ $category->category_name_en }}</option>
											@endforeach

										</select>
										@error('category_id')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<h5>Sub Category <span class="text-danger">*</span></h5>
									<div class="controls">
										<select name="subcategory_id" class="form-control">
											<option value="" selected="" disabled="">Sub Category Select</option>

											@foreach($subcategories as $subcategory)
												<option value="{{ $subcategory->id }}" {{ $subcategory->id == $subsubcategories->subcategory_id ? 'selected' : '' }}>{{ $subcategory->subcategory_name_en }}</option>
											@endforeach

										</select>
										@error('subcategory_id')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<h5>Sub-Sub Category Name English <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="subsubcategory_name_en" class="form-control" value="{{ $subsubcategories->subsubcategory_name_en }}">
										@error('subsubcategory_name_en')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
													
								<div class="form-group">
									<h5>Sub-Sub Category Name Bangla<span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="subsubcategory_name_bn" class="form-control" value="{{ $subsubcategories->subsubcategory_name_bn }}">
										@error('subsubcategory_name_bn')
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