<!DOCTYPE html>
<html>
<head>
	<title>Product Search</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<div class="stff" style="background-color: white;">
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous" />
    <!--BOOTSTRAP JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-clean-work.css" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Tom and Jerry Apparel</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="homepg.php"
            >Home <span class="sr-only"></span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php"
            >Products</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="custsearch.php"
            >Search<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"
            >Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./myaccount.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

<body>
	<div class="header" style="margin-top:250px;">
		<h2 style="color:white">Search Products Page</h2>
	</div>
	<div class="content" style="width 250px;">
    <form action="custsearchresults.php" method="post" style="border:none;font-size:1.8rem;font-family:Poppins;">
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