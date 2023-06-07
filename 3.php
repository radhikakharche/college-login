<?php session_start(); ?>
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
			margin-top: 40px;
		}
		h1
		{
			margin-left: 10px;
		}
		.nav-bar
		{
			font-size: 50px;
			font-family: Arial Black;
		}
		a:hover
		{
			opacity: 0.9;
		}
		.update
		{
			background-color: olivedrab;
			font-size: 30px;
			color: whitesmoke;
			padding: 5px;
			padding-right: 8px;
			padding-left: 8px;
		}
		.details
		{
			margin-left: 100px;
			font-size: 25px;
		}
		.bdr_unm
		{
			border: solid 1px black;
			padding-left: 1px;
			padding-right: 60px;
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
	$usernm=$_GET['user5'];
	$_SESSION['usr']=$usernm;
	$t=mysqli_query($con,"select * from totalfees");
	$cf=mysqli_query($con,"select * from clearancedues where username=$usernm");
	?>

	<center><nav class="navbar fixed-top navbar-light bg-light">
		<div class="container-fluid">
			<font><b>Clearance Details</font></b>
		</div>
	</nav></center>

	<hr color="purple" size="2" width="100%">



	<h1>Welcome<font color="maroon"><?php print(" "); ?>ADMIN</font></h1>

	<form class="details" action="4.php" method="post">
	<font color="blue">Username: </font><font class="bdr_unm"><?php print($usernm); ?></font>
	

	<table border="3" align="center" cellpadding="10px" width="60%">
		<?php
			while($rr=mysqli_fetch_array($t) and $rr2=mysqli_fetch_array($cf))
			{
		?>
			<thead>
				<td align="center"><b>Sr. no. </b></td>
				<td align="center"><b>Name of Department </b></td>
				<td align="center"><b>Due paid </b></td>
				<td align="center"><b>Total Fees </b></td>
				<td align="center"><b>Remaining Fees </b></td>
				<td align="center"><b>Completed Fees </b></td>
			</thead>
			<tr>
				<td align="center">01</td>
				<td align="center">Department Fees</td>
				<td align="center"><input type="text" name="dp" value="0"></td>
				<td align="center"><?php print($rr['department']); ?></td>
				<td align="center"><?php print($rr2['department']); ?></td>
				<td align="center"><?php print($rr['department']-$rr2['department']); ?></td>
			</tr>
			<tr>
				<td align="center">02</td>
				<td align="center">Hostel Fees</td>
				<td align="center"><input type="text" name="ht" value="0"></td>
				<td align="center"><?php print($rr['hostel']); ?></td>
				<td align="center"><?php print($rr2['hostel']); ?></td>
				<td align="center"><?php print($rr['hostel']-$rr2['hostel']); ?></td>
			</tr>
			<tr>
				<td align="center">03</td>
				<td align="center">Account Section Fees</td>
				<td align="center"><input type="text" name="as" value="0"></td>
				<td align="center"><?php print($rr['accountsection']); ?></td>
				<td align="center"><?php print($rr2['accountsection']); ?></td>
				<td align="center"><?php print($rr['accountsection']-$rr2['accountsection']); ?></td>
			</tr>
			<tr>
				<td align="center">04</td>
				<td align="center">Library Fees</td>
				<td align="center"><input type="text" name="ht" value="0"></td>
				<td align="center"><?php print($rr['library']); ?></td>
				<td align="center"><?php print($rr2['library']); ?></td>
				<td align="center"><?php print($rr['library']-$rr2['library']); ?></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><b>Total</b></td>
				<td align="center"><b><?php print($rr['department']+$rr['hostel']+$rr['accountsection']+$rr['library']) ?></b></td>
				<td align="center"><b><?php print($rr2['department']+$rr2['hostel']+$rr2['accountsection']+$rr2['library']) ?></b></td>
				<td align="center"><b><?php print(($rr['department']-$rr2['department'])+($rr['hostel']-$rr2['hostel'])+($rr['accountsection']-$rr2['accountsection'])+($rr['library']-$rr2['library'])) ?></b></td>
			</tr>
			<?php
				}
			?>
		</table>
		<br>
		<center><input type="submit" name="btn1" value="Update" class="update"></center>
		</form>
		<?php
			mysqli_close($con);
		?>
</body>
</html>