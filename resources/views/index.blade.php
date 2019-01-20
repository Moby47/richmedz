
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to Richmedicals </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health care and tips brought to your device on Richmedicals - vision, hypertension, diabetes, joint care, weight loss, fertility" />
<!-- Custom Theme files -->
@include('includes.css')
<style>
		.post-pix{
			 width:100% !important;
		}
		.ad-size{
			width:100% !important;
		}
	</style>
</head>

<body>
<!-- banner -->
	<div class="banner">
		<div class="banner-info">
			<div class="container">
			
					@include('includes.nav')

					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">

							
							<li>
									<div class="banner-info-slider">
										<ul>
									
										</ul>
									<h3>Welcome</h3>
										<p><span>At Richmedicals, We are simply the best with excellence.</span></p>
										<div class="more">
											<a href="/about" class="type-1">
												<span> About us </span>
												<span> About us</span>
											</a>
										</div>
									</div>
								</li>
						
							
						</ul>
					</div>
			</div>
		</div>
	</div>
<!-- banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
		
				<h3 class='page-header'>News on Richmedz</h3>
				@include('includes.banner')

				<br>
			
		
				@include('includes.ads')

		</div>
	</div>
<!-- //banner-bottom -->



<!-- footer -->

	<div class="footer">
		<div class="container">
			<div class="footer-grids wthree-agile">
			
				<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-left-whtree-agileinfo">
				
						@include('includes.foot')

				</div>
				<div class="footer-bottom-right-whtree-agileinfo">
						<ul>
							<li><a href="mailto:info@richmedzhealth.com.ng" class="icon-button twitter"><i class="fa fa-envelope"></i><span></span></a></li>
							<li><a href="tel:08080897805" onclick="return gtag_report_conversion('tel:08080897805');" class="icon-button google"><i class="fa fa-phone"></i><span></span></a></li>
							<li><a href="intent://send/+2348080897805#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end" class="icon-button v"><i class="fa fa-whatsapp"></i><span></span></a></li>
						</ul>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->

@include('includes.js')

</body>
</html>