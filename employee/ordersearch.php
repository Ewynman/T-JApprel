<?php 
include('../functions.php');

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee | Order Search</title>
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

body {
    background: #333333;
}
.text-line {
    background-color: transparent;
    color: black;
    outline: none;
    outline-style: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: solid Black 1px;
    padding: 3px 10px;
}
	</style>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="nav-container">
  <div class="nav-buttons">
  <div class="nav-button"><button class="nv-btn"  onclick="location.href='./emphome.php'" type="button" style="color:white">Employee Home</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./create_user.php'" type="button" style="color:white">New User</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./ordersearch.php'" type="button" style="color:white">Order Search</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='../logout.php'" type="button" style="color:white">Logout</button></div>
  </div>
  <div class="nav-login">
    <div class="login"><button class="nv-log" onclick="location.href='./emphome.php'" type="button" style="color:white"><i class="material-icons">person</i></button>
  </div>
</div>
<body>
</body>
<body>
	<div class="header">
		<h2 style="color:white">Employee - Inventory Page</h2>
	</div>
	<div class="content" style="width 250px;">
    <form action="search.php" method="post" style="border:none;font-size:1.8rem;font-family:Poppins;">
        Choose Search Type:<br />
        <select name="searchtype" style="height:25px;border:none">
            <option value="Pname">Product Name
            <option value="Pnum">Product Number
            <option value="Dnum">Dept Number
        </select>
        <br />
        Enter Search Term:<br />
        <input class="text-line" name="searchterm" type="text" size="20">
        <br />
        <div class="wrapper">
            <input class="inputbx" type="submit" name="submit" value="Search" >
        </div>
    </form>
    </div>
</body>
</html>