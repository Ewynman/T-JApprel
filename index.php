<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" style="color: black;">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>T&J | Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #FCF8EE;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 620px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="homepg.php">
        <?php echo display_error(); ?>
        
        <h3 style="color:#8982C3;">Login Here</h3>
        <?php echo display_error(); ?>
        
        <label for="username" style="color:#8982C3; ">Username</label>
        <input style="color:black;border: 1px solid black;" type="text" placeholder="Username" name="username" required>

        <label for="password" style="color:#8982C3;">Password</label>
        <input style="color:black; border: 1px solid black;" type="password" placeholder="Password" name="password" required>

        <button type="submit" class="btn" name="login_btn" style="color:black; border: 1px solid black;">Login</button>
        <div class="social">
          <div class="go" style="color:black;"><i class="fab fa-google"></i>  Google</div>
          <div class="fb" style="color:black;"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
            <p>
			<h4 style="color:black;">Not yet a member? <a style="color:black;" href="register.php">Sign up</a></h4>
		</p>
		<p style="color:black;">
			Seller Login <a style="color:black;" href="sellerlogin.php">Click Here</a>
		</p>
		<p style="color:black;">
			Employee Login <a style="color:black;" href="employeelogin.php">Click Here</a>
		</p>
		<p style="color:black;">
			Admin Login <a style="color:black;" href="adminlogin.php">Click Here</a>
		</p>
  <!--  </form>-->


</body>
</html>