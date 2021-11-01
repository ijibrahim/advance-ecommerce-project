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
				  <h3 class="box-title">State List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Division Name</th>
								<th>District Name</th>
								<th>State Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($state as $item)
							<tr>
								<td>{{ $item->division->division_name }}</td>
								<td>{{ $item->district->district_name }}</td>
								<td>{{ $item->state_name }}</td>
								
								<td>
									<a href="{{ route('state.edit',$item->id) }}" class="btn btn-info btn-sm btn-" title="Edit Data"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('state.delete',$item->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>
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

			<div class="col-md-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add State</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

						<form method="POST" action="{{ route('state.store') }}">
							@csrf
								<div class="form-group">
									<h5>Division Select <span class="text-danger">*</span></h5>
									<div class="controls">
										<select name="division_id" class="form-control">
											<option value="" selected="" disabled="">Select Division</option>
											@foreach($divisions as $division)
											<option value="{{ $division->id }}">{{ $division->division_name }}</option>
											@endforeach
										</select>
										@error('division_id')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<h5>District Select <span class="text-danger">*</span></h5>
									<div class="controls">
										<select name="district_id" class="form-control">
											<option value="" selected="" disabled="">Select District</option>
											@foreach($districts as $district)
											
											@endforeach
										</select>
										@error('district_id')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>

								<div class="form-group">
									<h5>State Name <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="state_name" class="form-control">
										@error('state_name')
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
		$('select[name="division_id"]').on('change', function(){
			var division_id = $(this).val();
			if(division_id) {
				$.ajax({
					url: "{{ url('shipping/state/ajax') }}/"+division_id,
					type: "GET",
					dataType:"json",
					success:function(data){
						var d = $('select[name="district_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
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