<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
include('config.php');
$source=$_POST['source'];
$destination=$_POST['destination'];
$distance=$_POST['distance'];

$sql="INSERT INTO srcdest VALUES('0','$source','$destination','$distance')";
$exec= mysqli_query($con,$sql) or die(mysqli_error($con));
if($exec==1)
header('location:newplace.php?done=true');
else 
echo 'Data not saved';
}
else
echo 'Forbidden access';
?>