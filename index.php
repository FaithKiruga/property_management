<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property search</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  
<body>
<!--***************************************Top************************************-->
<section id="top">
<div class="container">
 <div class="row">
  <div class="top_1 clearfix">
   <div class="col-sm-6">
    <div class="top_1l clearfix">
	 <ul>
	  <li><i class="fa fa-phone"></i> Tel: +254712345678</li>
	  <li><i class="fa fa-map-marker"></i>   6th Floor ABC Place, Waiyaki way</li>
	  <li><i class="fa fa-envelope-o"></i>  perfectrealty@gmail.com</li>
	 </ul>
	</div>
   </div>
   <div class="col-sm-6">
    <div class="top_1r pull-right clearfix">
	 <ul>
         <li><a class="m_tag button mgt" href="log_in.php"><i class="fa fa-user"></i>  Log In</a></li>
         <li><a class="m_tag button mgt" href="register.php"><i class="fa fa-sign-in"></i>  Sign Up</a></li>
	  <li><a class="col" href="https://www.facebook.com/home.php"><i class="fa fa-facebook"></i></a></li>
	  <li><a class="col" href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
	  <li><a class="col" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a></li>
	 </ul>
	</div>
   </div>
  </div>
 </div>
</div>
</section>
<!--*************** Header Section Starts *****************-->
<section id="header" class="clearfix cd-secondary-nav">
	<nav class="navbar">
		<div class="container">
		    <div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"> <i class="fa fa-home"></i> <span>Perfect Realty</span> </a>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav nav_1">
				<li><a class="m_tag active_tab" href="index.php">Home</a></li>
				<li class="dropdown">
					  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Property<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="listing.php">Property Listing</a></li>
						<li><a class="border_none" href="detail.php">Property Detail</a></li>
					  </ul>
                    </li>
				
				    <li class="dropdown">
					  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Agent<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="agent.php">Agent</a></li>
						<li><a class="border_none" href="agent_detail.php">Agent Detail</a></li>
					  </ul>
                    </li>
<!--					<li class="dropdown">-->
<!--					  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Agencies<span class="caret"></span></a>-->
<!--					  <ul class="dropdown-menu drop_3" role="menu">-->
<!--						<li><a href="agency.html">Agencies</a></li>-->
<!--						<li><a class="border_none" href="agency_detail.html">Agencies Detail</a></li>-->
<!--					  </ul>-->
<!--                    </li>-->
<!--				  <li class="dropdown">-->
<!--					  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>-->
<!--					  <ul class="dropdown-menu drop_3" role="menu">-->
<!--						<li><a href="blog.html">Blog</a></li>-->
<!--						<li><a class="border_none" href="blog_detail.html">Blog Detail</a></li>-->
<!--					  </ul>-->
<!--                    </li>-->
				  <li><a class="m_tag" href="about.php">About Us</a></li>
				<li><a class="m_tag" href="contact.php">Contact</a></li>
			</ul>
		    	<ul class="nav navbar-nav navbar-right nav_2">
				  <li><a class="m_tag button mgt" href="submit.php">Submit Property</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	</section>
	
<section id="center" class="center_home clearfix">
<div class="center_main clearfix">
 <div class="w3-content w3-section clearfix">
  <img class="mySlides w3-animate-top" src="img/about2.jpg" alt="abc" style="width: 100%; display: none;">
  <img class="mySlides w3-animate-bottom" src="img/l1.jpg" alt="abc" style="width: 100%; display: block;">
  <img class="mySlides w3-animate-top" src="img/s1.jpg" alt="abc" style="width: 100%; display: none;">
</div>

 <div class="center_main_1 clearfix">
  <div class="col-sm-8"></div>
  <div class="col-sm-4">
<!--	  ************ property characteristics filter ***************-->
   <div class="center_main_1r clearfix">
     <h5 class="mgt col">Property Status</h5>
	 <select class="form-control" name="property">
		<option value="">Any Status</option>
		<option value="for-sale">For Sale</option>
		<option value="for-rent">For Rent</option>
		<option value="sold">Sold</option>
    </select>
	<h5 class="col">Property Type</h5>
	<select class="form-control" name="property">
		<option value="">Any Type</option>
		<option value="family-house">Family House</option>
		<option value="apartment">Apartment</option>
		<option value="condo">Condo</option>
    </select>
	<h5 class="col">Location</h5>
	<select class="form-control" name="Location">
		<option value="">Any Location</option>
		<option value="family-house">New York</option>
		<option value="apartment">Los Angeles</option>
		<option value="condo">Chicago</option>
		<option value="condo">Philadelphia</option>
		<option value="condo">San Francisco</option>
   </select>
   <h5 class="col">Price</h5>
	<select class="form-control" name="Price">
		<option value="">Ksh 54,000 - Ksh 130,000</option>
		<option value="family-house">Ksh 44,000 - Ksh 140,000</option>
		<option value="apartment">Ksh 74,000 - Ksh 150,000</option>
		<option value="condo">Ksh 84,000 - Ksh 160,000</option>
		<option value="condo">Ksh 94,000 - Ksh 170,000</option>
		<option value="condo">Ksh 44,000 - Ksh 120,000</option>
   </select>
   <div class="center_main_1ri clearfix">
    <div class="col-sm-6 space_left">
	 <h5 class="col">Bedrooms</h5>
	 <select class="form-control" name="beds" id="beds">
		<option value="">Any</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
<!--		 <option value="6">6</option>-->
<!--		 <option value="7">7</option>-->
<!--		 <option value="8">8</option>-->
<!--		 <option value="9">9</option>-->
<!--		 <option value="10">10</option>		-->
     </select>
	</div>
	<div class="col-sm-6 space_right">
	 <h5 class="col">Baths</h5>
	 <select class="form-control" name="baths" id="baths">
		<option value="">Any</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
<!--		<option value="6">6</option>-->
<!--		<option value="7">7</option>-->
<!--		<option value="8">8</option>-->
<!--		<option value="9">9</option>-->
<!--		<option value="10">10</option>-->
     </select>
	</div>
   </div>
   <div class="center_main_1ri clearfix">
    <div class="col-sm-6 space_left">
	 <h5 class="col">Area (Min)</h5>
	 <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control mgt text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>
	</div>
	</div>
	<div class="col-sm-6 space_right">
	 <h5 class="col">Area (Max)</h5>
	 <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
				</span>
				<input type="text" class="form-control mgt text-center" value="1">
				<span class="input-group-btn">
					<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
				</span>
	</div>
	</div>
   </div>
   <h5 class="text-center"><a class="button_1 block" href="#">SEARCH PROPERTY</a></h5>
   </div>
  </div>
<!--	 ******** end of x-tics *******-->
 </div>
</div>
</section>

<!--************ RECENTLY ADDED PROPERTIES*******-->
<section id="feature">
 <div class="container">
  <div class="row">
   <div class="feature_1 clearfix">
    <div class="col-sm-12">
	   <h4 class="mgt">RECENTLY ADDED<br><span class="col_1">PROPERTIES</span></h4>
	</div>
   </div>
   <div class="feature_2 clearfix">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
<!--***************** ITEM 1 ************************************************-->
                <div class="item active">
					<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m1.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Rent</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Apartment</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">3 Bedroom Apartment</a></h4>
					  <p><i class="fa fa-map-marker"></i> Kitusuru</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 3 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 920 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 80,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Whitney Houston <span class="pull-right"><i class="fa fa-calendar"></i> 1 months ago</span></a></h6>
					  </div>
					 </div>
					</div>
<!--*************************END OF ITEM 1*******************************-->
<!--************************* ITEM 2*******************************-->
					<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m2.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_4" href="#">For Sale</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Apartment</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">2 Bedroom Apartment</a></h4>
					  <p><i class="fa fa-map-marker"></i> Westlands</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 2 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 820 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 1 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 40,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Grace Myan <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
					  </div>
					 </div>
					</div>
<!--*****************END OF ITEM 2 ************************************************-->

<!--***************** ITEM 3 ************************************************-->
					<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m3.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Rent</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">Luxurious Family House </a></h4>
					  <p><i class="fa fa-map-marker"></i> Kitusuru</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 4 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 4 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1620 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 150,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Eva Myran <span class="pull-right"><i class="fa fa-calendar"></i> 25 days ago</span></a></h6>
					  </div>
					 </div>
					</div>
                </div>
<!--***************** END OF ITEM 3 ************************************************-->

<!--***************** ITEM 4 ************************************************-->
                <div class="item">
                    <div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m5.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Rent</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">Luxury Family Home</a></h4>
					  <p><i class="fa fa-map-marker"></i> Syokimau</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 5 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 5 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1620 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 160,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Nulla Bret <span class="pull-right"><i class="fa fa-calendar"></i> 20 Days ago</span></a></h6>
					  </div>
					 </div>
					</div>
<!--***************** END OF ITEM 4 ************************************************-->
<!--***************** ITEM 5 ************************************************-->
					<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m4.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_4" href="#">For Rent</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">4 Bedroom mansion</a></h4>
					  <p><i class="fa fa-map-marker"></i> Kilimani </p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 4 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 4 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1120 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 130,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Fay K <span class="pull-right"><i class="fa fa-calendar"></i> 11 Days ago</span></a></h6>
					  </div>
					 </div>
					</div>
<!--***************** END OF ITEM 5 ************************************************-->
<!--***************** ITEM 6 ************************************************-->
					<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m6.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Sale</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">2 Bedroom Town Apartment </a></h4>
					  <p><i class="fa fa-map-marker"></i> Westlands</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 2 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 2 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 620 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 1 Garage</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 85,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Tauren Wells <span class="pull-right"><i class="fa fa-calendar"></i> 2 months ago</span></a></h6>
					  </div>
					 </div>
					</div>
<!--***************** END OF ITEM 6 ************************************************-->
                </div>
            </div>
        </div>
	<div class="feature_2_last text-center clearfix">
            <div class="col-sm-12">
<!-- **************************** Controls *********************************** -->
                <div class="controls">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example" data-slide="next"></a>
                </div>
            </div>
        </div>

   </div>
  </div>
 </div>
</section>
<!--************END OF RECENTLY ADDED PROPERIES*******-->
<!--*********************************** PROPERTY SERVICES ****************************-->
<section id="serv_home">
 <div class="serv_home_m clearfix">
   <div class="container">
  <div class="row">
    <div class="feature_1 clearfix">
    <div class="col-sm-12">
	   <h4 class="mgt">PROPERTY <br><span class="col_1">SERVICES</span></h4>
	</div>
   </div>
    <div class="serv_home_1 clearfix">
    <div class="col-sm-4">
	   <div class="serv_home_1i clearfix">
	    <div class="serv_home_1i1 clearfix">
		 <h4 class="mgt col">Houses</h4>
		 <p class="col">Via <b>Perfect Realty</b> local real estate offices we offer a wide range of property for rent in Nairobi including town houses, maisonettes,condominiumss,single and multifamily homes.
			 Perfect Realty is suitable for all types of lifestyle or investment purchases, whether you are looking for a holiday home, a part-time move or a permanent residence.</p>
		 <h5><a class="col" href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
		</div>
		<div class="serv_home_1i2 clearfix">
		 <span><i class="fa fa-home"></i></span>
		</div>
	   </div>
	</div>
	<div class="col-sm-4">
	   <div class="serv_home_1i clearfix">
	    <div class="serv_home_1i1 clearfix">
		 <h4 class="mgt col">Apartments</h4>
		 <p class="col">Perfect Realty is also suitable for finding well-built, new and spaciouss apartments for sale or rent. You can find modern apartments located in Kilimani, Kileleshwa, Lavington, and Westlands.</p>
		 <h5><a class="col" href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
		</div>
		<div class="serv_home_1i2 clearfix">
		 <span><i class="fa fa-building-o"></i></span>
		</div>
	   </div>
	</div>
	<div class="col-sm-4">
	   <div class="serv_home_1i clearfix">
	    <div class="serv_home_1i1 clearfix">
		 <h4 class="mgt col">Commercial</h4>
		 <p class="col">Perfect Realty's commercial property department proactively monitors and responds to market supply and demand in Nairobi, Mombasa and throughout Kenya. Our commercial property manager handles non-residential properties like offices, retail spaces, storage facilities, shopping centers and industrial buildings. </p>
		 <h5><a class="col" href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
		</div>
		<div class="serv_home_1i2 clearfix">
		 <span><i class="fa fa-gear"></i></span>
		</div>
	   </div>
	</div>
   </div>
  </div>
 </div>
 </div>
</section>
<!--*********************************** END OF PROPERTY SERVICES ****************************-->
<!--*********************************** FEATURED PROPERTIES ****************************-->
<section id="feature_o">
 <div class="container">
  <div class="row">
   <div class="feature_1 clearfix">
    <div class="col-sm-12">
	   <h4 class="mgt">FEATURED <br><span class="col_1">PROPERTIES</span></h4>
	</div>
   </div>
   <div class="feature_2 clearfix">
    <div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m7.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Rent</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Apartment</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">Townhouse Apartment</a></h4>
					  <p><i class="fa fa-map-marker"></i>Westlands</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 3 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 920 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 90,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Esther Paris <span class="pull-right"><i class="fa fa-calendar"></i> 1 month ago</span></a></h6>
					  </div>
					 </div>
					</div>
	<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m8.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_4" href="#">For Sale</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">5 Bedroom House </a></h4>
					  <p><i class="fa fa-map-marker"></i> Muithaiga</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 5 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 4 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1720 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 3 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 99,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Edwin Fairwicks<span class="pull-right"><i class="fa fa-calendar"></i> 2 months ago</span></a></h6>
					  </div>
					 </div>
					</div>
	<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/m9.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Sale</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">5 Bedroom House</a></h4>
					  <p><i class="fa fa-map-marker"></i> Kilimani</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 5 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 5 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1620 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 80,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Evans K <span class="pull-right"><i class="fa fa-calendar"></i> 1 month ago</span></a></h6>
					  </div>
					 </div>
					</div>
   </div>
   <div class="feature_2 clearfix">
    <div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/img2.jpg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Rent</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">Luxurious Townhouse</a></h4>
					  <p><i class="fa fa-map-marker"></i>Muthaiga</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 4 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1120 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 130,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Vic Frayes <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
					  </div>
					 </div>
					</div>
	<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/img5.jpeg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_4" href="#">For Sale</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">3 Bedroom Family Townhouse</a></h4>
					  <p><i class="fa fa-map-marker"></i> Muthaiga</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 3 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1220 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 52,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Edgar Britson <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
					  </div>
					 </div>
					</div>
	<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/img7.jpeg" class="iw" alt="abc"></a>
					    </div>
							<div class="feature_2im2 clearfix">
							 <h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
							 <h6 class="pull-right mgt"><a class="bg_2" href="#">For Sale</a></h6>
							</div>
							<div class="feature_2im4 clearfix">
							 <div class="col-sm-6 space_left">
							   <h6><a class="bg_3" href="#">Family Vacation Home</a></h6>
							 </div>
							 <div class="col-sm-6 feature_2im4r space_right">
							   <ul class="mgt">
								<li><a href="#"><i class="fa fa-link"></i></a></li>
								<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								<li><a href="#"><i class="fa fa-photo"></i></a></li>
							   </ul>
							 </div>
							</div>
					 </div>
					 <div class="feature_2m_last clearfix">
					  <h4 class="mgt bold"><a href="#">Vacation Home</a></h4>
					  <p><i class="fa fa-map-marker"></i> Kitengela</p><br>
					  <h6><i class="fa fa-hotel col_1"></i> 4 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 4 Bathrooms</span></h6>
					  <h6><i class="fa fa-object-group col_1"></i> 1900 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
					  <h5 class="bold"><a href="#">Ksh 99,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
					  <div class="feature_2m_last_i clearfix">
					    <h6><a href="#"><i class="fa fa-user"></i> Edwin Sali <span class="pull-right"><i class="fa fa-calendar"></i> 2 months ago</span></a></h6>
					  </div>
					 </div>
					</div>
   </div>
   <div class="feature_o_last clearfix">
    <div class="col-sm-12">
	 <h5 class="text-center mgt"><a class="button mgt" href="listing.php">View All <i class="fa fa-long-arrow-right"></i></a></h5>
	</div>
   </div>
  </div>
 </div>
</section>
<!--*********************************** END OF FEATURED PROPERTIES ****************************-->
<!--*********************************** MOST POPULAR PLACES ****************************-->
<section id="popular">
 <div class="container">
  <div class="row">
   <div class="feature_1 clearfix">
    <div class="col-sm-12">
	   <h4 class="mgt">MOST POPULAR <br><span class="col_1">PLACES</span></h4>
	</div>
   </div>
   <div class="popular_1 clearfix">
    <div class="col-sm-6">
	 <div class="popular_1i clearfix">
	  <div class="popular_1i1 clearfix">
	   <a href="#"><img src="img/muth1.jpg" height="400px" class="iw" alt="abc"></a>
	  </div>
	  <div class="popular_1i2 text-center clearfix">
	   <h4 class="mgt"><a  class="col" href="#">Muthaiga</a></h4>
	   <h5><a class="col" href="#">213 Properties</a></h5>
	  </div>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="popular_1i clearfix">
	  <div class="popular_1i1 clearfix">
	   <a href="#"><img src="img/kile1.jpg" height="400px" class="iw" alt="abc"></a>
	  </div>
	  <div class="popular_1i2 text-center clearfix">
	   <h4 class="mgt"><a  class="col" href="#">Kileleshwa</a></h4>
	   <h5><a class="col" href="#">283 Properties</a></h5>
	  </div>
	 </div>
	</div>
   </div>
   <div class="popular_1 clearfix">
	<div class="col-sm-6">
	 <div class="popular_1i clearfix">
	  <div class="popular_1i1 clearfix">
	   <a href="#"><img src="img/kil1.jpg" height="400px" class="iw" alt="abc"></a>
	  </div>
	  <div class="popular_1i2 text-center clearfix">
	   <h4 class="mgt"><a  class="col" href="#">Kilimani</a></h4>
	   <h5><a class="col" href="#">435 Properties</a></h5>
	  </div>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="popular_1i clearfix">
	  <div class="popular_1i1 clearfix">
	   <a href="#"><img src="img/lav1.jpg" height="400px" class="iw" alt="abc"></a>
	  </div>
	  <div class="popular_1i2 text-center clearfix">
	   <h4 class="mgt"><a  class="col" href="#">Lavington</a></h4>
	   <h5><a class="col" href="#">343 Properties</a></h5>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
<!--*********************************** END OF MOST POPULAR PLACES ****************************-->
<!--*********************************** MEET OUR AGENTS ****************************-->
<section id="team_h">
	<div class="container">
		<div class="row">
			<div class="feature_1 clearfix">
				<div class="col-sm-12">
					<h4 class="mgt">MEET OUR <br><span class="col_1">AGENTS</span></h4>
				</div>
			</div>
			<div class="team_h_1 clearfix">
				<div class="col-sm-3">
					<div class="team_h_1i clearfix">
						<div class="profile clearfix">
							<div class="img-box">
								<img src="img/img15.jpg" class="img-responsive">
								<ul class="text-center">
									<a href="https://www.facebook.com/login/"><li><i class="fa fa-facebook"></i></li></a>
									<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
									<a href="https://www.linkedin.com/login"><li><i class="fa fa-linkedin"></i></li></a>
									<a href="https://www.instagram.com/accounts/login"><li><i class="fa fa-instagram"></i></li></a>
								</ul>
							</div>
							<div class="profilei text-center clearfix">
								<h3 class="mgt">Dwayne Johnson</h3>
								<h5>Real Estate Agent</h5>
								<h5><a class="button" href="#">View Profile</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="team_h_1i clearfix">
						<div class="profile clearfix">
							<div class="img-box">
								<img src="img/img16.jpg" class="img-responsive">
								<ul class="text-center">
									<a href="https://www.facebook.com/login/"><li><i class="fa fa-facebook"></i></li></a>
									<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
									<a href="https://www.linkedin.com/login"><li><i class="fa fa-linkedin"></i></li></a>
									<a href="https://www.instagram.com/accounts/login"><li><i class="fa fa-instagram"></i></li></a>
								</ul>
							</div>
							<div class="profilei text-center clearfix">
								<h3 class="mgt">Lissa Massa</h3>
								<h5>Real Estate Agent</h5>
								<h5><a class="button" href="#">View Profile</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="team_h_1i clearfix">
						<div class="profile clearfix">
							<div class="img-box">
								<img src="img/img17.jpg" class="img-responsive">
								<ul class="text-center">
									<a href="https://www.facebook.com/login/"><li><i class="fa fa-facebook"></i></li></a>
									<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
									<a href="https://www.linkedin.com/login"><li><i class="fa fa-linkedin"></i></li></a>
									<a href="https://www.instagram.com/accounts/login"><li><i class="fa fa-instagram"></i></li></a>
								</ul>
							</div>
							<div class="profilei text-center clearfix">
								<h3 class="mgt">Mark Antony</h3>
								<h5>Real Estate Agent</h5>
								<h5><a class="button" href="#">View Profile</a></h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="team_h_1i clearfix">
						<div class="profile clearfix">
							<div class="img-box">
								<img src="img/img18.jpg" class="img-responsive">
								<ul class="text-center">
									<a href="https://www.facebook.com/login/"><li><i class="fa fa-facebook"></i></li></a>
									<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
									<a href="https://www.linkedin.com/login"><li><i class="fa fa-linkedin"></i></li></a>
									<a href="https://www.instagram.com/accounts/login"><li><i class="fa fa-instagram"></i></li></a>
								</ul>
							</div>
							<div class="profilei text-center clearfix">
								<h3 class="mgt">Elizabeth Kin</h3>
								<h5>Real Estate Agent</h5>
								<h5><a class="button" href="#">View Profile</a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--*********************************** END OF MEET OUR AGENTS ****************************-->

<!--*********************************** HAPPY CUSTOMERS ****************************-->
<section id="user">
 <div class="container">
  <div class="row">
   <div class="feature_1 clearfix">
    <div class="col-sm-12">
	   <h4 class="mgt">HAPPY <br><span class="col_1">CUSTOMERS</span></h4>
	</div>
   </div>
   <div class="user_1 clearfix">
     <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1" class=""></li>
                    <li data-target="#Carousel" data-slide-to="2" class=""></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p1.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>"There are no words to express my huge gratitude Perfect Realty for the advice you provided and for being so accommodating and responsive to all the requests regarding the properties I viewed and particularly
							  the property I bought. I appreciate the timeliness and the detail of replies to the queries, the tips on how to get the best deal, and the suggestions on how to turn a house into home. I was very nervous buying my first home, and you helped to make
							  this journey seamless and exciting"</p>
                           <hr>
					       <h4>Lucy Daria</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						   </span>
					       <h5>Buyer</h5>
					   </div>
                      </div>
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p2.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>We used Perfect Realty to sell our Waterfront property in Bayview. Their approach was professional and positive. They secured a smooth sale and an excellent price for our home. We also used them to
							  purchase our new home in a different area.</p>
                           <hr>
					       <h4>Mary Sam</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						   </span>
					       <h5>Vendors and purchasers</h5>
					   </div>
                      </div>
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p3.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>I used Perfect Realty to sell my Nightcliff property in early 2017.  I found Gabby to be straight down the line and honest with her approach to selling.  I followed her advice and judgment and presented the property as we agreed to give it the best chance of selling.  I was very pleasantly surprised when we received a decent strong offer in the first 48 hours of home opens and we accepted the offer.  Everything went smoothly and the property sold in 4 weeks.  All up start to finish took no more than 6 weeks and that’s because I listened to the advice and was
							  realistic on were the market was at and Perfect Realty delivered.</p>
                           <hr>
					       <h4>Paul Jones</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						   </span>
					       <h5>Seller</h5>
					   </div>
                      </div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p4.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>I purchased through Perfect Realty and found their level of service to be above and beyond and I would highly recommend them to any future purchasers
							  if they require a great level of service.</p>
                           <hr>
					       <h4>Lewis Heather</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						   </span>
					       <h5>Purchaser</h5>
					   </div>
                      </div>
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p5.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>Perfect Realty recently sold our unit at Stuart Park. We were absolutely wrapped with the level of service
							  and professionalism from the team.”</p>
                           <hr>
					       <h4>Maurise</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						   </span>
					       <h5>Seller</h5>
					   </div>
                      </div>
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p6.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>Thank Perfect Realty for all your hard work in the purchase of our new home, we would highly recommend anyone to contact the team to assist
							  them with the purchase or sale of their home.</p>
                           <hr>
					       <h4>Kath Jason</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						   </span>
					       <h5>Buyer</h5>
					   </div>
                      </div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p7.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>I would like to thank you for your expertise in the sale of our investment property. We really appreciated the fact that you took the time to take buyers through that couldn’t make the open inspections and informed us thoroughly throughout the entire Auction process. It was an exciting experience and would highly
							  recommend Perfect Realty to any prospective Vendor.”</p>
                           <hr>
					       <h4>Rod Lina</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						   </span>
					       <h5>Seller</h5>
					   </div>
                      </div>
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p8.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>We purchased our first property through Perfect Realty and found them to be extremely professional and knowledgeable, as well as friendly & easy going. I would highly recommend Teena and Gabby and if we are to ever
							  sell property in the future, we would go to them first</p>
                           <hr>
					       <h4>Kyle Courtney</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						   </span>
					       <h5>Buyer</h5>
					   </div>
                      </div>
                	  <div class="col-sm-4">
					   <div class="testimonial_hm text-center clearfix">
					      <img src="img/p9.jpg" width="180px" height="150px" alt="abc" class="img-circle mgt">
					      <p>To Perfect Realty

							  Thanks very much for your very professional and efficient service. You made the stress
							  of selling our house as minimal as possible!</p>
                           <hr>
					       <h4>Karen Glenn</h4>
						   <span class="span_1">
						    <i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						   </span>
					       <h5>Seller</h5>
					   </div>
                      </div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                </div>
   </div>
   
  </div>
 </div>
</section>

<section id="about_home">
 <div class="container">
  <div class="row">
   <div class="about_home_1 clearfix">
    <div class="col-sm-3">
	  <div class="about_home_1i clearfix">
	   <span class="span_1"><i class="fa fa-home col_1"></i></span>
	   <h3 class="mgt">350 <br><span class="span_2">Sold Houses</span></h3>
	  </div>
	</div>
	<div class="col-sm-3">
	  <div class="about_home_1i clearfix">
	   <span class="span_1"><i class="fa fa-list col_1"></i></span>
	   <h3 class="mgt">450 <br><span class="span_2">Daily Listings</span></h3>
	  </div>
	</div>
	<div class="col-sm-3">
	  <div class="about_home_1i clearfix">
	   <span class="span_1"><i class="fa fa-users col_1"></i></span>
	   <h3 class="mgt">250 <br><span class="span_2">Expert Agents</span></h3>
	  </div>
	</div>
	<div class="col-sm-3">
	  <div class="about_home_1i clearfix">
	   <span class="span_1"><i class="fa fa-trophy col_1"></i></span>
	   <h3 class="mgt">150 <br><span class="span_2">Won Awards</span></h3>
	  </div>
	</div>
   </div>
  </div>
 </div>
</section>
<!--***********************************************************Footer****************************************************-->
<section id="footer">
	<div class="container">
		<div class="row">
			<div class="footer_1 clearfix">
				<div class="col-sm-3">
					<div class="footer_1i clearfix">
						<a class="navbar-brand" href="index.php"> <i class="fa fa-home"></i> <span> Perfect Realty</span> </a>
						<h6 class="col_3"><i class="fa fa-map-marker col"></i> 6th Floor ABC Place Waiyaki Way</h6>
						<h6 class="col_3"><i class="fa fa-phone col"></i> +254712345678</h6>
						<h6 class="col_3"><i class="fa fa-envelope col"></i> perfectrealty@gmail.com</h6>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_1i1 clearfix">
						<h4 class="col">Navigation</h4>
						<h6><a class="col_3" href="#">Home One</a> <span class="pull-right"><a class="col_3" href="#">Agents Details</a></span></h6>
						<h6><a class="col_3" href="#">Properties Right</a> <span class="pull-right"><a class="col_3" href="#">About Us</a></span></h6>
						<h6><a class="col_3" href="#">Properties List</a> <span class="pull-right"><a class="col_3" href="#">Blog Default</a></span></h6>
						<h6><a class="col_3" href="#">Properties Details</a> <span class="pull-right"><a class="col_3" href="#">Blog Details</a></span></h6>
						<h6><a class="col_3" href="#">Agents Listing</a> <span class="pull-right"><a class="col_3" href="#">Contact Us</a></span></h6>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_1i2 clearfix">
						<h4 class="col">Twitter Feeds</h4>
						<div class="footer_1i2i clearfix">
							<div class="col-sm-1 space_all">
								<span><i class="fa fa-twitter col"></i></span>
							</div>
							<div class="col-sm-11">
								<p class="mgt col_3"><a class="col" href="https://twitter.com/login">@PerfectRealty</a> The future of real estate investments!<br>
									<span class="bold col_2">about 3 days ago</span></p>
							</div>
						</div>
						<div class="footer_1i2i clearfix">
							<div class="col-sm-1 space_all">
								<span><i class="fa fa-twitter col"></i></span>
							</div>
							<div class="col-sm-11">
								<p class="mgt col_3"><a class="col" href="https://twitter.com/login">@Perfect Realty</a> How to find reliable real estate agents. <br>
									<span class="bold col_2">about 5 days ago</span></p>
							</div>
						</div>
						<div class="footer_1i2i clearfix">
							<div class="col-sm-1 space_all">
								<span><i class="fa fa-twitter col"></i></span>
							</div>
							<div class="col-sm-11">
								<p class="mgt col_3"><a class="col" href="https://twitter.com/login">@Perfect Realty</a> How to find your perfect home. <br>
									<span class="bold col_2">about 7 days ago</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer_1i3 clearfix">
						<h4 class="col">Newsletters</h4>
						<p class="col_3">Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
						<input class="form-control" placeholder="Enter Your Email" type="text">
						<h5 class="text-center"><a class="button block" href="#">SUBSCRIBE</a></h5>
					</div>
				</div>
			</div>
			<div class="footer_2 clearfix">
				<div class="col-sm-8">
					<div class="footer_2l clearfix">
						<p class="col_3">© 2022. All Rights Reserved | Perfect Realty </p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="footer_2r text-right clearfix">
						<ul class="social-network social-circle mgt">
							<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
							<li><a href="https://www.facebook.com/login/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/login" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://accounts.google.com/servicelogin" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.linkedin.com/login" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

<script type="text/javascript">
	$(document).on('click', '.number-spinner button', function () {    
	var btn = $(this),
		oldValue = btn.closest('.number-spinner').find('input').val().trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').find('input').val(newVal);
});
	</script>
	
<script>
$(document).ready(function(){

/*****Fixed Menu******/
var secondaryNav = $('.cd-secondary-nav'),
   secondaryNavTopPosition = secondaryNav.offset().top;
	$(window).on('scroll', function(){
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			secondaryNav.addClass('is-fixed');	
		} else {
			secondaryNav.removeClass('is-fixed');
		}
	});	
	
});
</script>
</body>
 
</html>
