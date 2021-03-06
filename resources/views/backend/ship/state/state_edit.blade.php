@extends('admin.admin_master')
@section('admin')



	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-md-6">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit State</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">

						<form method="POST" action="{{ route('state.update',$state->id) }}">
							@csrf
								<div class="form-group">
									<h5>Division Select <span class="text-danger">*</span></h5>
									<div class="controls">
										<select name="division_id" class="form-control">
											<option value="" selected="" disabled="">Select Division</option>
											@foreach($divisions as $division)
											<option value="{{ $division->id }}" {{ $division->id == $state->division_id ? 'selected' : '' }}>{{ $division->division_name }}</option>
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
												<option value="{{ $district->id }}" {{ $district->id == $state->district_id ? 'selected' : '' }}>{{ $district->district_name }}</option>
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
										<input type="text" name="state_name" class="form-control" value="{{ $state->state_name }}">
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