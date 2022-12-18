<?php 
    include('functions.php');
    $sql = "SELECT * FROM products";
    $all_product = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <div class="stff" style="background-color: white;">
        <title>T&J | Products</title>
        
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
        <li class="nav-item active">
          <a class="nav-link" href="products.php"
            >Products<span class="sr-only">(current)</span></a>
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
<style>
    /*Products Page*/
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: black;
}

html{
    font-size: 62.5%;
}

main{
    max-width: 1500px;
    width: 95%;
    margin: 30px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: auto;
}

main .card{
    max-width: 300px;
    flex: 1 1 210px;
    text-align: center;
    height: 500px;
    border: 1px solid lightgray;
    margin: 20px;
}


main .card .caption{
    padding-left: 1em;
    text-align: left;
    line-height: 3em;
    height: 25%;
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



main .card a{
    width: 50%;
}

main .card button{
    border: 2px solid black;
    padding: 1em;
    width: 80%;
    cursor: pointer;
    margin-top: 2em;
    font-weight: bold;
    position: relative;
}

main .card button:before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all .5s;
    margin: 0;
}

main .card button::after{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 0;
    background-color: black;
    transition: all .5s;
}

main .card button:hover::before{
    width: 30%;
}

main .card button:hover::after{
    width: 30%;
}
</style>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main>
        <?php
            while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
 
            <div class="caption">
                <p class="product-name"><?php echo $row["Pname"]; ?></p>
                <p class="price">$<?php echo $row["price"]; ?></p>
                <p class="price">Sold By: <?php echo $row["store_name"]; ?></p>
                <p class="price">Quantity: <?php echo $row["quantity"]; ?></p>
                
            </div>
            <button class="add" data-id="<?php echo $row["Pnum"];  ?>">Add to Cart</button>
        </div>
        <?php
            }
        ?>
    </main>
    <script>
       var Pnum = document.getElementsByClassName("add");
       for(var i = 0; i<Pnum.length; i++){
           Pnum[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                   }
               }

               xml.open("GET","functions.php?id="+id,true);
               xml.send();
            
           })
       }

   </script>
</body>
</html>