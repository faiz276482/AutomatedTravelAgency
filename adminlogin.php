<!DOCTYPE html>
<?php include("config.php");?>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/form-control.css" > 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>

	<div class="bootstrap-iso">
		<div class="container-fluid">
		<br><br>
			<div class="row" align="center">
				<div class="container center_div" >
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
										<button class="btn btn-primary " name="Login" type="submit" name="Login">Login</button>
										<button class="btn btn-primary " name="reset" type="reset">Reset</button>
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
								
								$verify = mysqli_query($con,"SELECT * from admin Where Email='$email' and password='$pwd';") or  die(mysqli_error($con));
								
								#check if user is valid or not
								if(mysqli_num_rows($verify)==1)
								{
									#start session
									session_start();
									
									#store user data in server temporary cache i.e. SESSION
									$_SESSION['user']=NULL;
									$userData = mysqli_fetch_array($verify);
									$_SESSION['user']= $userData;
									
									#redirect the user to homepage
									header('location:adminpanel.php');
									exit;
								
									
								}
								else
								{
									//echo "<p style='color:red;'> Inavalid email or password</p>";
									header("location:adminlogin.php?Loginagain=true");
									
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