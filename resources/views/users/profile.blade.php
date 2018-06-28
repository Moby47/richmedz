
<!DOCTYPE HTML>
<html>
<head>
<title>DutyPost - Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/custom.css" rel="stylesheet">

</head>
<body>
		<div id="wrapper">


        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">Duty Post</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="number">5</span></a>
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">
		               
		                	<div class="user-new">
		                	<p>No Image in gallery</p>
		                	<span></span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Contact details incomplete</p>
		                	<span></span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-heart"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>No location set on map</p>
		                	<span></span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-times"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                
		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Dera</span><img src="images/wo.jpg"></a>
		             
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="dashboard.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                    </li>
                   
            
					 <li>
                        <a href="profile.html" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Profile</span> </a>
                    </li>
                    
                    <li>
                        <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                    </li>
                    
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">

		
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Personal</h3>
 		<form>
  <div class="form-group">
    <label for="First">First Name</label>
    <input type="text" class="form-control" id="First" name='First_Name' placeholder="First Name">
	</div>
	<div class="form-group">
			<label for="Last">Last Name</label>
			<input type="text" class="form-control" id="Last" name='Last_Name' placeholder="Last Name">
		</div>
  <div class="form-group">
    <label for="Phone">Phone Number</label>
    <input type="password" class="form-control" id="Phone" name='Phone' placeholder="eg 08012345678">
  </div>
  
	<div class="form-group">
			<label for="Gender">Gender</label>
			<select name="gender" id="Gender" class="form-control1">
				<option  value='Male'>Male</option>
				<option value='Female'>Female</option>
			</select>
		</div>

		<div class="form-group">
				<label for="age">Age</label>
				<input type="number" class="form-control" id="age" name='Phone' placeholder="eg 47">
			</div>

  <button type="submit" class="btn btn-default">Update</button>
</form>
</div>




<div class="grid-form1">
<h3 id="forms-example" class="">Location</h3>
<form>
		<div class="form-group">
				<label for="state">State</label>
				<select name="State" id="state" class="form-control1">
					<option  value='Lagos'>Lagos</option>
					<option value='Abia'>Abia</option>
				</select>
			 </div>
<div class="form-group">
<label for="town">Town</label>
<input type="text" class="form-control" id="town" name='Town' placeholder="eg ikeja">
</div>
<div class="form-group">
 <label for="area">Area</label>
 <input type="text" class="form-control" id="area" name='Area' placeholder="eg under bridge, computer village">
</div>
<div class="form-group">
<label for="summary">Location Summary</label>
<textarea class="form-control" id="summary" name='Summary' placeholder="eg Opposite computer village gate, Ikeja under bridge, Obafemi awololo way."></textarea>
</div>

<button type="submit" class="btn btn-default">Update</button>
</form>
</div>


<div class="grid-form1">
		<h3 id="forms-example" class="">Business</h3>
		<form>
				<div class="form-group">
						<label for="state">Service Category <i>(which category does your business belong?)</i></label>
						<select name="State" id="state" class="form-control1">
							<option  value='Lagos'>Food & Drinks</option>
							<option value='Abia'>Fashion</option>
						</select>
					 </div>
					 <div class="form-group">
							<label for="state">Working Hr(s)</label>
							<select name="State" id="state" class="form-control1">
									<option value='Abia'>All Day(s)</option>
								<option  value='Lagos'>Only Weekdays</option>
								<option value='Abia'>Only Weekends</option>
								<option value='Abia'>Only Night(s)</option>
								<option value='Abia'>Only Daytime</option>
							</select>
						 </div>

						 <div class="form-group">
								<label for="state">Service Type <i>(eg I render only home services)</i></label>
								<select name="State" id="state" class="form-control1">
										<option value='Abia'>Only Home</option>
									<option  value='Lagos'>Only Away</option>
									<option value='Abia'>Home & Away</option>
								</select>
							 </div>
	
		<div class="form-group">
		<label for="summary">Job Summary</label>
		<textarea class="form-control" rows='5' id="summary" name='Summary' placeholder="eg We are pc games dealers located at lekki phase1, get in touch for the best high end pc games such as Fifa19."></textarea>
		</div>
		
		<button type="submit" class="btn btn-default">Update</button>
		</form>
		</div>




<!---->



 	</div>
 	<!--//grid-->
		<!---->
<div class="copy">
             <!--  <p> &copy; 2018 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			--><p>&copy; 2018 DutyPost. All Rights Reserved</p>
			</div>
		</div>
		<div class="clearfix"> </div>
			 </div>
			 


			 <script src="js/jquery.min.js"> </script>
			 <script src="js/bootstrap.min.js"> </script>
			 <!-- Mainly scripts -->
			 <script src="js/jquery.metisMenu.js"></script>
			 <script src="js/jquery.slimscroll.min.js"></script>
			 <!-- Custom and plugin javascript -->
			 <script src="js/custom.js"></script>
			 <script src="js/screenfull.js"></script>
					
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script>
			$(function () {
				$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
	
				if (!screenfull.enabled) {
					return false;
				}
	
				
	
				$('#toggle').click(function () {
					screenfull.toggle($('#container')[0]);
				});
				
	
				
			});
			</script>
<!---->

</body>
</html>

