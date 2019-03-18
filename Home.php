<?php include ('config.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/form-control.css" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>

	<div class="bootstrap-iso">
		<div class="">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="Home.php">WebSiteName</a>
				</div>
				<ul class="nav navbar-nav">
				  <li class="active"><a href="Home.php">Home</a></li>
				 </ul>
				 <ul class="nav navbar-nav">
				  <li ><a href="contact.php">Contact Us</a></li>
				 </ul>
				<?php if(isset($_SESSION['user'])){?>
				<ul class="nav navbar-nav">
				
				  <li><a href="ridenow.php">Ride Now</a></li>
				</ul>
				<ul class="nav navbar-nav">
				
				  <li><a href="ridelater.php">Ride Later</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings <span class=""></span></a>
					  
					
						<ul class="dropdown-menu">
						  <li><a href="profile.php">Edit Profile</a></li>
						  <li><a href="logout.php">logout</a></li>
						  
						</ul>
					
				</li>
				</ul>
				<?php } else { ?>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				 </ul>
				 <ul class="nav navbar-nav navbar-right">
				  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				<?php } ?>
			  </div>
			</nav>
			  
			<!--<div class="container" style="color:white; background-color:black;opacity:0.5; filter:alpha(opacity:50); border-radius: 5px 15px; ">
			  <h3>Right Aligned Navbar</h3>
			  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
			</div>-->
			
			<div class="container" style="color:white; background-color:black; border-radius: 5px 15px; height:70%; width:70%; ">
			   
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" style="color:white; background-color:black; border-radius: 5px 15px;">
				  <div class="item active">
					<br>
					<img src="images\carousel\car1.jpg" alt="Los Angeles" style="width:100%;">
					<div class="centered">
					  <p class="quotation-mark">
						“
					  </p>
					  <p class="quote-text">
						<strong>Why pick us</strong> <br>When there's a vast array of other vehicle transportation and rendering servies? 
					  </p>
						
					</div>
					<br>
				  </div>

				  <div class="item">
				   <br>
					<img src="images\carousel\car2.jpg" alt="Chicago" style="width:100%;">
					<div class="centered">
					  <p class="quotation-mark">
						“
					  </p>
					  <p class="quote-text">
						Because we are the whole gamut of vehicular transportation. We provide hassle-free, enjoyable journeys at efficient prices. 
					  </p>
						
					</div>
					<br>
				  </div>
				
				  <div class="item">
				  <!--<h2>Carousel Example</h2> -->
				  <br>
					<img src="images\carousel\car3.jpg" alt="New york" style="width:100%;">
					<div class="centered">
					  <p class="quotation-mark">
						“
					  </p>
					  <p class="quote-text">
						Dozens of drivers, vehicles and routes and ranges and packages being added every single day. So where are you heading today? Book now at TripKaro.com 
					  </p>
						
					</div>
					<br>
				  </div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			</div>
		</div>
	</div>
	
	<!-- Load CDN First-->
        <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
<!--If CDN fails to load,serve up local version-->
        <script>window.jQuery || document.write('<Script src="js/jquery-3.1.0.js"><\/Script>');</script>
        
        <script src="js/script.js"></script>
		<script src="js/Backstretch.js"></script>
			<script>  $.backstretch([
				'images/templatemo-slide-1.jpg'
				, 'images/templatemo-slide-2.jpg'
				, 'images/templatemo-slide-3.jpg'
				], {duration: 3000, fade: 750});
			</script>
	

</body>

</html>
