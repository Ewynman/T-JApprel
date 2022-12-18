<?php 
include('functions.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>T&J Apparel | Home</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/tooplate-clean-work.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="https://i.kym-cdn.com/photos/images/original/001/149/102/6f3.png" class="logo img-fluid" alt="">

                <span class="ms-2">T&J Apparel</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="homepg.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="myaccount.php">My Account</a></li>

                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>

                            <li><a class="dropdown-item" href="custsearch.php">Search</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn"
                            href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        <section class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12 text-center mx-auto">
                        <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                            <span>We Have</span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Shirts</b>
                                <b>Pants</b>
                                <b>Shoes</b>
                                <b>Jewelry</b>
                                <b>Accessories</b>
                            </span>
                        </h1>

                        <a class="custom-btn btn button button--atlas smoothscroll me-3" href="products.php">
                            <span>View Products</span>

                            <div class="marquee" aria-hidden="true">
                                <div class="marquee__inner">
                                    <span>View Products</span>
                                    <span>View Products</span>
                                    <span>View Products</span>
                                    <span>View Products</span>
                                </div>
                            </div>
                        </a>

                        <a class="custom-btn custom-border-btn custom-btn-bg-white btn button button--pan smoothscroll"
                            href="myaccount.php">
                            <span>My Account</span>
                        </a>
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,224L40,229.3C80,235,160,245,240,250.7C320,256,400,256,480,240C560,224,640,192,720,176C800,160,880,160,960,138.7C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
        </section>
        <section>
            <div class="container" style="height:550px;width:100%;">
                <h1 style="text-align:center;">About Us</h1>
                <div class="text">
                    <p style="font-family:'Poppins;text-align:center;font-size: 4rem;">
                        T&J Apparel offers a wide vareity of Tom and Jerry products. Dress to fit your favorite T&J fashion trends. 
                        Our goal is to provide you with a great selection of our latest and best products. Shop Online Today!
                    </p>
                </div>
            </div>
        </section>
        
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                        <div>
                            <img src="https://i.kym-cdn.com/photos/images/original/001/149/102/6f3.png" class="logo img-fluid" alt="">
                        </div>

                        <ul class="footer-menu d-flex flex-wrap ms-5">
                            <li class="footer-menu-item"><a href="products.php" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="cart.php" class="footer-menu-link">Cart</a></li>

                            <li class="footer-menu-item"><a href="myaccount.php" class="footer-menu-link">My Account</a></li>

                            <li class="footer-menu-item"><a href="logout.php" class="footer-menu-link">Logout</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">Our Departments</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    
                                    Tops
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    
                                    Pants
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    
                                    Footwear
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    
                                    Jewelry
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    
                                    Accessories
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Office Location</h5>

                        <p class="text-white d-flex mt-3 mb-2">
                            
                                123 Maple Dr Beverly Hills, California(CA), 90210
                        </p>

                        <p class="text-white d-flex mb-2">
                            

                            <a href="tel: 110-220-9800" class="site-footer-link">
                                209-555-4088
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            

                            <a href="mailto:info@company.com" class="site-footer-link">
                                tom&jerry@apparel.com
                            </a>
                        </p>

                        
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                        <div class="featured-block">
                            <h5 class="text-white mb-3">Contact Hours</h5>

                            <strong class="d-block text-white mb-1">Mon - Fri</strong>

                            <p class="text-white mb-3">8:00 AM - 4:30 PM</p>

                            <strong class="d-block text-white mb-1">Sat</strong>

                            <p class="text-white mb-0">8:00 AM - 2:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JAVASCRIPT FILES -->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.backstretch.min.js"></script>
            <script src="js/counter.js"></script>
            <script src="js/countdown.js"></script>
            <script src="js/init.js"></script>
            <script src="js/modernizr.js"></script>
            <script src="js/animated-headline.js"></script>
            <script src="js/custom.js"></script>

</body>

</html>