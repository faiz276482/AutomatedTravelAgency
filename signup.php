<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
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
				  <li ><a href="Home.php">Home</a></li>
				 </ul>
				 <ul class="nav navbar-nav">
				  <li ><a href="contact.php">Contact Us</a></li>
				 </ul>
				<?php if(isset($_SESSION['user'])){?>
				<ul class="nav navbar-nav">
				
				  <li><a href="ridenow.php">Ride Now</a></li>
				</ul>
				<ul class="nav navbar-nav">
				
				  <li ><a href="ridelater.php">Ride Later</a></li>
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
				  <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				 </ul>
				 <ul class="nav navbar-nav navbar-right">
				  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				<?php } ?>
			  </div>
			</nav>
		</div>
	</div>

	<div class="bootstrap-iso">
		<div class="container-fluid">
		<br><br>
			<div class="row" align="center" >
				<div class="container center_div" >
				<div class="col-md-3 col-sm-3 col-xs-8" ></div>
				<div class="col-md-6 col-sm-6 col-xs-12" style="color:white; background-color:black;opacity:0.8; filter:alpha(opacity:90); border-radius: 5px 15px; " >
				<br>
					<!--<div align="center">
						<span>
							<div class="" >
							  <a href="signup.php" class="btn btn-info">SignUp</a>
							  <a href="Login.php" class="btn btn-danger">LogIn</a>
							 
							</div>
						</span>
					</div>-->
					<!-- Form code begins -->
					
						<form method="post" action="Datasave.php" id="signup"  >
								<label style="color:white; text-shadow: 2px 2px #000;">Name</label><br><input required class="form-control" id="name" name="name" placeholder="Jhon Doe" type="text" value="<?php if(isset($_GET['name'])){ echo $_GET['name'];}?>"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Email Id</label><br><input required class="form-control" id="email" name="email" placeholder="JhonDoe@gmail.com" type="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];}?>"> </input>
								<?php 
									if(isset($_GET['not_done']))
										{
											
											echo "<br><div class='alert alert-danger'>
													  <strong>Email already exists!</strong> 
													</div>";
										}
								?>
								<label style="color:white; text-shadow: 2px 2px #000;">Phone</label><br><input required class="form-control" id="phone" name="phone" placeholder="933456268" type="text" value="<?php if(isset($_GET['phone'])){ echo $_GET['phone'];}?>"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Password</label><br><input required class="form-control" id="pass" name="pass" placeholder="Enter Password" type="password"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Confirm Password</label><br><input required class="form-control" id="cpass" name="cpass" placeholder="Re-type Password" type="password"> </input>
								<?php
									if(isset($_GET['mismatch']))
										{
											
											echo "<br><div class='alert alert-warning'>
													  <strong>Warning! Password Mismatch</strong>
													</div>";
										}
								?>
								
								
								
									<div class="form-group"> <!-- Submit button -->
									<br><br>
										<button class="btn btn-primary " name="submit" type="submit" name="signup">Signup</button>
										<button class="btn btn-primary " name="submit" type="reset">Reset</button>
									</div>
						</form>
						
						<?php
							if(isset($_GET['done']))
							{
								echo "<br><div class='alert alert-success'>
													  <strong>SignUp Successful! plz proceed to Login</strong>
										</div>";
								
							}
						?>
						<!-- Form code ends --> 
					<br>

				</div>
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