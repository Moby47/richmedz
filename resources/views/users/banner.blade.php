
<!DOCTYPE html>
<html lang="en">
<head>
<title>Richmedicals - Create Banner </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

@include('users.includes.css')

</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
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
									<li>banner </li>
									
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
	
																	
															 <h3 class="w3_inner_tittle two">New Sliding Banner</h3>
																	<div class="form-body">
																		<form method='POST' action='{{route('new_banner')}}'> 
                                                                       

																			<div class="form-group"> <label for="exampleInputEmail1">Banner</label>
																				@if ($errors->has('Banner'))
																				<span class="help-block">
																					<strong>{{ $errors->first('Banner') }}</strong>
																				</span>
																			@endif
																			 <input type="text" name='Banner' value="{{ old('Banner') }}" class="form-control" id="exampleInputEmail1" placeholder="Banner text here">
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