<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		include ("config.php");
		
		$name= $_POST['name'];
		$email= $_POST['email'];
		$phone= $_POST['phone'];
		
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		
		if($pass!=$cpass)
		{
			header("location:signup.php?mismatch=true&name=$name&email=$email&phone=$phone");
			exit("");
		}
		/*
		if(!empty($_FILES['picture']['name']))
		{
			#file attributes
			$filename = $_FILES['picture']['name'];
			
			$filesize = $_FILES['picture']['name'];
			
			$filetype = $_FILES['picture']['name'];
			
			#server directory where the file will ge saved
			
			#create a directory first
			if(!file_exists("NSEC"));
			{
				mkdir("NSEC");
				
			}
			
			#set server pathinfo
			
			$serverpath= "NSEC/".rand(000,999).$filename;
			
			#file Upload
			
			$tmp_file=$_FILES['picture']['tmp_name'];
			
			#move the tmp file
			$move= move_uploaded_file($tmp_file,$serverpath) or die($_FILES['picture']['error']);
			
		}
		else{
			$serverpath=$path;
		}*/
		
		#prepare sql statement
		$get_email="SELECT `Email` FROM `user` WHERE `Email`='$email'";
		
		$exec = mysqli_query($con,$get_email);
		if(mysqli_num_rows($exec)>0)
		{
			
			
			header("location:signup.php?not_done=true&name=$name&email=$email&phone=$phone");
			echo "data already exists";
		}
		else 
		{
			
			
			$sql ="INSERT INTO user VALUES('0','$name','$email','$phone','$pass')";
		
			$exec =mysqli_query($con,$sql) or die(mysqli_error($con));
			
			if($exec ==1)
			{
				header('location:signup.php?done=true');
			}
			
			else 
			{
				echo "data not saved";
			}
		}
		
		
		
	}
	else
	{
		echo "Forbidden access";
	}
?>