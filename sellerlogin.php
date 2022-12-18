<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Seller Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	<div class="header">
		<h2>Seller Login</h2>
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
			<button type="submit" class="btn" name="seller_login_btn">Login</button>
		</div>
		<p>
			Not yet a not a seller? <a href="index.php">Click Here</a>
		</p>
	</form>

</html>