@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
 

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Sub->Sub Category List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Category</th>
								<th>SubCategory Name</th>
								<th>SubSub Category English</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($subsubcategory as $item)
							<tr>
								<td>{{ $item['category']['category_name_en'] }}</td>
								<td>{{ $item['subcategory']['subcategory_name_en'] }}</td>
								<td>{{ $item->subsubcategory_name_en }}</td>
								<td>
									<a href="{{ route('subsubcategory.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('subsubcategory.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
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

			<div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Sub Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

						<form method="POST" action="{{ route('subsubcategory.store') }}">
							@csrf
								<div class="form-group">
									<h5>Category <span class="text-danger">*</span></h5>
									<div class="controls">
										<select name="category_id" class="form-control">
											<option value="" selected="" disabled="">Category Select</option>
											@foreach($categories as $category)
											<option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
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
											@foreach($categories as $category)
											
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
										<input type="text" name="subsubcategory_name_en" class="form-control">
										@error('subsubcategory_name_en')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
													
								<div class="form-group">
									<h5>Sub-Sub Category Name Bangla<span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="subsubcategory_name_bn" class="form-control" >
										@error('subsubcategory_name_bn')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>		
							<div class="text-xs-right">
								<input type="submit" class="btn btn-rounded btn-primary" value="Add New">
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

<script>
	$(document).ready(function(){
		$('select[name="category_id"]').on('change', function(){
			var category_id = $(this).val();
			if(category_id) {
				$.ajax({
					url: "{{ url('category/subcategory/ajax') }}/"+category_id,
					type: "GET",
					dataType:"json",
					success:function(data){
						var d = $('select[name="subcategory_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
						})
					}
				});
			} else{
				alert('danger')
			}
		});
	}) ;
</script>


@endsection