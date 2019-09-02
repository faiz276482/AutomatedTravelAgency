<?php include("config.php");?>

<!DOCTYPE html>
<html>
<head>
<title>Ride Now</title>
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
<script>

function validate()
{
	var source =document.getElementById('source').value;
	var destination =document.getElementById('destination').value;
	var distance= (destination-source) ;
	
	if(source == destination)
	{
		document.getElementById('dist').innerHTML=" <br><div class='alert alert-danger'> <strong>Source and destination cannot be same!</strong></div>";
	}
	else{
		document.getElementById('dist').innerHTML="";
	}

	
}



</script>

</head>

<body>

	<div class="bootstrap-iso">
		<div class="container-fluid">
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
				
				  <li class="active"><a href="ridenow.php">Ride Now</a></li>
				</ul>
				<ul class="nav navbar-nav">
				
				  <li><a href="ridelater.php">Ride Later</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings <span class=""></span></a>
					  
					
						<ul class="dropdown-menu">
						  <li><a href="#">Edit Profile</a></li>
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
		</div>
	</div>
	
			  <!--MAKE YOUR FORM IN THE DIV BELOW-->
		<div class="bootstrap-iso">
			<div class="container-fluid">
			<br><br>
				<div class="row" align="center">
					<div class="container center_div" >
						<div class="container" >
						<div class="col-md-3 col-sm-3 col-xs-8" ></div>
							<div class="col-md-6 col-sm-6 col-xs-12" style="color:white; background-color:black;opacity:0.8; filter:alpha(opacity:90); border-radius: 5px 15px; ">
								<br>
								<style>
									.personalize{
										min-height:35px;
									}
								</style>
								  <form action="billgenerate1.php" method="post" onclick="return validate()">
								  
										<label style="color:white; text-shadow: 2px 2px #000;">Source:</label><br><select required class="form-control" id="source" name="source" style="min-height:35px"> 
										
											 <option value='0'>*select source</option>
											 <?php $x = mysqli_query($con,"SELECT DISTINCT Source FROM srcdest"); 
											 if(mysqli_num_rows($x)==0){
												die("Something went wrong"); 
											 }
											 while($row=mysqli_fetch_array($x)){?>
											
											 
											  <option ><?php echo $row['Source']?></option>
											  
												 <?php } ?>
												 </select>
										<label style="color:white; text-shadow: 2px 2px #000;">Destination:</label><br><select required class="form-control personalize" id="destination" name="destination" > 
											<option value=''>*select Destination</option>
											 <?php $x = mysqli_query($con,"SELECT DISTINCT Source FROM srcdest"); 
											 if(mysqli_num_rows($x)==0){
												die("Something went wrong"); 
											 }
											 while($row=mysqli_fetch_array($x)){?>
											
											 
											  <option ><?php echo $row['Source']?></option>
											  
												 <?php } ?>
												 </select>
												 
												 <span id="dist" ></span>
												<!-- <-?php $dt =new DateTime("now",new DateTimeZone('Asia/India'));?>-->
												 
												 <!--<br><label style='color:white; text-shadow: 2px 2px #000;'>distance</label><br><input class='form-control' id='distance' name='distance'  type='text' value="<-?php echo ($_GET['source'] - $_GET['destination']); ?>"> </input>-->
										<!--<label for="Time">Time: &nbsp;&nbsp;&nbsp;</label><input class="form-control" name="time" id="time" type="time" value="<-?php echo $dt->("m/d/Y , H:i:s");?>" style="color:black;">     -->                                    
												 
												 
										<label style="color:white; text-shadow: 2px 2px #000;">Car:</label><br><select required class="form-control personalize" id="car" name="car" >
												 <option value=''>*select car</option>
											 <?php $x = mysqli_query($con,"SELECT carName FROM car_driver"); 
											 if(mysqli_num_rows($x)==0){
												die("Something went wrong"); 
											 }
											 while($row=mysqli_fetch_array($x)){?>
											
											 
											  <option><?php echo $row['carName']?></option>
											  
												 <?php } ?>
												 </select>
										<div class="form-group" align="center"> <!-- Submit button -->
											<br><br>
											<button class="btn btn-primary " name="submit" type="submit" name="bill">Check Ammount</button>
											<button class="btn btn-primary " name="submit" type="reset">Reset</button>
										</div>
							  </form>
								<br>
							</div>
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