<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prop Find</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/listing.css" rel="stylesheet">
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
                            <!--	  <li><i class="fa fa-phone"></i> Tel: +254712345678</li>-->
                            <!--	  <li><i class="fa fa-map-marker"></i>   6th Floor ABC Place, Waiyaki way</li>-->
                            <!--	  <li><i class="fa fa-envelope-o"></i>  perfectrealty@gmail.com</li>-->
                            <li><a class="col" href="https://www.facebook.com/home.php"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="col" href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="col" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="top_1r pull-right clearfix">
                        <ul>
                            <li><a class="m_tag button mgt" href="log_in.php"><i class="fa fa-user"></i>  Log In</a></li>
                            <li><a class="m_tag button mgt" href="register.php"><i class="fa fa-sign-in"></i>  Sign Up</a></li>
                            <li><a class="m_tag button mgt" href="logout.php">Logout</a></li>
                            <!--	  <li><a class="col" href="https://www.facebook.com/home.php"><i class="fa fa-facebook"></i></a></li>-->
                            <!--	  <li><a class="col" href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>-->
                            <!--	  <li><a class="col" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
				<a class="navbar-brand" href="index.php"> <i class="fa fa-home"></i> <span> Prop Find</span> </a>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav nav_1">
				<li><a class="m_tag" href="index.php">Home</a></li>
				<li class="dropdown">
					  <a class="m_tag active_tab" href="detail.php" data-toggle="dropdown" role="button" aria-expanded="false">Property<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="listing.php">Property Listing</a></li>
						<li><a class="border_none" href="detail.php">Property Detail</a></li>
					  </ul>
                    </li>
				
				    <li class="dropdown">
					  <a class="m_tag" href="detail.php" data-toggle="dropdown" role="button" aria-expanded="false">Agent<span class="caret"></span></a>
					  <ul class="dropdown-menu drop_3" role="menu">
						<li><a href="agent.php">Agent</a></li>
						<li><a class="border_none" href="agent_detail.php">Agent Detail</a></li>
					  </ul>
                    </li>
<!--					<li class="dropdown">-->
<!--					  <a class="m_tag" href="detail.html" data-toggle="dropdown" role="button" aria-expanded="false">Agencies<span class="caret"></span></a>-->
<!--					  <ul class="dropdown-menu drop_3" role="menu">-->
<!--						<li><a href="agency.html">Agencies</a></li>-->
<!--						<li><a class="border_none" href="agency_detail.html">Agencies Detail</a></li>-->
<!--					  </ul>-->
<!--                    </li>-->
<!--				  <li class="dropdown">-->
<!--					  <a class="m_tag" href="detail.html" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>-->
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
	
<section id="center" class="center_list clearfix">
 <div class="container">
  <div class="row">
   <div class="center_list_1 clearfix">
    <div class="col-sm-9">
	 <div class="center_list_1l clearfix">
	  <div class="center_list_1li clearfix">
	   <h5 class="mgt"><a href="detail.php">Home</a>  /  Grid View</h5>
	   <h3>Grid View</h3>
	  </div><br>
	  <div class="feature_2 clearfix">
		<div class="col-sm-6 space_left">
						 <div class="feature_2im clearfix">
								<div class="feature_2im1 clearfix">
							 <a href="detail.php"><img src="img/s1.jpg" class="iw" alt="abc"></a>
							</div>
								<div class="feature_2im2 clearfix">
								 <h6 class="mgt"><a class="bg_1" href="detail.php">Featured</a></h6>
								 <h6 class="pull-right mgt"><a class="bg_2" href="detail.php">For Sale</a></h6>
								</div>
								<div class="feature_2im4 clearfix">
								 <div class="col-sm-6 space_left">
								   <h6><a class="bg_3" href="detail.php">Family Home</a></h6>
								 </div>
								 <div class="col-sm-6 feature_2im4r space_right">
								   <ul class="mgt">
									<li><a href="detail.php"><i class="fa fa-link"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-video-camera"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-photo"></i></a></li>
								   </ul>
								 </div>
								</div>
						 </div>
						 <div class="feature_2m_last clearfix">
							 <h4 class="mgt bold"><a href="#">5 Bedroom Townhouse</a></h4>
							 <p><i class="fa fa-map-marker"></i> Community street Kileleshwa</p><br>
							 <h6><i class="fa fa-hotel col_1"></i> 5 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
							 <h6><i class="fa fa-object-group col_1"></i> 1000 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
							 <h5 class="bold"><a href="#">Ksh 15,500,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
							 <div class="feature_2m_last_i clearfix">
								 <h6><a href="#"><i class="fa fa-user"></i> Edgar Britson <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
						  </div>
						 </div>
						</div>
		<div class="col-sm-6 space_left">
						 <div class="feature_2im clearfix">
								<div class="feature_2im1 clearfix">
							 <a href="detail.php"><img src="img/l1.jpg" class="iw" alt="abc"></a>
							</div>
								<div class="feature_2im2 clearfix">
								 <h6 class="mgt"><a class="bg_1" href="detail.php">Featured</a></h6>
								 <h6 class="pull-right mgt"><a class="bg_4" href="detail.php">For Rent</a></h6>
								</div>
								<div class="feature_2im4 clearfix">
								 <div class="col-sm-6 space_left">
								   <h6><a class="bg_3" href="detail.php">Family Home</a></h6>
								 </div>
								 <div class="col-sm-6 feature_2im4r space_right">
								   <ul class="mgt">
									<li><a href="detail.php"><i class="fa fa-link"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-video-camera"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-photo"></i></a></li>
								   </ul>
								 </div>
								</div>
						 </div>
						 <div class="feature_2m_last clearfix">
							 <h4 class="mgt bold"><a href="#">3 Bedroom</a></h4>
							 <p><i class="fa fa-map-marker"></i> Lusaka Rd Lavington</p><br>
							 <h6><i class="fa fa-hotel col_1"></i> 3 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
							 <h6><i class="fa fa-object-group col_1"></i> 620 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
							 <h5 class="bold"><a href="#">Ksh 130,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
							 <div class="feature_2m_last_i clearfix">
								 <h6><a href="#"><i class="fa fa-user"></i> Nate Guan <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
							 </div>
						 </div>
						</div>
      </div>
      <div class="feature_2 clearfix">
		<div class="col-sm-6 space_left">
						 <div class="feature_2im clearfix">
								<div class="feature_2im1 clearfix">
							 <a href="detail.php"><img src="img/k1.jpg" class="iw" alt="abc"></a>
							</div>
								<div class="feature_2im2 clearfix">
								 <h6 class="mgt"><a class="bg_1" href="detail.php">Featured</a></h6>
								 <h6 class="pull-right mgt"><a class="bg_2" href="detail.php">For Sale</a></h6>
								</div>
								<div class="feature_2im4 clearfix">
								 <div class="col-sm-6 space_left">
								   <h6><a class="bg_3" href="detail.php">Family Home</a></h6>
								 </div>
								 <div class="col-sm-6 feature_2im4r space_right">
								   <ul class="mgt">
									<li><a href="detail.php"><i class="fa fa-link"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-video-camera"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-photo"></i></a></li>
								   </ul>
								 </div>
								</div>
						 </div>
						 <div class="feature_2m_last clearfix">
							 <h4 class="mgt bold"><a href="#">5bedroom spacious house</a></h4>
							 <p><i class="fa fa-map-marker"></i> Kilimani</p><br>
							 <h6><i class="fa fa-hotel col_1"></i> 5 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
							 <h6><i class="fa fa-object-group col_1"></i> 998 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
							 <h5 class="bold"><a href="#">Ksh 78,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
							 <div class="feature_2m_last_i clearfix">
								 <h6><a href="#"><i class="fa fa-user"></i> Frashia Queen <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
							 </div>
						 </div>
						</div>
		<div class="col-sm-6 space_left">
						 <div class="feature_2im clearfix">
								<div class="feature_2im1 clearfix">
							 <a href="detail.php"><img src="img/st2.jpg" class="iw" alt="abc"></a>
							</div>
								<div class="feature_2im2 clearfix">
								 <h6 class="mgt"><a class="bg_1" href="detail.php">Featured</a></h6>
								 <h6 class="pull-right mgt"><a class="bg_4" href="detail.php">For Sale</a></h6>
								</div>
								<div class="feature_2im4 clearfix">
								 <div class="col-sm-6 space_left">
								   <h6><a class="bg_3" href="detail.php">Family Home</a></h6>
								 </div>
								 <div class="col-sm-6 feature_2im4r space_right">
								   <ul class="mgt">
									<li><a href="detail.php"><i class="fa fa-link"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-video-camera"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-photo"></i></a></li>
								   </ul>
								 </div>
								</div>
						 </div>
						 <div class="feature_2m_last clearfix">
							 <h4 class="mgt bold"><a href="#">5bedroom spacious house</a></h4>
							 <p><i class="fa fa-map-marker"></i> Kilimani</p><br>
							 <h6><i class="fa fa-hotel col_1"></i> 5 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
							 <h6><i class="fa fa-object-group col_1"></i> 998 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
							 <h5 class="bold"><a href="#">Ksh 78,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
							 <div class="feature_2m_last_i clearfix">
								 <h6><a href="#"><i class="fa fa-user"></i> Frashia Queen <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
							 </div>
						 </div>
						</div>
      </div>
	  <div class="feature_2 clearfix">
		<div class="col-sm-6 space_left">
						 <div class="feature_2im clearfix">
								<div class="feature_2im1 clearfix">
							 <a href="detail.php"><img src="img/st1.jpg" class="iw" alt="abc"></a>
							</div>
								<div class="feature_2im2 clearfix">
								 <h6 class="mgt"><a class="bg_1" href="detail.php">Featured</a></h6>
								 <h6 class="pull-right mgt"><a class="bg_2" href="detail.php">For Sale</a></h6>
								</div>
								<div class="feature_2im4 clearfix">
								 <div class="col-sm-6 space_left">
								   <h6><a class="bg_3" href="detail.php">Commercial Building</a></h6>
								 </div>
								 <div class="col-sm-6 feature_2im4r space_right">
								   <ul class="mgt">
									<li><a href="detail.php"><i class="fa fa-link"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-video-camera"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-photo"></i></a></li>
								   </ul>
								 </div>
								</div>
						 </div>
						 <div class="feature_2m_last clearfix">
						  <h4 class="mgt bold"><a href="#">6 storey Commercial Building</a></h4>
						  <p><i class="fa fa-map-marker"></i> Parklands</p><br>
						  <h6><i class="fa fa-hotel col_1"></i> 90 Units <span class="pull-right"><i class="fa fa-building-o col_1"></i> 4 conferece halls</span></h6>
						  <h6><i class="fa fa-object-group col_1"></i> 620 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 40 cars Garage capacity</span></h6><br>
						  <h5 class="bold"><a href="detail.php">Ksh 131,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
						  <div class="feature_2m_last_i clearfix">
							<h6><a href="detail.php"><i class="fa fa-user"></i> Fay K <span class="pull-right"><i class="fa fa-calendar"></i> 2 months ago</span></a></h6>
						  </div>
						 </div>
						</div>
		<div class="col-sm-6 space_left">
						 <div class="feature_2im clearfix">
								<div class="feature_2im1 clearfix">
							 <a href="detail.php"><img src="img/st3.jpg" class="iw" alt="abc"></a>
							</div>
								<div class="feature_2im2 clearfix">
								 <h6 class="mgt"><a class="bg_1" href="detail.php">Featured</a></h6>
								 <h6 class="pull-right mgt"><a class="bg_4" href="detail.php">For Sale</a></h6>
								</div>
								<div class="feature_2im4 clearfix">
								 <div class="col-sm-6 space_left">
								   <h6><a class="bg_3" href="detail.php">Family Home</a></h6>
								 </div>
								 <div class="col-sm-6 feature_2im4r space_right">
								   <ul class="mgt">
									<li><a href="detail.php"><i class="fa fa-link"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-video-camera"></i></a></li>
									<li><a href="detail.php"><i class="fa fa-photo"></i></a></li>
								   </ul>
								 </div>
								</div>
						 </div>
						 <div class="feature_2m_last clearfix">
						  <h4 class="mgt bold"><a href="detail.php">4 bedroom Townhouse</a></h4>
						  <p><i class="fa fa-map-marker"></i> Lavington</p><br>
						  <h6><i class="fa fa-hotel col_1"></i> 4 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
						  <h6><i class="fa fa-object-group col_1"></i> 1620 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
						  <h5 class="bold"><a href="detail.php">Ksh 160,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
						  <div class="feature_2m_last_i clearfix">
							<h6><a href="detail.php"><i class="fa fa-user"></i> Dwayne Craft <span class="pull-right"><i class="fa fa-calendar"></i> 2 months ago</span></a></h6>
						  </div>
						 </div>
						</div>
      </div>
	  <div class="product_1_last text-center clearfix">
	  <div class="col-sm-12">
	   <ul>
	    <li><a href="detail.php"><i class="fa fa-chevron-left"></i></a></li>
	    <li class="act"><a href="detail.php">1</a></li>
		<li><a href="detail.php">2</a></li>
		<li><a href="detail.php">3</a></li>
		<li><a href="detail.php">4</a></li>
		<li><a href="detail.php">5</a></li>
		<li><a href="detail.php">6</a></li>
		<li><a href="detail.php"><i class="fa fa-chevron-right"></i></a></li>
	   </ul>
	  </div>
	 </div>
	 </div>
	</div>
	<div class="col-sm-3 space_left">
	  <div class="center_list_1r clearfix"> 
	    <h4 class="mgt head_1">Search Property</h4>
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
		<option value="">$54,000 - $130,000</option>
		<option value="family-house">$44,000 - $140,000</option>
		<option value="apartment">$74,000 - $150,000</option>
		<option value="condo">$84,000 - $160,000</option>
		<option value="condo">$94,000 - $170,000</option>
		<option value="condo">$44,000 - $120,000</option>
   </select>
   <div class="center_main_1ri clearfix">
    <div class="col-sm-6 space_left">
	 <h5 class="col">Beds</h5>
	 <select class="form-control" name="beds" id="beds">
		<option value="">Any</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
     </select>
	</div>
	<div class="col-sm-6 space_right">
	 <h5 class="col">Baths</h5>
	 <select class="form-control" name="beds" id="beds1">
		<option value="">Any</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
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
   <h5 class="text-center"><a class="button_1 block" href="detail.php">SEARCH PROPERTY</a></h5>
   </div>
	  </div><br>
		<div class="center_list_1r1 clearfix">
			<h4 class="mgt">Recent Properties</h4>
			<hr>
			<div class="center_list_1r1i clearfix">
				<a href="#"><img src="img/re1.jpg" width="320px" height="280px" alt="abc"></a>
				<h5 class="bold mgt"><a href="#">Family Home</a></h5>
				<h6>Ksh 70,000</h6>
			</div>
			<div class="center_list_1r1i clearfix">
				<a href="#"><img src="img/re2.jpg" width="320px" height="280px" alt="abc"></a>
				<h5 class="bold mgt"><a href="#">Apartment</a></h5>
				<h6>Ksh 80,000</h6>
			</div>
			<div class="center_list_1r1i clearfix">
				<a href="#"><img src="img/re4.jpg" width="320px" height="280px" alt="abc"></a>
				<h5 class="bold mgt"><a href="#">Apartment</a></h5>
				<h6>Ksh 32,000,000</h6>
			</div>
		</div>
		<div class="center_detail_1ri2 clearfix">
			<h4 class="mgt"> Feature Properties</h4>
			<hr>
			<div class="feature_2 clearfix">
				<div id="carousel-example" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-12 space_all">
								<div class="feature_2im clearfix">
									<div class="feature_2im1 clearfix">
										<a href="#"><img src="img/kar1.png" class="iw" alt="abc"></a>
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
									<h4 class="mgt bold"><a href="#">4 Bedroom Townhouse</a></h4>
									<p><i class="fa fa-map-marker"></i> Karen</p><br>
									<h6><i class="fa fa-hotel col_1"></i> 4 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
									<h6><i class="fa fa-object-group col_1"></i> 1000 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
									<h5 class="bold"><a href="#">Ksh 65,000,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
									<div class="feature_2m_last_i clearfix">
										<h6><a href="#"><i class="fa fa-user"></i> Lisa K <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-sm-12 space_all">
								<div class="feature_2im clearfix">
									<div class="feature_2im1 clearfix">
										<a href="#"><img src="img/ap1.jpg" class="iw" alt="abc"></a>
									</div>
									<div class="feature_2im2 clearfix">
										<h6 class="mgt"><a class="bg_1" href="#">Featured</a></h6>
										<h6 class="pull-right mgt"><a class="bg_2" href="#">For Rent</a></h6>
									</div>
									<div class="feature_2im4 clearfix">
										<div class="col-sm-6 space_left">
											<h6><a class="bg_3" href="#">Family Townhouse</a></h6>
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
									<h4 class="mgt bold"><a href="#">2 Bedroom All En-Ssuite Apartment</a></h4>
									<p><i class="fa fa-map-marker"></i> Fst Street Kileleshwa</p><br>
									<h6><i class="fa fa-hotel col_1"></i> 2 Bedrooms <span class="pull-right"><i class="fa fa-building-o col_1"></i> 3 Bathrooms</span></h6>
									<h6><i class="fa fa-object-group col_1"></i> 820 sq ft <span class="pull-right"><i class="fa fa-gear col_1"></i> 2 Garages</span></h6><br>
									<h5 class="bold"><a href="#">Ksh 75,000 <span class="pull-right"><i class="fa fa-exchange"></i> <i class="fa fa-share-alt"></i> <i class="fa fa-heart-o"></i></span></a></h5>
									<div class="feature_2m_last_i clearfix">
										<h6><a href="#"><i class="fa fa-user"></i> Epha Wilson <span class="pull-right"><i class="fa fa-calendar"></i> 3 months ago</span></a></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="feature_2_last text-center clearfix">
					<div class="col-sm-12">
						<!-- Controls -->
						<div class="controls">
							<a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example" data-slide="next"></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	  <div class="center_list_1r1 clearfix">
	    <h4 class="head_1 mgt">Popular Tags</h4>
        <ul>
		 <li><a href="detail.php">House</a></li>
		 <li><a href="detail.php">Real Home</a></li>
		 <li><a href="detail.php">Baths</a></li>
		 <li><a href="detail.php">Beds</a></li>
		 <li><a href="detail.php">Garages</a></li>
		 <li><a href="detail.php">Family</a></li>
		 <li><a href="detail.php">Real Estates</a></li>
		 <li><a href="detail.php">Properties</a></li>
		 <li><a href="detail.php">Location</a></li>
		 <li><a href="detail.php">Price</a></li>
		</ul>
	  </div>
	</div>
   </div>
  </div>
 </div>
</section>
<!--*********************************************************** Footer ****************************************************-->
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
</body>
 
</html>
