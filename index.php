<?php
session_start();
?>
 <!DOCKTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- bootstrap links -->
    <!-- fonts links --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links --> 

    <!-- php connection link -->
    <?php include 'connect.php' ?>
      </head>
<body>

    <!-- top navbar --> 
      <div class="other-links">
            <button id="btn-login"><a href="login.php">Login</a></button>
            <button id="btn-signup"><a href="signup.php">Sign up</a></button>
          
  </div>
      

    <div class="home-section">
        <!-- navbar --> 
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="./image/logo.png" alt="" width="180px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="clothe.php">Clothe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="HomeProducts.php">products</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;">
                      <li><a class="dropdown-item" href="#">T-Shirt</a></li>
                      <li><a class="dropdown-item" href="#">Hoodies</a></li>
                      <li><a class="dropdown-item" href="#">Pants</a></li>
                      <li><a class="dropdown-item" href="#">Soprts Shoes</a></li>
                      <li><a class="dropdown-item" href="#">Smart Watch</a></li>
                      <li><a class="dropdown-item" href="#">Glasess</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                </ul>
                </div>
            </div>
          </nav>
          <!-- home content -->
        <section class="home">
            <div class="content">
                <h3>Biggest Clothe Sales
                      </h3>
                
                <button id="shopnow">Shop Now</button>
            </div>
            <div class="img">
            
                <img src="./image/about.png" alt="">
            </div>
        </section>
        <!-- home content -->
    </div>

    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard1.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Smart Watch</h5>
                        
                        <p><strong>500</strong></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard2.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Nike Shoes</h5>
                        
                        <p><strong>800</strong></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard3.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Bag</h5>
                        
                        <p><strong>400</strong></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cards -->
    

    <!-- banner -->
    <div class="banner">
        <div class="content">
              </div>
    </div>
    <!-- banner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">Best seller</h1>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p13.png" alt="">
                    <div class="card-body">
                        <h3>Men T-Shirt</h3>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                           
                        </div>
                        <h5>320 <span></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p14.png" alt="">
                    <div class="card-body">
                        <h3>Purple Heel</h3>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            
                        </div>
                        <h5>560  <span></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p15.png" alt="">
                    <div class="card-body">
                        <h3>Men Shoes</h3>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            
                        </div>
                        <h5>870 <span></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p16.png" alt="">
                    <div class="card-body">
                        <h3>Men Jacket</h3>
                        <p></p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            
                        </div>
                        <h5>570 <span></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p17.png" alt="">
                    <div class="card-body">
                        <h3>Blue T-Shirt</h3>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                           
                        </div>
                        <h5>580 <span></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p18.png" alt="">
                    <div class="card-body">
                        <h3>Girls Sandal</h3>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                          
                        </div>
                        <h5>450 <span></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p19.png" alt="">
                    <div class="card-body">
                        <h3>Men Jacket</h3>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            
                        </div>
                        <h5>600 <span></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/p20.png" alt="">
                    <div class="card-body">
                        <h3>Men T-SHirt</h3>
                        
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                           
                        </div>
                        <h5>700 <span></span></h5>
                    </div>
                </div>
            </div>
        </div>
        <a href="clothe.php" id="viewmorebtn">View More</a>
    </div>
    <!-- product cards -->

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container">
    <h3 style="font-weight: bold;">PRODUCT.</h3>
   
    <hr>
</div>
    <!-- product -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Big Choice</h5>
                
            </div>
        </div>
    </div>
<!-- offer -->






<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>Fashion</h3>
                <p>Be Stylish , be our customer </p>
                <p>
                      Bangalore <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+0000000000</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>exa@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Usefull Links</h4>
                <ul>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Privacy policay</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                
                <ul>
                    <li><a href="#">Smart phone</a></li>
                    <li><a href="#">Smart watch</a></li>
                    <li><a href="#">Airpods</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                
                <div class="socail-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong>Fashion</strong>.All Rights Reserved
    </div>
   
</footer>
<!-- footer -->
</body>
</html>