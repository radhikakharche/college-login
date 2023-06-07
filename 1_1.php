<html>
<head>
	<title>ADMIN LOGIN</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","","project");
	if(!$con)
	{
		print("not connect");
	}
	$un=$_REQUEST['un'];
	$pass=$_REQUEST['pass'];
	$rs=mysqli_query($con,"select * from admin where username='$un' and password='$pass'");
	if(mysqli_num_rows($rs)>=1)
	{
		include('2.php');
	}
	else
	{
		print("Enter valid username and password");
	}
    
?>
</body>
</html>