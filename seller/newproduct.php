<?php include('../functions.php') ?>
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

  background-color: #696969;
}

.nav-buttons{
  justify-content: center;
  display: flex;
}

.nav-button{
  display: inline-block;
}

.nv-btn{
  background-color: lightgrey;
  border: transparent;
  border-radius: 5px 30px;
  
  height: 30px;
  width: 150px;

  margin-left: 30px;
  margin-right: 30px;
  margin-top: 18.75px;
}

.nv-log{
  background-color: lightgrey;
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
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./sellerhome.php'" type="button">Seller Home</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='./newproduct.php'" type="button">New Product</button></div>
    <div class="nav-button"><button class="nv-btn"  onclick="location.href='../logout.php'" type="button">Logout</button></div>
  </div>
  <div class="nav-login">
    <div class="login"><button class="nv-log" onclick="location.href='./sellerhome.php'" type="button"><i class="material-icons">person</i></button>
  </div>
</div>
<body>
	<div class="header">
		<h2>Seller - Add New Product</h2>
	</div>
	
	<form method="post" action="newproduct.php">

		<?php echo display_error(); ?>
		
		<div class="input-group">
			<label>Product Name</label>
			<input type="text" name="Pname" value="<?php echo $Pname; ?>">
		</div>
		<div class="input-group">
			<label>Department Number</label>
			<input type="text" name="Dnum" value="<?php echo $Dnum; ?>">
		</div>
		<div class="input-group">
			<label>Price</label><br>
			<input type="text" name="Price" value="<?php echo $price; ?>">
		</div>
		<div class="input-group">
			<label>quantity</label>
			<input type="text" name="quantity" value="<?php echo $quantity; ?>">
		</div>
		<div class="input-group">
			<label>Store Name</label>
			<input type="text" name="Sname" value="<?php echo $store_name; ?>">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="newproduct_btn"> + Create Product</button>
		</div>
	</form>
</body>
</html>