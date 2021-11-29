@extends('admin.admin_master')
@section('admin')
<div class="container-full">

	<!-- Main content -->
	<section class="content">

		<!-- Basic Forms -->
		<div class="box">
			<div class="box-header with-border">
				<h4 class="box-title">Create Admin User</h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col">
						<form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-12">

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Admin User Name <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="name" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<h5>Admin User Email <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="email" name="email"  class="form-control">
												</div>
											</div>
										</div>
									</div> <!-- End Row -->
						
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Admin User Phone <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="text" name="phone" class="form-control">
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<h5>Admin User Password <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="password" name="password"  class="form-control">
												</div>
											</div>
										</div>
									</div> <!-- End Row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<h5>Admin User Image <span class="text-danger">*</span></h5>
												<div class="controls">
													<input type="file" onchange="loadFile(event)" name="profile_photo_path" class="form-control" required="" id="image"> 
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<img id="showImage"  src="{{ url('upload/no_image.jpg') }}" alt="User Avatar" style="width: 100px; height: 100px;">
										</div>
									</div>


                                    <hr>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <div class="controls">
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_2" name="brand"
                                                            value="1">
                                                        <label for="checkbox_2">Brand</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_3" name="category"
                                                            value="1">
                                                        <label for="checkbox_3">Category</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_4" name="product"
                                                            value="1">
                                                        <label for="checkbox_4">Product</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_5" name="slider"
                                                            value="1">
                                                        <label for="checkbox_5">Slider</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_6" name="coupon"
                                                            value="1">
                                                        <label for="checkbox_6">Coupon</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <div class="controls">
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_7" name="shipping"
                                                            value="1">
                                                        <label for="checkbox_7">Shipping</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_8" name="blog"
                                                            value="1">
                                                        <label for="checkbox_8">Blog</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_9" name="setting"
                                                            value="1">
                                                        <label for="checkbox_9">Setting</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_10" name="returnorder"
                                                            value="1">
                                                        <label for="checkbox_10">Return Order</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_11" name="review"
                                                            value="1">
                                                        <label for="checkbox_11">Review</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <div class="controls">
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_12" name="orders"
                                                            value="1">
                                                        <label for="checkbox_12">Orders</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_13" name="stock"
                                                            value="1">
                                                        <label for="checkbox_13">Stock</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_14" name="reports"
                                                            value="1">
                                                        <label for="checkbox_14">Reports</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_15" name="allusers"
                                                            value="1">
                                                        <label for="checkbox_15">All users</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input type="checkbox" id="checkbox_16" name="adminuserrole"
                                                            value="1">
                                                        <label for="checkbox_16">Admin User Role</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>


								</div>

								<div class="text-xs-right">
									<input type="submit" class="btn btn-rounded btn-primary" value="Add Admin User">
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