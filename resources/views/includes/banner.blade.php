
						@if($banner)
									<div class="move-text">
										@foreach($banner as $b)
										
										<div class="marquee">
											<div class="marquee1"><a class="breaking" href="#">{{$b->story}}</a></div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									@endforeach
									</div>
						
									@else
						
									<div class="move-text">
											<div class="breaking_news">
												<h2>Breaking News</h2>
											</div>
											<div class="marquee">
												<div class="marquee1"><a class="breaking" href="single.html">No news currently</a></div>
												<div class="marquee1"><a class="breaking" href="single.html">Please stay tuned</a></div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
										</div>		
						@endif			