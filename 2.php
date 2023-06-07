<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>ADMIN LOGIN</title>

	<style type="text/css">
		body
		{
			padding: 20px;
		}
		.logoutLblPos
		{
			position: fixed;
			right: 40px;
			top: 20px;
		}
		.logoutbtn
		{
			background-color: #FF007F;
			padding: 5px;
			color: whitesmoke;
			font-size: 16px;
		}
		.print
		{
			background-color: #F61491;
			font-size: 15px;
			margin-left: 1200px;
			border-radius: 5px;
		}
		.tabl
		{
			background-color: whitesmoke;
		}
		button{
			
			background: #aa0067;
			padding: 10px 15px;
			color: white;
			border-radius: 5px;
			margin-right: 5px;
			border: none;
		}

		button:hover{
			opacity: 0.7;
		}
		.b1
		{
			background-color: green;
		}
		.b2
		{
			background-color: red;
		}
		.btn
		{
			margin-top: 20px;
			margin-left: 600px;
			background-color: #FF007F;
		}
	</style>
</head>
<body bgcolor="#F9A602">
	
	<div><button onclick="window.print()" class="print"> Print </button></div>


	<?php
	$con=mysqli_connect("localhost","root","","project");
	if(!$con)
	{
		print("Not connected");
	}
	$n=mysqli_query($con,"select * from clearancedues");
	?>
	<h2 align="center"><u>STUDENT RECORD</h2></u>
	<table border="3" cellpadding="10px" align="center" class="tabl">
		<thead bgcolor="maroon">
			<td><b><font color="white" size="5">User Id</b></td></font>
			<td><b><font color="white" size="5">Username</b></td></font>
			<td><b><font color="white" size="5">Department Fees</b></td></font>
			<td><b><font color="white" size="5">Hostel Fees</b></td></font>
			<td><b><font color="white" size="5">Account Section Fees</b></td></font>
			<td><b><font color="white" size="5">Library Fees</b></td></font>
			<td><b><font color="white" size="5">Total Remaining Fees</b></td></font>
			<td colspan="2"><b><font color="white" size="5">Clear Dues/ Delete</b></td></font>
		</thead>
	<?php
		while($r1=mysqli_fetch_array($n))
		{
	?>
		<tr>
			<td><?php print($r1['username']); ?></td>
			<td><?php print($r1['usernam']); ?></td>
			<td><?php print($r1['department']); ?></td>
			<td><?php print($r1['hostel']); ?></td>
			<td><?php print($r1['accountsection']); ?></td>
			<td><?php print($r1['library']); ?></td>
			<td><?php print($r1['department']+$r1['hostel']+$r1['accountsection']+$r1['library']) ?></td>

			<td>
				<a href="3.php?user5=<?php print($r1['username']); ?>">
					<button class="b1"> Clear Dues</button>
				</a>
			</td>
			<td>
				<a href="delete.php?id=<?php print($r1['id']);  ?>"> 
					<button class="b2">Delete</button>
				</a>
			</td>
		</tr>
		<?php
		}
		/*mysqli_close($con);*/
		?>
	</table>
	<button type="submit" value="Log Out" class="btn"><a href="front.php"><font color="white" size="3"> Log Out</button></font>
	

</body>
</html>