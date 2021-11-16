@extends('admin.admin_master')
@section('admin')
<div class="container-full">

	<!-- Main content -->
	<section class="content">

		<!-- Basic Forms -->
		<div class="box">
			<div class="box-header with-border">
				<h4 class="box-title">Seo Setting Page</h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col">
						<form method="POST" action="{{ route('update.seosetting') }}" >
							@csrf

							<input type="hidden" name="id" value="{{ $seo->id }}">

							<div class="row">
								<div class="col-md-12">						
									<div class="row">
										<div class="col-md-6">

											<div class="form-group">
												<h5>Meta Title</h5>
												<div class="controls">
													<input type="text" name="meta_title" class="form-control" value="{{ $seo->meta_title }}">
												</div>
											</div>			
									
											<div class="form-group">
												<h5>Meta Author</h5>
												<div class="controls">
													<input type="text" name="meta_author" class="form-control"  value="{{ $seo->meta_author }}">
												</div>
											</div>			
									
											<div class="form-group">
												<h5>Meta Keyword</h5>
												<div class="controls">
													<input type="text" name="meta_keyword" class="form-control" value="{{ $seo->meta_keyword }}" >
												</div>
											</div>			
									
											<div class="form-group">
												<h5>Meta Description</h5>
                                                <div class="controls">
                                                    <textarea name="meta_description" class="form-control"
                                                        placeholder="Textarea text">{{ $seo->meta_description }}</textarea>
                                                </div>
                                            </div>
													
									
											<div class="form-group">
												<h5>Google Analytics</h5>
												<div class="controls">
													<textarea name="google_analytics" class="form-control"
                                                        placeholder="Textarea text">{{ $seo->google_analytics }}</textarea>
												</div>
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





	@endsection