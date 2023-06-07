
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN LOGIN</title>
	<style type="text/css">
		table
		{
			background-color: whitesmoke;
			margin-top: 100px;
		}
		.nav_bar
		{
			font-size: 45px;
			font-family: Arial Black;
		}
		a:hover
		{
			opacity: 0.9;
		}
		.update
		{
			background-color: hotpink;
			font-size: 30px;
			color: whitesmoke;
			padding: 5px;
			padding-right: 8px;
			padding-left: 8px;
		}
		.details
		{
			font-size: 25px;
		}
	</style>
</head>
<body>
	<?php
	$con=mysqli_connect("localhost","root","","project");
	if(!$con)
	{
		print("Not connected");
	}
	$usrnm=$_SESSION['usr2'];

	$t2=mysqli_query($con,"select * from totalfees");
	$cf2=mysqli_query($con,"select * from clearancedues where username='$usrnm'");
	?>

	<center><nav class="navbar fixed-top navbar-light bg-light">
		<div class="container-fluid">
			<font class="navbar-brand nav_bar">Clearance Updated Details</font>
		</div>
	</nav></center>

	<hr color="purple" size="2" width="100%">

		<form class="details" action="2.php" method="post">

	<table border="3" align="center" cellpadding="10px" width="60%">
		<?php
			while($rt=mysqli_fetch_array($t2) and $rcf=mysqli_fetch_array($cf2))
			{
		?>
		<thead>
			<td align="center">Sr. no.</td>
			<td align="center">Name of department</td>

			<td align="center">Total fees</td>
			<td align="center">Remaining Fees</td>
			<td align="center">Completed Fees</td>
		</thead>
		<tr>
			<td align="center">01</td>
			<td align="center">Department Fees</td>

			<td align="center"><?php print($rt['department']); ?></td>
			<td align="center"><?php print($rt['department']); ?></td>
			<td align="center"><?php print($rt['department']-$rcf['department']); ?></td>
		</tr>
		<tr>
			<td align="center">02</td>
			<td align="center">Hostel Fees</td>

			<td align="center"><?php print($rt['hostel']); ?></td>
			<td align="center"><?php print($rt['hostel']); ?></td>
			<td align="center"><?php print($rt['hostel']-$rcf['hostel']); ?></td>
		</tr>
		<tr>
			<td align="center">03</td>
			<td align="center">Account Section Fees</td>
			<td align="center"><?php print($rt['accountsection']); ?></td>
			<td align="center"><?php print($rt['accountsection']); ?></td>
			<td align="center"><?php print($rt['accountsection']-$rcf['accountsection']); ?></td>
		</tr>
		<tr>
			<td align="center">04</td>
			<td align="center">Library Fees</td>

			<td align="center"><?php print($rt['library']); ?></td>
			<td align="center"><?php print($rt['library']); ?></td>
			<td align="center"><?php print($rt['library']-$rcf['library']); ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><b>Total</b></td>
			<td align="center"><b><?php print($rt['department']+$rt['hostel']+$rt['accountsection']+$rt['library']) ?></b></td>
			<td align="center"><b><?php print($rcf['department']+$rcf['hostel']+$rcf['accountsection']+$rcf['library']) ?></b></td>
			<td align="center"><b><?php print(($rt['department']-$rcf['department'])+($rt['hostel']-$rcf['hostel'])+($rt['accountsection']-$rcf['accountsection'])+($rt['library']-$rcf['library'])) ?></b></td>
		</tr>
		<?php
			}
		?>
	</table>
	<br>
	<br>
	<center><input type="submit" name="btn1" value="Go to Record details" class="update"></center>
	</form>
	<br>
	<br>
	<br>
	<?php
		mysqli_close($con);
	?>
</body>
</html>