<?php
if($_SERVER['REQUEST_METHOD'] ==="GET"){
	#CONNECTION
	include('config.php');
	$id=$_GET['id'];
	#delete record by id
	$statement= "DELETE FROM car_driver WHERE id='$id'";
	$execute_statement= mysqli_query($con,$statement) or die(mysqli_error($con));
	if ($execute_statement ==1){
		?><script>
		alert('Data delete success');
		window.location.href = "view.php";
		</script><?php
	}
}?>
        
	