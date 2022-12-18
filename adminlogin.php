<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	<div class="header">
		<h2>Admin Login</h2>
	</div>
	<form method="post" action="index.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="admin_login_btn">Login</button>
		</div>
		<p>
			Not An Admin? <a href="index.php">Click Here</a>
		</p>
	</form>

</html>