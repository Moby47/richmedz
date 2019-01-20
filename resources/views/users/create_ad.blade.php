
<!DOCTYPE html>
<html lang="en">
<head>
<title>Richmedicals - Create Ad </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

@include('users.includes.css')

</head>

<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  @include('users.includes.nav')

		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="/">Home</a><span>«</span></li>
									<li>Create Ad </li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
																	@if(session('done'))
																	<div class='alert alert-success text-center'>
																		{{session('done')}}
																	</div>
																	@endif
	
																	@if(session('err'))
																	<div class='alert alert-danger text-center'>
																		{{session('err')}}
																	</div>
																	@endif
															 <h3 class="w3_inner_tittle two">New Ad</h3>
																	<div class="form-body">
																		<form method='POST' enctype="multipart/form-data" action='{{route('new_ad')}}'> 

																			<div class="form-group"> <label for="exampleInputEmail1">Title</label>
																				@if ($errors->has('Title'))
																				<span class="help-block">
																					<strong>{{ $errors->first('Title') }}</strong>
																				</span>
																			@endif
																			 <input type="text" name='Title' class="form-control" value="{{ old('Title') }}" id="exampleInputEmail1" placeholder="Enter Ad title">
																			 </div> 
																					
																			<div class="form-group"> <label for="exampleInputFile">Select Image</label>
																				@if ($errors->has('Picture'))
																				<span class="help-block">
																					<strong>{{ $errors->first('Picture') }}</strong>
																				</span>
																			@endif
																				<input type="file" name='Picture' id="exampleInputFile">
																				</div>

																				<div class="form-group"> <label for="exampleInputEmail1">Select Category</label>
																					@if ($errors->has('Category'))
																				<span class="help-block">
																					<strong>{{ $errors->first('Category') }}</strong>
																				</span>
																			@endif
																					<select class="form-control" name='Category' id="exampleInputEmail1">
																							<option></option>
																						<option value='f'>Fertility</option>
																						<option value='h'>Hypertension</option>
																						<option value='v'>Vision</option>
																						<option value='d'>Diabetes</option>
																						<option value='s'>2 in 1 Solutions</option>
																						<option value='j'>Joint Care</option>
																						<option value='w'>Weight loss Management</option>
																					</select>
																				</div>
	

																				{{csrf_field()}}
																			<button type="submit" class="btn btn-default">Submit</button>
																		</form> 
																	</div>

															</div>
															
																</div> 
														<!--//forms-->											   
					
							
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	@include('users.includes.footer')
</div>	
<!--copy rights end here-->

@include('users.includes.js')



</body>
</html>