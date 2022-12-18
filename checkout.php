<?php 
    include('functions.php');
    
    $Custids = "SELECT Cust_id FROM customers";
    $db->query($Custids);
    $sql_cart = "SELECT * FROM cart";
    $all_cart = $db->query($sql_cart);
    $totalprice = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>T&J Apparel | Checkout</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <!--BOOTSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size:2rem;">
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
        <li class="nav-item">
          <a class="nav-link" href="custsearch.php"
            >Search</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="cart.php"
            >Cart <span class="sr-only">(current)</span></a
          >
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
    <h1 style="margin-left:200px;">Checkout</h1>
          <form class="needs-validation" method="POST" style="margin-left:200px;margin-right:200px;margin-bottom:100px;">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="Fname" placeholder="First Name" value="<?php echo $Fname;?>" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="Lname" placeholder="Last Name" value="<?php echo $Fname; ?>" >
              </div>
            </div>
 
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php echo $email; ?>">
            </div>
 
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" value="<?php echo $address;?>">
            </div>
 
            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite" value="<?php echo $address2; ?>">
            </div>
            <div class="mb-3">
              <label for="country">Country</label>
              <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="<?php echo $country; ?>">
            </div>
            <div class="mb-3">
              <label for="state">Country</label>
              <input type="text" class="form-control" id="state" name="state" placeholder="state" value="<?php echo $state; ?>">
            </div>
            <div class="mb-3">
              <label for="zip">Zip Code</label>
              <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="zipcode" value="<?php echo $zipcode; ?>">
            </div>
            </div>
            <hr class="mb-4">
 
            <h4 class="mb-3">Payment</h4>
 
            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="cashOnDelivery" name="cashOnDelivery" type="radio" class="custom-control-input" checked="" >
                <label class="custom-control-label" for="cashOnDelivery">ITS FREE</label>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="submit">Complete Checkout</button>
          </form>
        </div>
      </div>
</body>
</html>