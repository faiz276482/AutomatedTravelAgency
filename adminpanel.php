<?php include("config.php");?>

<!DOCTYPE html>

<html>
<head>
<title>Add New Driver</title>
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
<!--<form action="Data.php" method="post">
<table>
  <tr>
    <td>Car Name:</td>
    <td><input type="text" name="cn"></td>
   </tr>
   <tr>
   <td>Driver's Name:</td>
   <td><input type="text" name="dn"></td>
   <tr>
    <td>Email:</td>
    <td><input type="email" name="e"></td>
   </tr>
   <tr>
    <td>Phone:</td>
    <td><input type="text" name="p"></td>
   </tr>
   <tr>
    <td>Registration Number:</td>
    <td><input type="text" name="reg"></td>
   </tr>
   <tr>
    <td><input type="submit" name="k" value="Update Details"></td>
   </tr>
</table>
</form>-->



	<div class="bootstrap-iso">
		<div class="">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="Adminpanel.php">Admin Panel</a>
				</div>
				<ul class="nav navbar-nav">
				  <li class="active" ><a href="AdminPanel.php">Home</a></li>
				 </ul>
				<!--<-?php if(isset($_SESSION['user'])){?>-->
				<ul class="nav navbar-nav">
				
				  <li><a href="newplace.php">Add Places</a></li>
				</ul>
				
				<!--<ul class="nav navbar-nav">
				
				  <li><a href="newplace1.php">Update Places</a></li>
				</ul>-->
				
				
				<ul class="nav navbar-nav">
				
				  <li ><a href="driverdetails.php">Add Driver</a></li>
				</ul>
				
				<ul class="nav navbar-nav">
				
				  <li ><a href="view.php">Update Driver</a></li>
				</ul>
				
				<ul class="nav navbar-nav">
				
				  <li ><a href="logout.php">Logout</a></li>
				</ul>
				<!--<ul class="nav navbar-nav navbar-right">
				 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings <span class=""></span></a>
					  
					
						<ul class="dropdown-menu">
						  <li><a href="profile.php">Edit Profile</a></li>
						  <li ><a href="logout.php">logout</a></li>
						  
						</ul>
					
				</li>
				</ul>-->
				<!--<-?php } else { ?>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				 </ul>
				 <ul class="nav navbar-nav navbar-right">
				  <li ><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				<-?php } ?>-->
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
					<p>
					</h3>WELCOME ADMIN: <?php echo $_SESSION['user']['Name'];?></h3>
					<br>
					You have now successfully logged in as an admin by virtue of which you have obtained the following privileges as bestowed by the creators of the website. These involve the following- 
					<br>1- Adding and removing Vehicles
					<br>2- Adding and removing Drivers
					<br>3- Adding and Removing Routes of Travel
					<br>Kindly consider the following privileges and use them according to your will in accordance to keeping with the idea of betterment of the website and our aim of providing hassle free and affordable travel.
					<br>You may now continue.

					</p>
					<br>
				</div>
				</div>
			</div>
		</div>
	</div>
	

<?php
 if(isset($_GET['done']))
	{
		echo"<p 
		style='color:green';
  background-color:lightyellow'>
		Data saved successfully</p>";
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