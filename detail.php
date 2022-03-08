<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfect Realty</title>
      <link rel="icon" href="img/favicon.ico">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/detail.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="js/codebase/dhtmlxcalendar.css"/>
	<script src="js/codebase/dhtmlxcalendar.js"></script>
	<style>
		#calendar,
		#calendar2,
		#calendar3 {
			border: 1px solid #dfdfdf;
			font-family: Roboto, Arial, Helvetica;
			font-size: 14px;
			color: #404040;
		}
	</style>
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["cal_1","cal_2", "cal_3"]);
		}
	</script>
  </head>
  
<body onLoad="doOnLoad();">
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
				<a class="navbar-brand" href="index.php"> <i class="fa fa-home"></i> <span> Perfect Realty</span> </a>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav nav_1">
				<li><a class="m_tag" href="index.php">Home</a></li>
				<li class="dropdown">
					  <a class="m_tag active_tab" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Property<span class="caret"></span></a>
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
	
<section id="center" class="center_detail clearfix">
 <div class="container">
  <div class="row">
   <div class="center_detail_1 clearfix">
     <div class="col-sm-8">
	  <div class="center_detail_1l clearfix">
	   <div class="center_detail_1li clearfix">
	    <h3 class="mgt">5 Bedroom House <span class="span_1">For Sale</span> <span class="span_2 pull-right">Ksh 200,000,000</span></h3>
		<h5>Eliud Street Runda</h5>
	   </div>
	   <div class="center_detail_1li1 clearfix">
        <h4 class="mgt head_1">Gallery</h4>
		<div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-sm-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="img/R1.jpg" class="iw" alt="abc"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="img/R2.jpg" class="iw" alt="abc"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="img/R3.jpg" class="iw" alt="abc"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="img/R4.jpg" class="iw" alt="abc"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="img/R5.jpg" class="iw" alt="abc"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="img/R6.jpg" class="iw" alt="abc"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-sm" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="img/R1.jpg" class="iw" alt="abc"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="img/R2.jpg" class="iw" alt="abc"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="img/R3.jpg" class="iw" alt="abc"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="img/R4.jpg" class="iw" alt="abc"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="img/R5.jpg" class="iw" alt="abc"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="img/R6.jpg" class="iw" alt="abc"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
	   </div>
	   <div class="center_detail_1li1 clearfix">
        <h4 class="mgt head_1">Description</h4><br><br>
		   <p>
		   <h5>Eliud Mathu Street</h5><br>
			  <p> 5 bedroom all en-suite double-storey standalone house sitting on a 0.6-acre plot</p><br>

			  <h5> Ground floor</h5><br>
		   <ul>
			   <li>Entrance hall</li>
			   <li>Bright, spacious lounge with a fireplace and a veranda that opens to the backyard garden</li>
			   <li>Modern fitted kitchen with a pantry</li>
			   <li>Separate dining area</li>
			   <li>Guest bedroom with in-built wardrobes and en-suite bathroom</li>
			   <li>Study/office</li>
			   <li> Guest toilet</li>
		   </ul>

			  <h5> Level 1</h5>
			<ul>
				<li>Master bedroom with walk-in closet and en-suite bathroom</li>
				<li>Third, fourth and fifth bedrooms with in-built wardrobes and en-suite bathrooms</li>
				<li>Family/Tv room</li>
			</ul>

		   <h5>Others include</h5>
			<ul>
				<li> Staff accommodation for 3</li>
				<li> Open garage for 2</li>
				<li> Parking</li>
				<li>Garden</li>
				<li>Perimeter wall with electric fence</li>
			</ul>

		   </p>

	   </div>
	   <div class="center_detail_1li2 clearfix">
        <h4 class="mgt head_1">Property Details</h4><br><br>
         <div class="center_detail_1li2i clearfix">
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Property ID:</span> U654683</h6>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Property Type:</span> House</h6>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Property Status:</span> On Sale</h6>
		  </div>
		 </div>
		 <div class="center_detail_1li2i clearfix">
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Property Price:</span> Ksh 200,000,000</h6>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Rooms:</span> 8</h6>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Bedrooms:</span> 5</h6>
		  </div>
		 </div>
		 <div class="center_detail_1li2i clearfix">
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Bath:</span> 5</h6>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Garages:</span> 2</h6>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h6><span class="bold">Year Built:</span> 16/8/2020</h6>
		  </div>
		 </div><br><br>
		 <h4 class="mgt head_1">Amenities</h4><br><br>
		 <div class="center_detail_1li2i clearfix">
		  <div class="col-sm-4 space_left">
		   <h5><i class="fa fa-check-square col_1"></i> Air Cond</h5>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h5><i class="fa fa-check-square col_1"></i> Balcony</h5>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h5><i class="fa fa-check-square col_1"></i> Internet</h5>
		  </div>
		 </div>
		 <div class="center_detail_1li2i clearfix">
		  <div class="col-sm-4 space_left">
		   <h5><i class="fa fa-check-square col_1"></i> Garden</h5>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h5><i class="fa fa-check-square col_1"></i> Perimeter Wall with electric fence</h5>
		  </div>
		  <div class="col-sm-4 space_left">
		   <h5><i class="fa fa-check-square col_1"></i> Cable TV</h5>
		  </div>
		 </div>
		 <div class="center_detail_1li2i clearfix">
		  <div class="col-sm-4 space_left">
		   <h5><i class="fa fa-check-square col_1"></i> Parking</h5>
		  </div>
		 </div>

	  </div>
	   <div class="center_detail_1li3 clearfix">
	      <h4 class="mgt head_1">What's Nearby</h4><br><br>
		  <div class="center_detail_1li3i cleafix">
		   <h5 class="bold col_1"><i class="fa fa-graduation-cap"></i> Education</h5>
		   <h6><span class="bold">Runda International school</span> (15.61 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
		   </h6>
		   <h6><span class="bold">St.Mary's pre-school</span> (9.02 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			</span>
		   </h6>
		   <h6><span class="bold">Blessings College</span> (12.21 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			</span>
		   </h6>
		  </div><br>
		  <div class="center_detail_1li3i cleafix">
		   <h5 class="bold col_1"><i class="fa fa-user-md"></i> Health & Medical</h5>
		   <h6><span class="bold">Mandarin Medical Clinic</span> (13.61 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
		   </h6>
		   <h6><span class="bold">Marry's Health center</span> (16.41 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			</span>
		   </h6>
		   <h6><span class="bold">The Runda Hospital</span> (11.68 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-half-o"></i>
			</span>
		   </h6>
		  </div><br>
		  <div class="center_detail_1li3i cleafix">
		   <h5 class="bold col_1"><i class="fa fa-car"></i> Transportation</h5>
		   <h6><span class="bold">Runda Airport</span> (14.61 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
		   </h6>
		   <h6><span class="bold">Train Station</span> (15.31 miles)
		    <span class="span_1 pull-right col_4">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			</span>
		   </h6>
		  </div>
	  </div>
	   <div class="center_detail_1li1 clearfix">
        <h4 class="mgt head_1">Location</h4><br><br><br>
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.691969639394!2d36.80948562432057!3d-1.213836685764564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17cf7af4e5a3%3A0x46ae070c58675d4b!2sRunda%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1645613571491!5m2!1sen!2ske" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	   </div>
	   <div class="center_detail_1li4 clearfix">
	    <h4 class="mgt head_1">2 Reviews</h4>
		<div class="center_detail_1li4i clearfix">
		  <div class="col-sm-2 space_left">
		   <img src="img/rev1.jpg" class="iw img-circle" alt="abc">
		  </div>
		  <div class="col-sm-10">
		   <h5 class="bold mgt col_1">Elius Dias
		    <span class="col_4 pull-right">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			</span>
			</h5>
		   <h6>May 30 2021</h6>
		   <p>I checked out the property and its in perfect shape. The interior is beautiful and so appealing. I would definitely go for it if i were to make an investment in the area.</p>
		  </div>
		</div>
		<div class="center_detail_1li4i border_none pdb clearfix">
		  <div class="col-sm-2 space_left">
		   <img src="img/rev2.jpg" class="iw img-circle" alt="abc">
		  </div>
		  <div class="col-sm-10">
		   <h5 class="bold mgt col_1">Lavender Grey
		    <span class="col_4 pull-right">
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star"></i>
			 <i class="fa fa-star-o"></i>
			</span>
			</h5>
		   <h6>December 31 2021</h6>
		   <p>A perfect family home located in a very serene environment. It is strategically positioned near all the necesssary amenities. </p>
		  </div>
		</div>
	   </div>
	   <div class="center_detail_1li5 clearfix">
	     <h4 class="mgt head_1">Add Review</h4><br><br>
		 <div class="center_detail_1li5i clearfix">
		   <div class="col-sm-8 space_left">
		    <p class="mgt">Your rating for this listing<br> 
			<span class="col_4">
			  <i class="fa fa-star-o"></i>
			  <i class="fa fa-star-o"></i>
			  <i class="fa fa-star-o"></i>
			  <i class="fa fa-star-o"></i>
			  <i class="fa fa-star-o"></i>
			</span>
			</p>
		   </div>
		   <div class="col-sm-4">
		     <h5 class="mgt text-right"><a class="button mgt" href="#">Upload Photos</a></h5>
		   </div>
		 </div><br>
		   <input class="form-control" placeholder="First Name" type="text">
		   <input class="form-control" placeholder="Last Name" type="text">
		   <input class="form-control" placeholder="Email" type="text">
		   <textarea placeholder="Review" class="form-control form_1"></textarea>
		   <h5><a class="button" href="#">Submit Review</a></h5>
	   </div>
	 </div>
   </div>
     <div class="col-sm-4">
	   <div class="center_detail_1r clearfix">
	    <div class="center_detail_1ri1 mgt clearfix">
		 <h4 class="mgt"><i class="fa fa-calendar col_1"></i> Schedule a Tour</h4>
		 <hr>
		 <div class="center_detail_1ri1i clearfix">
		  <div class="col-sm-6 space_left">
		   <input id="cal_3" placeholder="10/16/2020" class="form-control" type="text">
		  </div>
		  <div class="col-sm-6 space_left">
		   <input placeholder="12:13 am" class="form-control" type="text">
		  </div>
		 </div>
		 <div class="center_detail_1ri1i1 clearfix">
		  <div class="col-sm-6 space_left">
		   <h5>Adult</h5>
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
		  <div class="col-sm-6 space_left">
		   <h5>Children</h5>
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
		 </div><br>
		 <h5 class="text-center mgt"><a class="button block" href="#">Submit Request</a></h5>
		</div>
		<div class="center_detail_1ri1 clearfix">
		  <h4 class="mgt"> Agent Information</h4>
		  <hr>
		  <div class="center_detail_1ri1i1 clearfix">
		    <img src="img/img16.jpg" width="50%" height="50%" class="img-circle" alt="abc">
			<h5 class="bold mgt">Lisa Massa</h5>
			<h6>Agent of Property</h6>
		  </div>
		  <h6><i class="fa fa-map-marker col_1"></i> 302 K Avenue, Nairobi</h6>
		  <h6><i class="fa fa-phone col_1"></i> +254712345678</h6>
		  <h6><i class="fa fa-envelope col_1"></i> <a href="#">lisa@gmail.com</a></h6><br>
		  <h4> Request Inquiry</h4>
		  <hr>
            <form method="POST" action="request_form_to_email.php">
		  <input name="name" placeholder="Full Name" class="form-control form_1" type="text">
		  <input name="phone_no" placeholder="Phone Number" class="form-control form_1" type="text">
		  <input name="email" placeholder="Email Address" class="form-control form_1" type="text">
		  <textarea name="message" placeholder="Message" class="form-control form_2"></textarea>
            <h5><input type="submit" class="button block" href="request_form_to_email.php"></h5>
            </form>
		</div>
		<div class="center_list_1r1 clearfix">
	    <h4 class="mgt">Recent Properties</h4>
		<hr>
		<div class="center_list_1r1i clearfix">
		 <a href="#"><img src="img/re1.jpg" width="250px" height="200px" alt="abc"></a>
		 <h5 class="bold mgt"><a href="#">Family Home</a></h5>
		 <h6>Ksh 70,000</h6>
		</div>
		<div class="center_list_1r1i clearfix">
		 <a href="#"><img src="img/re2.jpg" width="250px" height="200px" alt="abc"></a>
		 <h5 class="bold mgt"><a href="#">Apartment</a></h5>
		 <h6>Ksh 80,000</h6>
		</div>
		<div class="center_list_1r1i clearfix">
		 <a href="#"><img src="img/re4.jpg" width="250px" height="200px" alt="abc"></a>
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
	    <h4 class="mgt">Popular Tags</h4>
		<hr>
        <ul>
		 <li><a href="#">House</a></li>
		 <li><a href="#">Real Home</a></li>
		 <li><a href="#">Baths</a></li>
		 <li><a href="#">Beds</a></li>
		 <li><a href="#">Garages</a></li>
		 <li><a href="#">Family</a></li>
		 <li><a href="#">Real Estates</a></li>
		 <li><a href="#">Properties</a></li>
		 <li><a href="#">Location</a></li>
		 <li><a href="#">Price</a></li>
		</ul>
	  </div>
	   </div> 
	 </div>
  </div><br>
   <div class="feature_1 clearfix">
    <div class="col-sm-12">
<!--********************************************************* SIMILAR PROPERTIES***************************************************-->
	   <h4>SIMILAR <br><span class="col_1">PROPERTIES</span></h4>
	</div>
   </div>
   <div class="feature_2 clearfix">
    <div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/s1.jpg" class="iw" alt="abc"></a>
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
	<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/l1.jpg" class="iw" alt="abc"></a>
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
	<div class="col-sm-4">
					 <div class="feature_2im clearfix">
					   	    <div class="feature_2im1 clearfix">
					     <a href="#"><img src="img/k1.jpg" class="iw" alt="abc"></a>
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
	  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
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
