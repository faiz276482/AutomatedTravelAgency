<?php
	session_start();
	#check if session (user) is running or not
	if(!isset($_SESSION['user']))
	{	
		#if not redirect it back to login page
		header('location:Login.php?Loginagain=true');
	}
?>

<!doctype html>
	
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Home
		</title>
		
		
	</head>
	<body>
		<?php
			echo "Welcome Mr/Mrs. ".$_SESSION['user']['Name'];
		?>
		<a href="logout.php">Logout</a>

	
	</body>
</html>