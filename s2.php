<?php session_start(); ?>
<html>
<head>
	<title>STUDENT LOGIN</title>
	
</head>
<body>
	<div>
	<form method="post" action="">
	<?php
		$con=mysqli_connect("localhost","root","","project");
		if(!$con)
		{
			print("Not connected");
		}
		$un=$_REQUEST['un'];
		$pass=$_REQUEST['pass'];
		$rs=mysqli_query($con,"select * from clearancedues where username='$un' and password='$pass'");
		if(mysqli_num_rows($rs)>=1)
		{
			include('s3.php');
		}
		else
		{
			print("Enter valid username and password");
		}
		
	?>
</body>
</html>