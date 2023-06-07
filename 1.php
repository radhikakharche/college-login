<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		img
		{
			height: 150px;
			width: 150px;
			clip-path: circle();
			margin-top: -420px;
			margin-right: -600px;
			margin-left: 60px;
		}		
		.a
		{
			margin-left: 280px;
			
		}
	</style>
</head>
<body>
	<img src="images/img1.jpg">
	<div class="a">
	<form action="1_1.php" method="post">
		<h2>ADMIN LOGIN</h2>
		<label>User Name</label>
		<input type="text" name="un" placeholder="User Name">

		<label>Password</label>
		<input type="Password" name="pass" placeholder="Password">

		<button type="submit">Login</button>
	</form>
	</div>
</body>
</html>