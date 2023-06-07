<?php session_start(); ?>
<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN LOGIN</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<?php
	$con=mysqli_connect("localhost","root","","project");
	if(!$con)
	{
		print("Not connected");
	}
	$usm=$_SESSION['usr'];
	$dp=$_REQUEST['dp'];
	$ht=$_REQUEST['ht'];
	$as=$_REQUEST['as'];
	$lb=$_REQUEST['lb'];

	$ad=mysqli_query($con,"select * from remainingdues where username='$usm'");
	while($rd=mysqli_fetch_array($ad))
	{
		$d=$rd['department']-$dp;
		$h=$rd['hostel']-$ht;
		$a=$rd['accountsection']-$as;
		$l=$rd['library']-$lb;
	}
	$up1=mysqli_query($con,"update clearancedues set department='$d', hostel='$h', accountsection='$a', library='$l' where username='$usm'");
	$up2=mysqli_query($con,"update remainingdues set department='$d', hostel='$h', accountsection='$a', library='$l' where username='$usm'");
	if($up1>=1 && $up2>=1)
	{
		$_SESSION['usr2']=$usm;
		include("5.php");
	?>
		<script>alert("Profile Updated Sucessfully.");</script>
	<?php
	}

	?>
	}

</body>
</html>