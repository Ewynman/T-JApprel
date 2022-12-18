<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="Fname" value="<?php echo $Fname; ?>" required>
        </div>
        <div class="input-group">
            <label>Middle Init</label>
            <input type="text" name="Minit" value="<?php echo $Minit; ?>" required>
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="Lname" value="<?php echo $Lname; ?>" required>
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" value="<?php echo $password_1; ?>" required>
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2" value="<?php echo $password_2; ?>" required>
        </div>
         <div class="input-group">
		<label>Street Address</label>
		<input type="text" name="street_add" value="<?php echo $street_add; ?>" required>
	</div>
    <div class="input-group">
		<label>City</label>
		<input type="text" name="city" value="<?php echo $city; ?>" required>
	</div>
    <div class="input-group">
		<label>State</label>
		<input type="text" name="state" value="<?php echo $state; ?>" required>
	</div>
    <div class="input-group">
		<label>Zip Code</label>
		<input type="text" name="zip" value="<?php echo $zip; ?>" required>
	</div>
        <div class="input-group">
            <button type="submit" class="btn" name="cust_register_btn"> + Create user</button>
        </div>
	<p>
		Already a member? <a href="index.php">Sign in</a>
	</p>
</form>
</body>
</html>