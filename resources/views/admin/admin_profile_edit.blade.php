@extends('admin.admin_master')
@section('admin')
<div class="container-full">

	<!-- Main content -->
	<section class="content">

		<!-- Basic Forms -->
		<div class="box">
			<div class="box-header with-border">
				<h4 class="box-title">Admin Profile Edit </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col">
						<form method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-12">						
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Admin User Name <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}">
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<h5>Admin User Email <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="email" name="email"  class="form-control" required="" value="{{ $editData->email }}">
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<h5>Profile Image <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="file" onchange="loadFile(event)" name="profile_photo_path" class="form-control" required="" id="image"> 
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<img id="showImage"  src="{{ (!empty($editData->profile_photo_path))? url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.jpg') }}" alt="User Avatar" style="width: 100px; height: 100px;">
										</div>
									</div>


								</div>

								<div class="text-xs-right">
									<input type="submit" class="btn btn-rounded btn-primary" value="Update">
								</div>
							</div>
						</form>

					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>


<!-- 	<script type="text/javascript">
		$(document).ready(function(){
			$('#image').change(function(event){
				var reader = new FileReader();
				reader.onload = function(event){
					$('#showImage').attr('src',event.target.result);
				}
				reader.readAsDataURL(event.target.file['0']);
			});
		});
	</script> -->
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('showImage');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>


	@endsection