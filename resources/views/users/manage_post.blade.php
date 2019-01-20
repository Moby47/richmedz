
<!DOCTYPE html>
<html lang="en">
<head>
<title>Richmedicals - Manage Post</title>

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
									
									<li>Delete Post</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle"></h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
											
												@if(session('done'))
												<div class='alert alert-success text-center'>
													{{session('done')}}
												</div>
												@endif

										 <h3 class="w3_inner_tittle two">Running Posts</h3>
										 @if(count($post)>0)
											<table id="table">
											<thead>
											  <tr>
												<th>Title</th>
												<th>Type</th>
												<th>Amount</th>
												<th>Image</th>
												<th>Summary</th>
												<th>Time</th>
												<th>Delete</th>
											  </tr>
											</thead>
											<tbody>

												@foreach($post as $p)
											  <tr>
											  <td>{{substr($p->title,0,35)}}</td>
											  <td>{{$p->category}}</td>
											  <td>@if($p->amount){{$p->amount}}@else N/A @endif</td>
												<td><img src='/storage/posts/{{$p->image}}' alt='image' class='img-responsive img-thumbnail size'></td>
												<td >{{substr($p->description,0,35)}}</td>
												<td>{{$p->created_at->diffForHumans()}}</td>
												<td>
														<form action="{{route('remove1')}}" method="POST">
   
																<button type="submit" class="btn btn-danger"><span class='fa fa-trash'></span></button>
																<input name="id" type="hidden" value="{{$p->id}}"/>
																							 <!--spoofing-->
																 <input name="_method" type="hidden" value="DELETE"/>
																							 {{csrf_field()}}
																					 
																							 </form>
																			 
													</td>
												  </tr>
											 @endforeach

											</tbody>
										  </table>

{{$post->links()}}

										  @else
										  <div class='alert alert-info text-center'>
											No Post(s) Currently
										  </div>
									@endif
								</div>

						</div>
							<!-- //tables -->
					
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
<!--copy rights start here-->
<div class="copyrights">
		@include('users.includes.footer')
</div>	
<!--copy rights end here-->

@include('users.includes.js')

</body>
</html>