<!DOCTYPE html>
<?php include("config.php");?>
<html>
<head>
<title>Login</title>
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
						  <li><a href="#">Edit Profile</a></li>
						  <li ><a href="logout.php">logout</a></li>
						  
						</ul>
					
				</li>
				</ul>
				<?php } else { ?>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				 </ul>
				 <ul class="nav navbar-nav navbar-right">
				  <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				<?php } ?>
			  </div>
			</nav>
		</div>
	</div>

	<div class="bootstrap-iso">
		<div class="container-fluid">
		<br><br>
			<div class="row" align="center">
				<div class="container center_div" >
				<div class="col-md-3 col-sm-3 col-xs-8" ></div>
				<div class="col-md-6 col-sm-6 col-xs-12" style="color:white; background-color:black;opacity:0.8; filter:alpha(opacity:90); border-radius: 5px 15px; ">
					<br>
					<!--<div align="center">
						<span>
							<div class="">
							  <a href="signup.php"  class="btn btn-danger">SignUp</a>
							  <a href="Login.php" class="btn btn-info">LogIn</a>
							 
							</div>
						</span>
					</div>-->
					<!-- Form code begins -->
						<form method="post" action=""  >
								
								<label style="color:white; text-shadow: 2px 2px #000;">Email Id</label><br><input class="form-control" id="email" name="email" placeholder="JhonDoe@gmail.com" type="email"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Password</label><br><input class="form-control" id="pass" name="pass" placeholder="Enter password" type="password"> </input>
								<?php
									if(isset($_GET['Loginagain']))
										{
											
											echo "<br><div class='alert alert-warning'>
													  <strong>Warning! Password Mismatch</strong>
													</div>";
										}
								?>
								
								
								
									<div class="form-group"> <!-- Submit button -->
									<br><br>
										<button class="btn btn-primary " name="Login" type="submit" >Login</button>
										<button class="btn btn-primary " name="reset" type="reset">Reset</button>
										<!--<form method="get" action="adminlogin.php">
											<button class="btn btn-warning " name="adminlogin" type="submit" >Login As Admin</button>
										</form>-->
										<button class="btn btn " name="adminlogin" type="submit" ><a href="adminlogin.php" style="text-decoration:none;">Login As Admin</a></button>
									</div>
						</form>
						<!-- Form code ends --> 
					<br>
				</div>
				</div>
			</div>
		</div>
	</div>
						<?php
							if(isset($_POST['Login']))
							{
								$email=$_POST['email'];
								$pwd =$_POST['pass'];
								if(empty($_POST))
								{
									die("All fields are required");
								}
								
								#verify user
								
								$verify = mysqli_query($con,"SELECT * from user Where Email='$email' and password='$pwd'") or  die(mysqli_error($con));
								
								#check if user is valid or not
								if(mysqli_num_rows($verify)==1)
								{
									#start session
									#session_start();
									
									#store user data in server temporary cache i.e. SESSION
									$_SESSION['user']=NULL;
									$userData = mysqli_fetch_array($verify);
									$_SESSION['user']= $userData;
									
									#redirect the user to homepage
									header('location:home.php');
									exit;
								
									
								}
								else
								{
									//echo "<p style='color:red;'> Inavalid email or password</p>";
									header("location:login.php?Loginagain=true");
									
								}
								
								
							}
					
				?>
	
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