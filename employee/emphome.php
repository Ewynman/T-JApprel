<?php 
include('../functions.php');

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Get the user's ID from the session
    $user_id = $_SESSION['Emp_id'];

    // Query the database to get the user's user_type
    $query = "SELECT user_type FROM employees WHERE Emp_id = $user_id";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    // Check if the user_type is set to "employee"
    if ($row['user_type'] == "employee") {
        // The user is an employee, so allow them to stay logged in
    } else {
        // The user is not an employee, or their user_type is not set, so log them out
        unset($_SESSION['user_id']);
        header("Location: index.php");
        exit;
    }
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee | Home Page</title>
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
<!DOCTYPE html>
<html style="background-color: white;">
<head>
	<title>Seller - New Product</title>
	<!-- Bootstrap -->
	
	<link rel="stylesheet" type="text/css" href="../style.css">
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
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./emphome.php'" type="button"style="color:white">Employee Home</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./create_user.php'" type="button"style="color:white">New User</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./ordersearch.php'" type="button"style="color:white">Order Search</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='../logout.php'" type="button"style="color:white">Logout</button></div>
  </div>
  <div class="nav-login">
    <div class="login"><button class="nv-log" onclick="location.href='./emphome.php'" type="button"><i class="material-icons">person</i></button>
  </div>
</div>
<body>
</body>
<body>
	<div class="header">
		<h2 style="color:white">Employee - Home Page</h2>
	</div>
	<div class="content">
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../profilepic.webp"  >
			<div>
				<?php  if (isset($_SESSION['employees'])) : ?>
                    <strong><?php echo $_SESSION['employees']['Fname']; ?></strong><br>
					<strong><?php echo $_SESSION['employees']['username']; ?></strong>
					<strong><?php echo $_SESSION['employees']['Dnumber']; ?></strong>
					
				
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>