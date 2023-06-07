<html>
<head>
	<title>STUDENT LOGIN</title>
		<style type="text/css">
		button
		{
			padding: 10px 15px;
			margin-left: 650px;
			margin-top: 50px;
			background-color: pink;
			font-size: 20px;
			border-radius: 5px;
		}
		table
		{
			
			padding: 5px; 
			background-color: black;

		}
		h2
		{
			margin-top: 10px;
			text-decoration: underline;
		}
		</style>
	
</head>
<body  bgcolor="#FFD08D">
<h2 align="center">STUDENT RECORD</h2>
<table width="50%" align="center" border="7">
	<?php
		$con=mysqli_connect("localhost","root","","project");
		if(!$con)
		{
			print("Not connected");
		}
		$rs=mysqli_query($con,"select * from clearancedues where username='$un'");
	?>
	<?php
		while($row=mysqli_fetch_array($rs))
		{
	?>
	<tr bgcolor="white">
		<td><h3> User Id</h3></td>
		<td><?php print($row['username']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Username</h3></td>
		<td><?php print($row['usernam']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Password</h3></td>
		<td><?php print($row['password']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Email</h3></td>
		<td><?php print($row['email']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Department Fees</h3></td>
		<td><?php print($row['department']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Hostel fees</h3></td>
		<td><?php print($row['hostel']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Account section fees</h3></td>
		<td><?php print($row['accountsection']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Library Fees</h3></td>
		<td><?php print($row['library']); ?></td>
	</tr>
	<tr bgcolor="white">
		<td><h3> Total Fees</h3></td>
		<td><?php print($row['department']+$row['hostel']+$row['accountsection']+$row['library']) ?></td>

	</tr>	
	<?php
		}
		mysqli_close($con);
	?>
</table>		
<button type="submit" value="Log Out"><a href="front.php"> Log Out</button>
</body>
</html>