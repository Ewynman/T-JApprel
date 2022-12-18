<?php 
session_start();

//Connect to DB
$db = new mysqli('localhost', 'wynmane1_admin', 'Edtv10052002!', 'wynmane1_csit355project');

//Display Errors
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


/*-------------------------------------CODE FUNCTIONS----------------------------------------------*/

// escape string removes whitespace
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;
	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	


/*===========================================CUSTOMER VIEW FUNCTIONS=================================================*/
/*------------------------------------------ REGISTER A NEW USER ----------------------------------------------*/
//New user Variables
$Fname      = "";
$Minit	    = "";
$Lname      = "";
$username   = "";
$email      = "";
$password_1 = "";
$password_2 = "";
$password   = "";
$street_add = "";
$city       = "";
$state      = "";
$zip        = "";
$user_type  = "";
$errors     = array();

// call the register() function if register_btn is clicked
if (isset($_POST['cust_register_btn'])) {
	custregister();
}

function custregister(){
	// call these variables with the global keyword to make them available in function
	global $db, $Fname, $Minit, $Lname, $email, $username,$password, $street_add, $city,$state,$zip,$user_type;
	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$Fname       =  e($_POST['Fname']);
	$Minit       =  e($_POST['Minit']);
	$Lname       =  e($_POST['Lname']);
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$street_add  =  e($_POST['street_add']);
	$city        =  e($_POST['city']);
	$state       =  e($_POST['state']);
	$zip         =  e($_POST['zip']);

    if($password_1 == $password_2){
        $password = md5($password_1);
    	$query = "INSERT INTO customers (Fname, Minit, Lname, username,email, password, Street_add, city, state, zip,user_type) 
    			  VALUES('$Fname', '$Minit', '$Lname',  '$username','$email','$password','$street_add', '$city', '$state','$zip','')";
    	$db -> query($query);
    
    	// get id of the created user
    	$logged_in_user_id = mysqli_insert_id($db);
    
    	$_SESSION['success']  = "You Made An Account and Are Now Signed In";
    	header('location: homepg.php');	
    }
}


/*===========================================LOGIN TYPES=================================================*/
/*------------------------------------------ CUSTOMER LOGIN ----------------------------------------------*/
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM customers WHERE username='$username' AND password='$password' LIMIT 1";
		$result = $db -> query($query);

		if ($result->num_rows > 0) {
			// The username and password are correct, so allow the user to log in
			$_SESSION['success']  = "You are now logged in";
			header('location: homepg.php');
		} else {
			// The username and password are incorrect, so reject the login
			array_push($errors, "Incorrect username or password");
		}
	}
}


function getUserById($id){
	global $db;
	$queryy = "SELECT * FROM customers WHERE Cust_id=" . $Cust_id;
	$db -> query($queryy);
	
	$user = mysqli_fetch_assoc($result);
	return $user;
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

/*------------------------------------------ SELLER LOGIN ----------------------------------------------*/
if (isset($_POST['seller_login_btn'])) {
	sellerlogin();
}

function sellerlogin(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM sellers WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		header('location: seller/sellerhome.php');
	}
}
/*------------------------------------------ ADMIN LOGIN ----------------------------------------------*/
if (isset($_POST['admin_login_btn'])) {
	adminlogin();
}

function adminlogin(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		header('location: admin/adminhome.php');
	}
}
/*------------------------------------------ EMPLOYEE LOGIN ----------------------------------------------*/
if (isset($_POST['employee_login_btn'])) {
	employeelogin();
}

// LOGIN EMPLOYEE
function employeelogin(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM employees WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		header('location: employee/emphome.php');
	}
}
/*==========================================ADMIN VIEW FUNTIONS=================================================*/
/*------------------------------------------ ADMIN NEW EMPLOYEE ----------------------------------------------*/
//New Emp Variables
$Emp_ID      = "";
$Fname      = "";
$Minit	    = "";
$Lname      = "";
$email      = "";
$username   = "";
$password_1 = "";
$password_2 = "";
$password   = "";
$street_add = "";
$city       = "";
$state      = "";
$zip        = "";
$SSN        = "";
$Birthdate  = "";
$Dnumber    = "";
$user_type  = "";
// call the register() function if register_btn is clicked
if (isset($_POST['emp_register_btn'])) {
	Empregister();
}

// REGISTER USER
function Empregister(){
	// call these variables with the global keyword to make them available in function
	global $db, $Emp_ID, $Fname, $Minit, $Lname, $email, $username,$password, $street_add, $city,$state,$zip,$SSN,$Birthday,$Dnumber,$user_type;
	// receive all input values from the form. Call the e() function
    // defined below to escape form values
    $Emp_ID       =  e($_POST['Emp_ID']);
	$Fname       =  e($_POST['Fname']);
	$Minit       =  e($_POST['Minit']);
	$Lname       =  e($_POST['Lname']);
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$street_add  =  e($_POST['street_add']);
	$city        =  e($_POST['city']);
	$state       =  e($_POST['state']);
	$zip         =  e($_POST['zip']);
	$SSN         =  e($_POST['SSN']);
	$Birthdate   =  e($_POST['Birthdate']);
	$Dnumber     =  e($_POST['Dnumber']);
 	$user_type   =  e($_POST['user_type']);

    if($password_1 == $password_2){
        $password = md5($password_1);
    	$queryy = "INSERT INTO employees (Emp_ID,Fname, Minit, Lname, email, username, password, Street_add, city, state, zip, SSN, Birthdate, Dnumber, user_type) 
    			  VALUES('$Emp_ID','$Fname', '$Minit', '$Lname',  '$email','$username','$password','$street_add', '$city', '$state','$zip', '$SSN','$Birthdate','$Dnumber','$user_type')";
    	$db -> query($queryy);
    
    	// get id of the created user
    	$logged_in_user_id = mysqli_insert_id($db);
    
    	$_SESSION['success']  = "New Employee Created";
    	header('location: adminhome.php');	
    }
}


/*------------------------------------------ ADMIN NEW SELLER ----------------------------------------------*/
//New Emp Variables
$SellerID      = "";
$Fname      = "";
$Minit	    = "";
$Lname      = "";
$email      = "";
$username   = "";
$password_1 = "";
$password_2 = "";
$password   = "";
$Store_Name = "";
$street_add = "";
$city       = "";
$state      = "";
$zip        = "";
$user_type  = "";
// call the register() function if register_btn is clicked
if (isset($_POST['seller_register_btn'])) {
	sellerregister();
}

// REGISTER USER
function sellerregister(){
	// call these variables with the global keyword to make them available in function
	global $db, $SellerID, $Fname, $Minit, $Lname, $email, $username,$password,$Store_Name, $street_add, $city,$state,$zip,$user_type;
	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$SellerID    =  e($_POST['SellerID']);
	$Fname       =  e($_POST['Fname']);
	$Minit       =  e($_POST['Minit']);
	$Lname       =  e($_POST['Lname']);
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$Store_Name  =  e($_POST['Store_Name']);
	$street_add  =  e($_POST['street_add']);
	$city        =  e($_POST['city']);
	$state       =  e($_POST['state']);
	$zip         =  e($_POST['zip']);
 	$user_type   =  e($_POST['user_type']);

    if($password_1 == $password_2){
        $password = md5($password_1);
    	$queryyy = "INSERT INTO sellers (SellerID,Fname, Minit, Lname, email, username, password,Store_Name, Street_add, city, state, zip,user_type) 
    			  VALUES('$SellerID','$Fname', '$Minit', '$Lname', '$email','$username','$password','$Store_Name','$street_add', '$city', '$state','$zip','$user_type')";
    	$db -> query($queryyy);
    
    	// get id of the created user
    	$logged_in_user_id = mysqli_insert_id($db);
    
    	$_SESSION['success']  = "New Seller Created";
    	header('location: adminhome.php');	
    }
}



/*-------------------------------------------ADMIN EDIT USER INFO---------------------------------*/


// Define variables to store the form values
$Cust_id = "";
$Fname = "";
$street_add = "";

if (isset($_POST['modify_bttn'])) {
  // Update the customer record
  $Cust_id = mysqli_real_escape_string($db, $_POST['Cust_id']);
  $Fname = mysqli_real_escape_string($db, $_POST['Fname']);
  $street_add = mysqli_real_escape_string($db, $_POST['street_add']);

  $sql = "UPDATE customers SET Fname='$Fname', street_add='$street_add' WHERE Cust_id = '$Cust_id'";
  $db->query($sql);
}



/*-------------------------------------------ADMIN EDIT USER INFO---------------------------------*/
// Define a variable to store the entered customer ID
$Cust_id = "";

if (isset($_POST['delete_bttn'])) {
  // Delete the customer record
  $Cust_id = mysqli_real_escape_string($db, $_POST['Cust_id']);

  $sql = "DELETE FROM customers WHERE Cust_id = '$Cust_id'";
  $db->query($sql);
}

/*=======================================SELLER VIEW FUNTIONS=================================================*/
/*--------------------------------------SELLER NEW PRODUCT-----------------------------------*/
if (isset($_POST['newproduct_btn'])) {
	newProduct();
}
//Variables for products
$Pname        = "";
$Dnum         = "";
$price        = "";
$quantity     = "";
$store_name   = "";


//MAKE A NEW PRODUCT
function newProduct(){
    global $db, $error, $Panme, $Dnum, $price, $quantity, $store_name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$Pname       =  e($_POST['Pname']);
	$Dnum        =  e($_POST['Dnum']);
	$price       =  e($_POST['Price']);
	$quantity    =  e($_POST['quantity']);
	$store_name  =  e($_POST['Sname']);



	// register product
	$query = "INSERT INTO products (Pname, Dnum, price, quantity, store_name)
             VALUES ('$Pname','$Dnum','$price','$quantity','$store_name')";
    $db -> query($query);
	header('location: sellerhome.php');				
}
/*=======================================EMPLOYEE VIEW FUNTIONS=================================================*/
/*------------------------------------------ NEW USER ----------------------------------------------*/
//New user Variables
$Fname      = "";
$Minit	    = "";
$Lname      = "";
$username   = "";
$email      = "";
$password_1 = "";
$password_2 = "";
$password   = "";
$street_add = "";
$city       = "";
$state      = "";
$zip        = "";
$user_type  = "";
$errors     = array();
// call the register() function if register_btn is clicked
if (isset($_POST['emp_cust_register_btn'])) {
	empcustregister();
}

// REGISTER USER
function empcustregister(){
	// call these variables with the global keyword to make them available in function
	global $db, $Fname, $Minit, $Lname, $email, $username,$password, $street_add, $city,$state,$zip,$user_type;
	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$Fname       =  e($_POST['Fname']);
	$Minit       =  e($_POST['Minit']);
	$Lname       =  e($_POST['Lname']);
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$street_add  =  e($_POST['street_add']);
	$city        =  e($_POST['city']);
	$state       =  e($_POST['state']);
	$zip         =  e($_POST['zip']);

    if($password_1 == $password_2){
        $password = md5($password_1);
    	$query = "INSERT INTO customers (Fname, Minit, Lname, username,email, password, Street_add, city, state, zip, user_type) 
    			  VALUES('$Fname', '$Minit', '$Lname',  '$username','$email','$password','$street_add', '$city', '$state','$zip', '')";
    	$db -> query($query);
    
    	// get id of the created user
    	$logged_in_user_id = mysqli_insert_id($db);
    
    	$_SESSION['success']  = "You Made A New User";
    	header('location: emphome.php');	
    }
}
/*=======================================CART FUNTIONS=================================================*/
/*--------------------------------------ADD TO CART-----------------------------------*/
if(isset($_GET["id"])){
    $Pnum = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE Pnum = $Pnum";
    $resultt = $db->query($sql);
    $total_cart = "SELECT * FROM cart";
    $total_cart_result = $db->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);
    $insert = "INSERT INTO cart(Pnum) VALUES($Pnum)";
    $db->query($insert);
    //Update Quantity
    $update_quantity = "UPDATE products SET quantity = quantity - 1 WHERE Pnum = $Pnum";
    $db->query($update_quantity);
    if($db->query($insert) === true){
        $in_cart = "added into cart";
        echo json_encode(["in_cart"=>$in_cart]);
    }else{
        echo "<script>alert(It doesn't insert)</script>";
    }
}

if(isset($_GET["cart_id"])){
    $Pnum = $_GET["cart_id"];
    $sql = "DELETE FROM cart WHERE Pnum=".$Pnum;
    
    $update_quantity = "UPDATE products SET quantity = quantity + 1 WHERE Pnum = $Pnum";
    $db->query($update_quantity);
    if($db->query($sql) === TRUE){
        echo "Removed from cart";
        //Update Quantity
    }
}



/*-----------------------------COMPLETE CHECKOUT--------------------------*/
if (isset($_POST['submit'])) {
	completecheckout();
}


$Fname    = '';
$Lname    = '';
$email    = '';
$address  = '';
$address2 = '';
$country  = '';
$state    = '';
$zipcode  = '';

function completecheckout(){
    global $db, $fname, $lname, $email, $address, $address2, $country, $state, $zipcode, $Cust_id;
    
    $Fname       =  e($_POST['Fname']);
	$Lname       =  e($_POST['Lname']);
	$email       =  e($_POST['email']);
	$address     =  e($_POST['address']);
	$address2    =  e($_POST['address2']);
	$country     =  e($_POST['country']);
	$state       =  e($_POST['state']);
	$zipcode     =  e($_POST['zipcode']);
	
	$sqll = "INSERT INTO orders (Cust_ID,Fname, Lname, email, address, address2, country,state, zipcode,order_status, created_at)
	         VALUES('$Cust_id','$Fname','$Lname', '$email','$address','$address2', '$country', '$state','$zipcode','confirmed','Y-m-d H:i:s')";
    $db->query($sqll);
    

    $remove = "DELETE FROM cart";
    $db ->query($remove);

    $_SESSION['success']  = "Order Confirmed!";
    header('location: myaccount.php');
}
?>