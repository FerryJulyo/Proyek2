<?php
session_start();
if(isset($_SESSION["login"]))
{
  header("location:all.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Morfeen &ndash; Distro & CLothing</title>
    <link rel="icon" href="images/logo.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
  
  <!-- SEARCH -->
  <div class="site-wrap">
    <div class="site-navbar bg-white py-2">
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Masukkan Keyword Search . . .">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="" class="js-logo-clone">Morfeen Thirteen</a>
            </div>
          </div>
        
          <div class="main-nav d-none d-lg-block icons">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children ">
                  <a href="">Login <span class="icon-user"></span></a>
                  <ul class="dropdown">
                    <li><a href="auth/login.php">Login as Customer <span class="icon-users"></span></a></li>
                    <li><a href="auth/loginadmin.php">Login as Admin <span class="icon-wrench"></span></a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start title-section mb-5 col-12 title-section text-center mb-5 col-12">
            <div class="site-block-cover-content">
            <h1 class="site-navbar site-menu">Happy Shopping</h1>
            <h2>Morfeen Thirteen</h2>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/f5.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">Discover</span> Morfeen Collections</h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-4">
          <div class="product-item sm-height  bg-gray">
              <img src="images/g22.jpeg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <img src="images/g1.jpeg" alt="Image" class="img-fluid">
            </div>
            </div>
            
            <div class="col-lg-4">
            <div class="product-item sm-height bg-gray">
              <img src="images/g7.jpeg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
    </div>

    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#Sale Collection</h2>
            <h1>New Collections Product </h1>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/g20.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Hint</h3>
            <a href="shop.php" class="block-6">
              <h3 class="font-weight-light  mb-0">Temukan clothing kesukaan mu di Morfeen</h3>
              <br>
              <p>Build on &mdash; September, 2019</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  
                </ul>
              </div>
            </div>
          </div>
          
        <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Tentang Kami :</h3>
              <ul class="list-unstyled">
                <li class="address"><a href="api1.php">Jl. Swari Selatan No. 07, Sukun, Kota Malang, Jawa Timur</a></li>
                <li class="phone"><a href="tel://">+62 81234519822</a></li>
                <li class="email">morfeen@gmail.com</li>
              </ul>
          </div>
        </div>

        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Deny Pratama | All rights reserved
            </p>
          </div>
          
        </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>