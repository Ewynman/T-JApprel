<?php include('../functions.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin - Create Seller</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        .header {
            background: #003366;
        }

        button[name=register_btn] {
            background: #003366;
        }
    </style>
</head>
<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
		*{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}

body{
  background-color: grey;
  margin: 0px;
}

.nav-container{
  width: 100%;
  height: 75px;
  top: 0px;

  background-color: #003366;
}

.nav-buttons{
  justify-content: center;
  display: flex;
}

.nav-button{
  display: inline-block;
}

.nv-btn{
  background-color: #003366;
  border: transparent;
  border-radius: 5px 30px;
  
  height: 30px;
  width: 150px;

  margin-left: 30px;
  margin-right: 30px;
  margin-top: 18.75px;
}

.nv-log{
  background-color: #003366;
  border: transparent;
  border-radius: 5px 30px;
  float: right;
  margin-right: 25px;
  transform: translateY(-100%)
}

.nv-btn, .nv-log{
  font-weight: bold;
}

.nv-btn:hover, .nv-log:hover{
  background-color: yellow;
  box-shadow: 10px 10px 25px black;
}
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
		*{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}

body{
  background-color: grey;
  margin: 0px;
}

.nav-container{
  width: 100%;
  height: 75px;
  top: 0px;

  background-color: #003366;
}

.nav-buttons{
  justify-content: center;
  display: flex;
}

.nav-button{
  display: inline-block;
}

.nv-btn{
  background-color: #003366;
  border: transparent;
  border-radius: 5px 30px;
  
  height: 30px;
  width: 150px;

  margin-left: 30px;
  margin-right: 30px;
  margin-top: 18.75px;
}

.nv-log{
  background-color: #003366;
  border: transparent;
  border-radius: 5px 30px;
  float: right;
  margin-right: 25px;
  transform: translateY(-100%)
}

.nv-btn, .nv-log{
  font-weight: bold;
}

.nv-btn:hover, .nv-log:hover{
  background-color: yellow;
  box-shadow: 10px 10px 25px black;
}
	</style>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="nav-container">
  <div class="nav-buttons">
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./adminhome.php'" type="button" style="color:white">Admin Home</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='create_employee.php'" type="button" style="color:white">New Employee</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='newseller.php'" type="button" style="color:white">New Seller</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='../logout.php'" type="button" style="color:white">Logout</button></div>
  </div>
  <div class="nav-login">
    <div class="login"><button class="nv-log" onclick="location.href='./adminhome.php'" type="button"><i class="material-icons">person</i></button>
  </div>
</div>
<body>
    <div class="header">
        <h2 style="color:white;">Admin - Create Seller</h2>
    </div>

    <form method="post" action="adminhome.php">

        <?php echo display_error(); ?>
        <div class="input-group">
            <label>Seller ID #</label>
            <input type="text" name="SellerID" value="<?php echo $SellerID; ?>" required>
        </div>
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
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="text" name="password_1"value="<?php echo $password_1; ?>" required>
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="text" name="password_2"value="<?php echo $password_2; ?>" required>
        </div>
        <div class="input-group">
            <label>Store Name</label>
            <input type="text" name="Store_Name"value="<?php echo $Store_Name; ?>" required>
        </div>
            <div class="input-group">
		    <label>Street Address</label>
		    <input type="text" name="street_add"value="<?php echo $street_add; ?>" required>
	    </div>
        <div class="input-group">
		<label>City</label>
		<input type="text" name="city"value="<?php echo $city; ?>" required>
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
		<label>User Type</label>
		<input type="text" name="user_type" value="<?php echo $user_type; ?>" required>
	</div>
        <div class="input-group">
            <button type="submit" class="btn" name="seller_register_btn"> + Create Seller</button>
        </div>
    </form>
</body>

</html>