 <?php if($_SERVER['REQUEST_METHOD']==="GET"){
	#CONNECTION CODE
	include ('config.php');
	$id=$_GET['id'];
	#prepare statement
	$statement="SELECT * FROM car_driver WHERE id='$id'";
	#execute
	$exec=mysqli_query($con,$statement) or die(mysqli_error($con));
	#user data
	$row=mysqli_fetch_array($exec);
}?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Driver details</title>
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
<!--<form action="updatedriver.php" method="post">
<table>
  <tr>
    <td>id:</td>
    <td><input type="text" name="id" value="<?php echo $row['id']?>"></td>
   </tr>
   <tr>
  <tr>
    <td>Car Name:</td>
    <td><input type="text" name="cn" value="<?php echo $row['carName']?>"></td>
   </tr>
   <tr>
   <td>Driver's Name:</td>
   <td><input type="text" name="dn" value="<?php echo $row['driverName']?>"></td>
   <tr>
    <td>Email:</td>
    <td><input type="email" name="e" value="<?php echo $row['Email']?>"></td>
   </tr>
   <tr>
    <td>Phone:</td>
    <td><input type="text" name="p" value="<?php echo $row['Phone']?>"></td>
   </tr>
   <tr>
    <td>Registration Number:</td>
    <td><input type="text" name="reg" value="<?php echo $row['regno']?>"></td>
   </tr>
   <tr>
    <td><input type="submit" name="k" value="Update Details"></td>
   </tr>
</table>
</form>
<?php
 if(isset($_GET['done']))
	{
		echo"<p 
		style='color:green';
  background-color:lightyellow'>
		Data updated successfully</p>";
	}
?>-->

	<div class="bootstrap-iso">
		<div class="">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="Adminpanel.php">Admin Panel</a>
				</div>
				<ul class="nav navbar-nav">
				  <li ><a href="AdminPanel.php">Home</a></li>
				 </ul>
				<!--<-?php if(isset($_SESSION['user'])){?>-->
				<ul class="nav navbar-nav">
				
				  <li ><a href="newplace.php">Add Places</a></li>
				</ul>
				
				<!--<ul class="nav navbar-nav">
				
				  <li><a href="newplace1.php">Update Places</a></li>
				</ul>-->
				
				<ul class="nav navbar-nav">
				
				  <li ><a href="driverdetails.php">Add Driver</a></li>
				</ul>
				
				<ul class="nav navbar-nav">
				
				  <li class="active" ><a href="view.php">Update Driver</a></li>
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
					<!--<div align="center">
						<span>
							<div class="">
							  <a href="signup.php"  class="btn btn-danger">SignUp</a>
							  <a href="Login.php" class="btn btn-info">LogIn</a>
							 
							</div>
						</span>
					</div>-->
					<!-- Form code begins -->
						<form method="post" action="updatedriver.php"  >

								<label style="color:white; text-shadow: 2px 2px #000;">Id</label><br><input required class="form-control" id="id" name="id" value="<?php echo $row['id']?>" type="number"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Car Name</label><br><input required class="form-control" id="cn" name="cn" value="<?php echo $row['carName']?>" type="text"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Driver's Name</label><br><input required class="form-control" id="dn" name="dn" value="<?php echo $row['driverName']?>" type="text"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Email</label><br><input required class="form-control" id="email" type="email" name="e" value="<?php echo $row['Email']?>"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Phone</label><br><input required class="form-control" id="p" type="text" name="p" value="<?php echo $row['Phone']?>"> </input>
								<label style="color:white; text-shadow: 2px 2px #000;">Registration Number</label><br><input required class="form-control" id="reg" type="text" name="reg" value="<?php echo $row['regno']?>"> </input>
								
								<?php
									 if(isset($_GET['done']))
										{
											echo "<br><div class='alert alert-success'>
													  <strong>Saved Successfully</strong>
													</div>";
										}
									?>
									<div class="form-group"> <!-- Submit button -->
									<br><br>
										<button class="btn btn-primary " name="k" type="submit" >Update Details</button>
										
										<!--<form method="get" action="adminlogin.php">
											<button class="btn btn-warning " name="adminlogin" type="submit" >Login As Admin</button>
										</form>-->
										
									</div>
						</form>
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