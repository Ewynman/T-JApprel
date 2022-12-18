<!--<html>-->
<!--<head>-->
<!--  <title>Employee | Search Resultss</title>-->
<!--</head>-->
<!--<body>-->

<!--</body>-->
<!--</html>-->


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

        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        body {
            background-color: grey;
            margin: 0px;
        }

        .nav-container {
            width: 100%;
            height: 75px;
            top: 0px;

            background-color: #003366;
        }

        .nav-buttons {
            justify-content: center;
            display: flex;
        }

        .nav-button {
            display: inline-block;
        }

        .nv-btn {
            background-color: #003366;
            border: transparent;
            border-radius: 5px 30px;

            height: 30px;
            width: 150px;

            margin-left: 30px;
            margin-right: 30px;
            margin-top: 18.75px;
        }

        .nv-log {
            background-color: #003366;
            border: transparent;
            border-radius: 5px 30px;
            float: right;
            margin-right: 25px;
            transform: translateY(-100%)
        }

        .nv-btn,
        .nv-log {
            font-weight: bold;
        }

        .nv-btn:hover,
        .nv-log:hover {
            background-color: yellow;
            box-shadow: 10px 10px 25px black;
        }

        .header {
            background: #003366;
        }

        button[name=register_btn] {
            background: #003366;
        }

        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        body {
            background-color: grey;
            margin: 0px;
        }

        .nav-container {
            width: 100%;
            height: 75px;
            top: 0px;

            background-color: #003366;
        }

        .nav-buttons {
            justify-content: center;
            display: flex;
        }

        .nav-button {
            display: inline-block;
        }

        .nv-btn {
            background-color: #003366;
            border: transparent;
            border-radius: 5px 30px;

            height: 30px;
            width: 150px;

            margin-left: 30px;
            margin-right: 30px;
            margin-top: 18.75px;
        }

        .nv-log {
            background-color: #003366;
            border: transparent;
            border-radius: 5px 30px;
            float: right;
            margin-right: 25px;
            transform: translateY(-100%)
        }

        .nv-btn,
        .nv-log {
            font-weight: bold;
        }

        .nv-btn:hover,
        .nv-log:hover {
            background-color: yellow;
            box-shadow: 10px 10px 25px black;
        }
    </style>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="nav-container">
    <div class="nav-buttons">
        <div class="nav-button"><button class="nv-btn" onclick="location.href='./emphome.php'" type="button"
                style="color:white">Employee Home</button></div>
        <div class="nav-button"><button class="nv-btn" onclick="location.href='./create_user.php'" type="button"
                style="color:white">New User</button></div>
        <div class="nav-button"><button class="nv-btn" onclick="location.href='./ordersearch.php'" type="button"
                style="color:white">Order Search</button></div>
        <div class="nav-button"><button class="nv-btn" onclick="location.href='../logout.php'" type="button"
                style="color:white">Logout</button></div>
    </div>
    <div class="nav-login">
        <div class="login"><button class="nv-log" onclick="location.href='./emphome.php'" type="button"><i
                    class="material-icons">person</i></button>
        </div>
    </div>

    <body>
    </body>

    <body>
        <div class="header">
            <h2 style="color:white">Employee - Search Results</h2>
        </div>
        <div class="content">
            <?php
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

    $db = new mysqli('localhost', 'wynmane1_admin', 'Edtv10052002!', 'wynmane1_csit355project');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "select * from products where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p>Number of products found: ".$num_results."</p>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". Product Number: ";
     echo htmlspecialchars(stripslashes($row['Pnum']));
     echo "</strong><br />Product Name: ";
     echo stripslashes($row['Pname']);
     echo "<br />Department Number ";
     echo stripslashes($row['Dnum']);
     echo "<br />Price: ";
     echo stripslashes($row['price']);
     echo "<p>"."Quantity: ";
     echo htmlspecialchars(stripslashes($row['quantity']));
     echo "<br />Store Name: ";
     echo stripslashes($row['store_name']);
    //  echo "<br />Image Source ";
    //  echo stripslashes($row['product_image']);
     echo "</p>";
  }
  $db->close();

?>
        </div>
    </body>

</html>