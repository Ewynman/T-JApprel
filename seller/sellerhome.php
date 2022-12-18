<?php include('../functions.php') ?>
<!DOCTYPE html>
<html style="background-color: white;">
<head>
	<title>Seller - New Product</title>
	 Bootstrap 
	
	<link rel="stylesheet" type="text/css" href="../style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
table, th, tr {
  border:1px solid black;
}
	</style>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="nav-container">
  <div class="nav-buttons">
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./sellerhome.php'" type="button" style="color:white;">Seller Home</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./newproduct.php'" type="button" style="color:white;">New Product</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='../logout.php'" type="button" style="color:white;">Logout</button></div>
  </div>
  <div class="nav-login">
    <div class="login"><button class="nv-log" onclick="location.href='./sellerhome.php'" type="button" style="color:white;"><i class="material-icons">person</i></button>
  </div>
</div>
<body>
    
</body>
</html>