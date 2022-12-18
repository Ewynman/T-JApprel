<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	<div class="header">
		<h2>Employee Login</h2>
	</div>
	<form method="post" action="index.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="employee_login_btn">Login</button>
		</div>
		<p>
			Not an Employee? <a href="index.php">Click Here</a>
		</p>
	</form>

</html>