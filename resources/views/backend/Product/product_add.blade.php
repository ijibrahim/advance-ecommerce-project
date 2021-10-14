@extends('admin.admin_master')
@section('admin')



	  <div class="container-full">
  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form novalidate>
					  <div class="row">
						<div class="col-12">						
							<div class="row"> {{-- Start First Row --}}
								
								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Brand Select <span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="brand_id" class="form-control">
												<option value="" selected="" disabled="">Select Brand</option>
												@foreach($brands as $brand)
												<option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>
												@endforeach
											</select>
											@error('brand_id')
											<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Category Select<span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="category_id" class="form-control">
												<option value="" selected="" disabled="">Select Category</option>
												@foreach($categories as $category)
												<option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
												@endforeach
											</select>
											@error('category_id')
											<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Sub Category Select<span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="subcategory_id" class="form-control">
												<option value="" selected="" disabled="">Category Select</option>
												
											</select>
											@error('subcategory_id')
											<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
								</div> 
								{{-- End col md 4 --}}
							</div> {{-- End 1st row --}}

						
							<div class="row"> {{-- Start 2nd Row --}}
								
								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>SubSub Category Select <span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="subsubcategory_id" class="form-control">
												<option value="" selected="" disabled="">SubSub Category Select</option>
												
											</select>
											@error('subsubcategory_id')
											<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Name English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_name_en" class="form-control" > </div>
											@error('product_name_en')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Name Bangla <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_name_bn" class="form-control" > </div>
											@error('product_name_bn')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}
							</div> {{-- End 2nd row --}}

						
							<div class="row"> {{-- Start 3rd Row --}}
								
								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Code <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_code" class="form-control" > 
										</div>
											@error('product_code')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Quentity <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_qty" class="form-control" > 
										</div>
											@error('product_qty')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Tag English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_tags_en" value="Lorem,Ipsum,Amet" data-role="tagsinput"  /> 
										</div>
											@error('product_tags_en')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}
							</div> {{-- End 3rd row --}}
						
							<div class="row"> {{-- Start 4th Row --}}
								
								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Tag Bangla <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_tags_bn" value="Lorem,Ipsum,Amet" data-role="tagsinput"  /> 
										</div>
											@error('product_tags_bn')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Size English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_size_en" value="12,50,32" data-role="tagsinput"  /> 
										</div>
											@error('product_size_en')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Size Bangla <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_size_bn" value="১২,৫০,৩২" data-role="tagsinput"  />
										</div>
											@error('product_size_bn')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}
							</div> {{-- End 4th row --}}


							<div class="row"> {{-- Start 5th Row --}}
								
								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Color English <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_color_en" value="red,green,blue" data-role="tagsinput"  /> 
										</div>
											@error('product_color_en')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Color Bangla <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="product_color_bn" value="লাল, সবুজ, নিল" data-role="tagsinput"  /> 
										</div>
											@error('product_color_bn')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Selling Price <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="selling_price" class="form-control"  />
										</div>
											@error('selling_price')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}
							</div> {{-- End 5th row --}}


							<div class="row"> {{-- Start 6th Row --}}
								
								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Product Discount Price <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="discount_price" class="form-control"  /> 
										</div>
											@error('discount_price')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Main Thambnail <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="file" name="product_thambnail" class="form-control" onchange="mainThamUrl(this)"  /> 
										</div>
											@error('product_thambnail')
											<span class="text-danger">{{ $message }}</span>
											@enderror
											<img src="" id="mainThmb" alt="">
									</div>
								</div> 
								{{-- End col md 4 --}}

								{{-- Start col md 4 --}}	
								<div class="col-md-4">
									<div class="form-group">
										<h5>Multiple Image <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="file" name="multi_image[]" multiple="" class="form-control" id="multiImg" />
										</div>
											@error('multi_image')
											<span class="text-danger">{{ $message }}</span>
											@enderror
										<div class="row" id="preview_img"></div>
									</div>
								</div> 
								{{-- End col md 4 --}}
							</div> {{-- End 6th row --}}


							<div class="row"> {{-- Start 7th Row --}}
								

								{{-- Start col md 6 --}}	
								<div class="col-md-6">
									<div class="form-group">
										<h5>Product Sort Description English <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea type="text" id="textarea" name="sort_descp_en" class="form-control"  ></textarea> 
										</div>
											@error('sort_descp_en')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 6 --}}

								{{-- Start col md 6 --}}	
								<div class="col-md-6">
									<div class="form-group">
										<h5>Product Sort Description Bangla <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea type="text" id="textarea" name="sort_descp_bn" class="form-control"  ></textarea> 

										</div>
											@error('sort_descp_bn')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 6 --}}
								
							</div> {{-- End 7th row --}}


							<div class="row"> {{-- Start 8th Row --}}
								

								{{-- Start col md 6 --}}	
								<div class="col-md-6">
									<div class="form-group">
										<h5>Product Long Description English <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea type="text" id="editor1" name="sort_descp_en" class="form-control" rows="10" cols="80" ></textarea> 
										</div>
											@error('sort_descp_en')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 6 --}}

								{{-- Start col md 6 --}}	
								<div class="col-md-6">
									<div class="form-group">
										<h5>Product Long Description Bangla <span class="text-danger">*</span></h5>
										<div class="controls">
											<textarea type="text" id="editor2" name="sort_descp_bn" class="form-control" rows="10" cols="80" ></textarea> 

										</div>
											@error('sort_descp_bn')
											<span class="text-danger">{{ $message }}</span>
											@enderror
									</div>
								</div> 
								{{-- End col md 6 --}}
								
							</div> {{-- End 8th row --}}


							
						</div>
					  </div>

					  <hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_1" required value="1" name="hot_deals">
											<label for="checkbox_1">Hot Deals</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_2" value="1" name="featured">
											<label for="checkbox_2">Featured</label>
										</fieldset>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_3" required value="1" name="special_offer">
											<label for="checkbox_3">Special Offer</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_4" value="1" name="special_deals">
											<label for="checkbox_4">Special Deals</label>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary" value="Add Product">
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
						$('select[name="subsubcategory_id"]').html('');
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



		$('select[name="subcategory_id"]').on('change', function(){
			var subcategory_id = $(this).val();
			if(subcategory_id) {
				$.ajax({
					url: "{{ url('category/sub-subcategory/ajax') }}/"+subcategory_id,
					type: "GET",
					dataType:"json",
					success:function(data){
						var d = $('select[name="subsubcategory_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
						})
					}
				});
			} else{
				alert('danger')
			}
		});



		
	});
</script>


<script>
	
	function mainThamUrl(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80),height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}

</script>

<script>
 
  $(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data
           
          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //create image element 
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });
           
      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });
   
  </script>

@endsection