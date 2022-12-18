<?php 
    include('functions.php');

    $sql_cart = "SELECT * FROM cart";
    $all_cart = $db->query($sql_cart);
    $totalprice = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>T&J Apparel | Cart</title>
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
  <style>
      *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    text-decoration: none;
    color: black;
    }

    html{
        font-size: 62.5%;
    }

    main{
        max-width: 1500px;
        width: 80%;
        margin: 30px auto;
        display: flex;
        flex-direction: column;
    }


    main .card{
        height:  150px;
        width:560px;
        border: 1px solid lightgray;
        margin: 20px;
        display: flex;
    }

    main .card .images{
        width: 20%;
    }

    main .card .images img{
        width: 100%;
        height: 100%;
        float:left;
        object-fit: cover;
    }

    main .card .caption{
    line-height: 3em;
    margin-left: 30px;
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    }

    main .card .caption p{
        font-size: 1.5rem;
    }

    del{
        text-decoration: line-through;
    }

    main .card .caption .rate{
        display: flex;
    }

    main .card .caption .rate i{
        color: gold;
        margin-left:  2px;
    }

    main .card .caption .price{
        position: absolute;
        top: 5%;
        right: 5%;
    }

    main .card .caption button{
        background-color: red;
        color: white;
        padding: 1em;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 3px;
        margin-top: 2em;
        font-weight: bold;
        width: 30%;
    }
    main .card .caption 
  </style>
<body>
    <main>
        <h1><?php echo $all_cart->num_rows; ?> Items</h1>
        <hr>
        <?php
          while($row_cart = $all_cart->fetch_assoc()){
              $sql = "SELECT * FROM products WHERE Pnum=".$row_cart["Pnum"];
              $all_product = $db->query($sql);
              while($row = $all_product->fetch_assoc()){
        ?>
        <div class="card">
            <div class="caption">
                <p class="product_name"><?php echo $row["Pname"]; ?></p>
                <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
                <button class="remove" data-id="<?php echo $row["Pnum"]; ?>" style="background-color: red;color: white;padding: 1em;border: none;outline: none;cursor: pointer;border-radius: 3px;margin-top: 2em;font-weight: bold;width: 30%;">Remove from Cart</button>
            </div>
                
            </div>
        </div>
            
        <?php
            
            $totalprice += $row['price'];
          }
          
        }
       ?>
       <h1 style="margin-left:3rem;"><b>Your Total: $ <?php echo $totalprice; ?></b></h1>
       <a href="./checkout.php" style="background-color: red;color: white;padding: 1em;border: none;outline: none;cursor: pointer;border-radius: 3px;margin-top: 2em;font-weight: bold;width: 30%;">Checkout</a> 
       
    </main>

    <script>
      var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","functions.php?cart_id="+cart_id,true);
                xml.send();
            })
        }
    </script>
</body>
</html>