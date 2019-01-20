
<!DOCTYPE html>
<html lang="en">
<head>
<title>Richmedicals - Dashboard </title>

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
					<div class="inner_content_w3_agile_info">
				
			
						<!-- /agile_top_w3_post_sections-->
							<div class="agile_top_w3_post_sections">
							       <div class="col-md-12 agile_top_w3_post agile_info_shadow">
										   <div class="img_wthee_post">
										         <h3 class="w3_inner_tittle">Report</h3>
											<!--	<div class="stats-wrap">
													<div class="count_info"><h4 class="count">Total Posts </h4><span class="year"></span></div>
													<div class="year-info"><p class="text-no">{{$post}}</p><span class="year"></span></div>
													<div class="clearfix"></div>
												</div>-->
												<div class="stats-wrap">
													<div class="count_info"><h4 class="count">Total Ads </h4><span class="year"></span></div>
													<div class="year-info"><p class="text-no">{{$ad}} </p><span class="year"></span></div>
													<div class="clearfix"></div>
												</div>
											  
											</div>
									   </div>
									   
								       <div class="clearfix"></div>
							     </div>
								   
						<!-- //agile_top_w3_post_sections-->
						
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