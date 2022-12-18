<?php 
include('../functions.php');

// if (!isAdmin()) {
// 	$_SESSION['msg'] = "You must log in first";
// 	header('location: ../index.php');
// }
// if (isset($_GET['logout'])) {
// 	session_destroy();
// 	unset($_SESSION['user']);
// 	header("location: ../index.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
        table{
        width: 50%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;
    }
    tr {
        border-bottom: 1px solid #cbcbcb;
    }
    th, td{
        border: none;
        height: 30px;
        padding: 2px;
    }
    tr:hover {
        background: #F5F5F5;
    }
    
    form {
        width: 45%;
        margin: 50px auto;
        text-align: left;
        padding: 20px; 
        border: 1px solid #bbbbbb; 
        border-radius: 5px;
    }
    
    .input-group {
        margin: 10px 0px 10px 0px;
    }
    .input-group label {
        display: block;
        text-align: left;
        margin: 3px;
    }
    .input-group input {
        height: 30px;
        width: 93%;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;
    }
    .btn {
        padding: 10px;
        font-size: 15px;
        color: white;
        background: #5F9EA0;
        border: none;
        border-radius: 5px;
    }
    .edit_btn {
        text-decoration: none;
        padding: 2px 5px;
        background: #2E8B57;
        color: white;
        border-radius: 3px;
    }
    
    .del_btn {
        text-decoration: none;
        padding: 2px 5px;
        color: white;
        border-radius: 3px;
        background: #800000;
    }
    .msg {
        margin: 30px auto; 
        padding: 10px; 
        border-radius: 5px; 
        color: #3c763d; 
        background: #dff0d8; 
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;
    }
	</style>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="nav-container">
  <div class="nav-buttons">
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./adminhome.php'" type="button" style="color:white">Admin Home</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='create_employee.php'" type="button" style="color:white">New Employee</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='../logout.php'" type="button" style="color:white">Logout</button></div>
  </div>
  <div class="nav-login">
    <div class="login"><button class="nv-log" onclick="location.href='./adminhome.php'" type="button"><i class="material-icons">person</i></button>
  </div>
</div>
<body>
</body>
<body>
	<div class="header">
		<h2 style="color:white">Admin - Delete User</h2>
	</div>
	<div class="content">
    <form method="post" action="">
  <label for="Cust_id">Customer ID:</label><br>
  <input type="text" id="Cust_id" name="Cust_id"><br><br>
  <input type="submit" value="Delete" name="delete_bttn">
</form> 
	</div>
</body>
</html>