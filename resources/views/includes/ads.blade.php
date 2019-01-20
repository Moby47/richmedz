<!-- video-grids -->
			<div class="video-grids">
	
					<div class="col-md-12 video-grids-left">
						<h3 class='page-header'>Ads on Richmedz</h3>
						<div class="video-grids-left1">
						
								
								<div id="small-dialog" class="mfp-hide">
									</div>

						</div>
						<div class="video-grids-left2">
							<div class="course_demo1">
								<ul id="flexiselDemo1">	
									@if(count($ad)>0)

									@foreach($ad as $ads)
									<li>
										<div class="item">
											@if($ads->category == 'f')
										<a href='/fertility'>	
											@elseif($ads->category == 'h')
											<a href='/hypertension'>	
												@elseif($ads->category == 'v')
											<a href='/vision'>
												@elseif($ads->category == 'd')
											<a href='/diabetes'>
												@elseif($ads->category == 's')
											<a href='/solution'>	
												@elseif($ads->category == 'j')
											<a href='/joint-care'>	
									
												@elseif($ads->category == 'w')
											<a href='/weight-loss-management'>			
											@endif
											<img src="/storage/posts/{{$ads->image}}" alt="{{$ads->title}}" title='{{$ads->title}}' class="img-responsive ad-size" />
											<a class=" popup-with-zoom-anim" href="#small-dialog">
											</a>
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												</div>
											<div class="floods-text">

												<h3 class='wrap'>{{$ads->title}}</h3></a>

											</div>
										</div>
									</li>
									@endforeach

									@else

									<li>
											<div class="item">
												<a class=" popup-with-zoom-anim" href="#small-dialog">
														<i> </i>
												</a>
												<div id="small-dialog" class="mfp-hide">
													</div>
												<div class="floods-text text-center">
													<h3>No Ad(s) Currently</h3>
													
												</div>
											</div>
										</li>
										<li>
												<div class="item">
													<a class=" popup-with-zoom-anim" href="#small-dialog">
															<i> </i>
													</a>
													<div id="small-dialog" class="mfp-hide">
														</div>
													<div class="floods-text text-center">
														<h3>No Ad(s) Currently</h3>
														
													</div>
												</div>
											</li>
											<li>
													<div class="item">
														<a class=" popup-with-zoom-anim" href="#small-dialog">
																<i> </i>
														</a>
														<div id="small-dialog" class="mfp-hide">
															</div>
														<div class="floods-text text-center">
															<h3>No Ad(s) Currently</h3>
															
														</div>
													</div>
												</li>

								@endif

								</ul>
							</div>
										
						</div>
					</div>
					
				</div>
			<!-- //video-grids -->
