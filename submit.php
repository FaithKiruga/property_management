  <?php
/* Attempt to connect to MySQL database */
$link = mysqli_connect('localhost', 'root', '', 'property_management');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

  // Define variables and initialize with empty values

  $property_title = $property_description = $status = $type = $rooms = $price = $area = $property_address = $city = $state = $country = $google_maps_latitude = $google_maps_longitude = $age = $bedrooms = $bathrooms
       = $name = $username = $email = $phone_no ="";
  $property_title_err = $property_description_err = $status_err = $type_err = $rooms_err = $price_err = $area_err = $property_address_err = $city_err = $state_err = $country_err = $google_maps_latitude_err = $google_maps_longitude_err = $age_err = $bedrooms_err = $bathrooms_err
      = $name_err = $username_err = $email_err = $phone_no_err ="";

  // Processing form data when form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST"){

      function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
      //validate

      if (empty($_POST["property_title"])) {
          $property_title_err = "Input required";
      } else {
          $property_title = test_input($_POST["property_title"]);
      }

      //validate

      if (empty($_POST["property_description"])) {
          $property_description_err = "Input required";
      } else {
          $property_description = test_input($_POST["property_description"]);
      }

      //validate

      if (empty($_POST["status"])) {
          $status_err = "Input required";
      } else {
          $status = test_input($_POST["status"]);
      }

      //validate

      if (empty($_POST["type"])) {
          $type_err = "Input required";
      } else {
          $type = test_input($_POST["type"]);
      }

      //validate

      if (empty($_POST["rooms"])) {
          $rooms_err = "Input required";
      } else {
          $rooms = test_input($_POST["rooms"]);
      }

      //validate

      if (empty($_POST["price"])) {
          $price_err = "Input required";
      } else {
          $price = test_input($_POST["price"]);
      }

      //validate

      if (empty($_POST["area"])) {
          $area_err = "Input required";
      } else {
          $area = test_input($_POST["area"]);
      }

      //validate
      $property_address='property_address';
      if (empty($_POST["property_address"])) {
          $property_address_err = "Input required";
      } else {
          $property_address = test_input($_POST["property_address"]);
      }

      //validate

      if (empty($_POST["city"])) {
          $city_err = "Input required";
      } else {
          $city = test_input($_POST["city"]);
      }

      //validate

      if (empty($_POST["state"])) {
          $state_err = "Input required";
      } else {
          $state = test_input($_POST["state"]);
      }

      //validate

      if (empty($_POST["country"])) {
          $country_err = "Input required";
      } else {
          $country = test_input($_POST["country"]);
      }

      //validate

      if (empty($_POST["google_maps_latitude"])) {
          $google_maps_latitude_err = "Input required";
      } else {
          $google_maps_latitude = test_input($_POST["google_maps_latitude"]);
      }

      //validate
      $google_maps_longitude='google_maps_longitude';
      if (empty($_POST["fname"])) {
          $fname_err = "Input required";
      } else {
          $fname = test_input($_POST["fname"]);
      }

      //validate

      if (empty($_POST["age"])) {
          $age_err = "Input required";
      } else {
          $age = test_input($_POST["age"]);
      }

      //validate

      if (empty($_POST["bedrooms"])) {
          $bedrooms_err = "Input required";
      } else {
          $bedrooms = test_input($_POST["bedrooms"]);
      }

      //validate

      if (empty($_POST["bathrooms"])) {
          $bathrooms_err = "Input required";
      } else {
          $bathrooms = test_input($_POST["bathrooms"]);
      }

      //validate

      if (empty($_POST["name"])) {
          $name_err = "Input required";
      } else {
          $name = test_input($_POST["name"]);
      }

      //validate
      $username='username';
      if (empty($_POST["username"])) {
          $username_err = "Input required";
      } else {
          $username = test_input($_POST["username"]);
      }

      //validate
      $email='email';
      if (empty($_POST["email"])) {
          $email_err = "Input required";
      } else {
          $email = test_input($_POST["email"]);
      }

      //validate

      if (empty($_POST["phone_no"])) {
          $phone_no_err = "Input required";
      } else {
          $phone_no = test_input($_POST["phone_no"]);
      }
  }


  $sql= mysqli_query($link, "INSERT INTO property_description (property_title,property_description,status,type,rooms,price,area,property_address,
                                  city,state,country,google_maps_latitude,google_maps_longitude,Building_age,Bedrooms,Bathrooms,
           contact_name,username,email,phone) VALUES ('$property_title','$property_description','$status',
              '$type','$rooms','$price','$area','$property_address','$city','$state','$country',
              '$google_maps_latitude','$google_maps_longitude','$age','$bedrooms','$bathrooms',
              '$name','$username','$email','$phone_no')" );

        if ($sql === TRUE) {
            // Redirect to login page
//            header("location: log_in.php");
             echo '<script>alert("Data submited successfully.")</script>';
        } else {
           echo '<script>alert("Oops! something wrong.")</script>';
        }
//    }
        // Close connection
        mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prop Find</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/submit.css" rel="stylesheet">
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
	
<section id="center" class="center_blog clearfix">
 <div class="container">
  <div class="row">
   <div class="center_blog_1 text-center clearfix">
    <div class="col-sm-12">
	 <h2 class="mgt">SUBMIT PROPERTY</h2>
	 <h5><a href="#">Home</a>  /  Submit Property</h5>
	</div>
   </div>
      <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   <div class="submit_1 clearfix">
    <h4 class="mgt col_1">Property Description And Price</h4>
	<hr>
	<h5>Property Title</h5>
	<input class="form-control" placeholder="Property Title" type="text" name="property_title">
	<h5>Property Description</h5>
	<textarea placeholder="Property Description" class="form-control form_o" name="property_description"></textarea>
	<div class="submit_1i clearfix">
	 <div class="col-sm-4 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5>Status</h5>
	    <select class="form-control" name="status">
				 <option>Select Status</option>
				 <option>Rent</option>
				 <option>Sale</option>
     </select>
	  </div>
	 </div>
	 <div class="col-sm-4 space_all">
	  <div class="submit_1i1 clearfix">
	    <h5>Type</h5>
	    <select class="form-control" name="type">
				 <option>Select Type</option>
				 <option>House</option>
				 <option>Commercial</option>
				 <option>Apartment</option>
				 <option>Garage</option>
     </select>
	  </div>
	 </div>
	 <div class="col-sm-4 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5>Rooms</h5>
	    <select class="form-control" name="rooms">
				 <option>Select Type</option>
				 <option>1</option>
				 <option>2</option>
				 <option>3</option>
				 <option>4</option>
     </select>
	  </div>
	 </div>
	</div>
	<div class="submit_1i clearfix">
	 <div class="col-sm-6 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5>Price</h5>
	    <input class="form-control" placeholder="KSH" type="text" name="price">
	  </div>
	 </div>
	 <div class="col-sm-6 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5>Area</h5>
	    <input class="form-control" placeholder="Sqft" type="text" name="area">
	  </div>
	 </div>
	</div>
   </div>
   <div class="submit_1 clearfix">
     <h4 class="mgt col_1">Property Media</h4>
	 <hr>
	 <div class="submit_1ii clearfix">
	  <span class="span_1"><i class="fa fa-cloud-upload"></i></span>
	  <h5>Click Here Or Drop Files To Upload</h5>
	 </div>
   </div>
   <div class="submit_1 clearfix">
    <h4 class="mgt col_1">Property Location</h4>
	<hr>
	<div class="submit_1i clearfix">
	 <div class="col-sm-6 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5 class="mgt">Address</h5>
	    <input class="form-control" placeholder="Enter Your Address" type="text" name="property_address">
	  </div>
	 </div>
	 <div class="col-sm-6 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5 class="mgt">City</h5>
	    <input class="form-control" placeholder="Enter Your City" type="text" name="city">
	  </div>
	 </div>
	</div>
	<div class="submit_1i clearfix">
	 <div class="col-sm-6 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5>State</h5>
	    <input class="form-control" placeholder="Enter Your State" type="text" name="state">
	  </div>
	 </div>
	 <div class="col-sm-6 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5>Country</h5>
	    <input class="form-control" placeholder="Enter Your Country" type="text" name="country">
	  </div>
	 </div>
	</div>
	<div class="submit_1i clearfix">
	 <div class="col-sm-6 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5>Google Maps Latitude</h5>
	    <input class="form-control" placeholder="Google Maps Latitude" type="text" name="google_maps_latitude">
	  </div>
	 </div>
	 <div class="col-sm-6 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5>Google Maps Longitude</h5>
	    <input class="form-control" placeholder="Google Maps Longitude" type="text" name="google_maps_longitude">
	  </div>
	 </div>
	</div>
   </div>
   <div class="submit_1 clearfix">
    <h4 class="mgt col_1">Extra Information</h4>
	<hr>
	<div class="submit_1i clearfix">
	 <div class="col-sm-4 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5 class="mgt">Building Age <span class="col_2">(Optional)</span></h5>
	    <select class="form-control" name="age">
				 <option>Select Age</option>
				 <option>0-5 Years</option>
				 <option>5-15 Years</option>
				 <option>15-30 Years</option>
				 <option>30-50 Years</option>
				 <option>50-70 Years</option>
     </select>
	  </div>
	 </div>
	 <div class="col-sm-4 space_all">
	  <div class="submit_1i1 clearfix">
	    <h5 class="mgt">Bedrooms <span class="col_2">(Optional)</span></h5>
	    <select class="form-control" name="bedrooms">
				 <option>Select Bedrooms</option>
				 <option>1</option>
				 <option>2</option>
				 <option>3</option>
				 <option>4</option>
				 <option>5</option>
				 <option>6</option>
     </select>
	  </div>
	 </div>
	 <div class="col-sm-4 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5 class="mgt">Bathrooms <span class="col_2">(Optional)</span></h5>
	    <select class="form-control" name="bathrooms">
				  <option>Select Bathrooms</option>
				 <option>1</option>
				 <option>2</option>
				 <option>3</option>
				 <option>4</option>
				 <option>5</option>
				 <option>6</option>
     </select>
	  </div>
	 </div>
	</div>
   </div>
   <div class="submit_2 clearfix">
    <h4 class="mgt col_1">Property Features</h4>
	<hr>
	<div class="submit_2i clearfix">
     <h5><input type="checkbox" name="ac"> <span class="span_1">Air Conditioning</span></h5>
	 <h5><input type="checkbox" name="pool"> <span class="span_1">Swimming Pool</span></h5>
	 <h5><input type="checkbox" name="heating"> <span class="span_1"> Central Heating</span></h5>
	 <h5><input type="checkbox" name="laundry"> <span class="span_1">Laundry Room</span></h5>
	 <h5><input type="checkbox" name="gym"> <span class="span_1">Gym</span></h5>
	 <h5><input type="checkbox" name="alarm"> <span class="span_1">Alarm</span></h5>
	 <h5><input type="checkbox" name="window"> <span class="span_1">Window Covering</span></h5>
	 <h5><input type="checkbox" name="fridge"> <span class="span_1">Refrigerator</span></h5>
	 <h5><input type="checkbox" name="cable"> <span class="span_1">TV Cable & WIFI</span></h5>
	 <h5><input type="checkbox" name="microwave"> <span class="span_1"> Microwave</span></h5>
	</div>
   </div>
   <div class="submit_1 clearfix">
    <h4 class="mgt col_1">Contact Information</h4>
	<hr>
	<div class="submit_1i clearfix">
	 <div class="col-sm-6 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5 class="mgt">Name</h5>
	    <input class="form-control" placeholder="Enter Your Name" type="text" name="name">
	  </div>
	 </div>
	 <div class="col-sm-6 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5 class="mgt">Username</h5>
	    <input class="form-control" placeholder="Enter Your Username" type="text" name="username">
	  </div>
	 </div>
	</div>
	<div class="submit_1i clearfix">
	 <div class="col-sm-6 space_left">
	  <div class="submit_1i1 clearfix">
	    <h5>Email</h5>
	    <input class="form-control" placeholder="Enter Your Email" type="text" name="email">
	  </div>
	 </div>
	 <div class="col-sm-6 space_right">
	  <div class="submit_1i1 clearfix">
	    <h5>Phone</h5>
	    <input class="form-control" placeholder="Enter Your Phone" type="text" name="phone_no">
	  </div>
	 </div>
	</div>
   </div>
   <div class="submit_3 clearfix">
<!--    <h5 class="mgt"><a class="button mgt" href="submit_property.php">Submit Property</a></h5>-->
       <h5><input type="submit" class="button mgt" href="submit_property.php"></h5>
   </div>
      </form>
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

</body>
 
</html>
