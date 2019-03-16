<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Car data</title>
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

<?php
include ('config.php');
#prepare sql
$sql= "SELECT * FROM car_driver";
//execute query
$execute = mysqli_query($con,$sql) or die(mysqli_error($con));
//check for rows
if(mysqli_num_rows($execute)>0){
				#echo "No of record found:".mysqli_num_rows($execute);
			}
			else
			{
				echo "no data found";
			}
?>
			

							
							
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
				
			  </div>
			</nav>
		</div>
	</div>

	<div class="bootstrap-iso">
		<div class="container-fluid">
		<br><br>
			<div class="row" align="center">
				<div class="container center_div" >
				
					<br>
					<!--<div align="center">
						<span>
							<div class="">
							  <a href="signup.php"  class="btn btn-danger">SignUp</a>
							  <a href="Login.php" class="btn btn-info">LogIn</a>
							 
							</div>
						</span>
					</div>-->
					<!-- Table code begins -->
						

								<table class="table table-bordered" border="1" style="color:white; background-color:black;opacity:0.8; filter:alpha(opacity:90);">
				<thead>
					<tr>
						
						<th>Car Name</th>
						<th>Driver Name</th>
						<th>Email</th>
						<th>Phone</th>
                        <th>Registration number</th>
                        <th>Working</th>
                        <th>Fire</th>
                        <th>Update</th>
					</tr>
				</thead>
				<tbody>
                <?php
							while($row=mysqli_fetch_array($execute))
							{?>
								<tr>
                                 
                                <td><?php echo $row['carName']?></td>
                                <td><?php echo $row['driverName']?></td>
                                <td><?php echo $row['Email']?></td>
                                <td><?php echo $row['Phone']?></td>
                                <td><?php echo $row['regno']?></td>
                                <td><?php echo $row['Working']?></td>
                                
								<td><button class="btn btn-danger " name="k" type="submit" Value="Update"><a href="delete.php?id=<?php echo $row['id']?>" style="text-decoration: none;">Fire</a></button></td>
                                    
								<td><button class="btn btn " name="k" type="submit" Value="Update"><a href="driverdetails1.php?id=<?php echo $row['id']?>" style="text-decoration: none;">Update</a></button></td>
                                    
								</tr>	
							<?php } ?>
                            </tbody>
                            </table>
								
								<?php
									 if(isset($_GET['done']))
										{
											echo "<br><div class='alert alert-success'>
													  <strong>Saved Successfully</strong>
													</div>";
										}
									?>
									
						
						<!-- Table code ends --> 
					<br>
				
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
								
