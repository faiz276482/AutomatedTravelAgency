<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
include('config.php');
$id=$_POST['id'];
$carname=$_POST['cn'];
$drivername=$_POST['dn'];
$email=$_POST['e'];
$phone=$_POST['p'];
$regno=$_POST['reg'];
$sql="UPDATE car_driver SET carName='$carname',driverName='$drivername',Email='$email',Phone='$phone',regno='$regno' WHERE id='$id'";
$exec= mysqli_query($con,$sql) or die(mysqli_error($con));
if($exec==1)
header('location:driverdetails1.php?done=true&id='.$id);
else 
echo 'Data not saved';
}
else
echo 'Forbidden access';
?>