<?php
session_start();
require 'fungsi.php';
$barang = query("SELECT * FROM barang");

if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Tomat &ndash; Toko Material</title>
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
  
  <div class="site-wrap">
    <div class="site-navbar bg-white py-2">
    <h3><font color="#000000"><span class="icon-user-circle-o"></span>  Selamat Datang : <?php echo $_SESSION["nama"]; ?></font></h3>
      <div class="search-wrap">
        <div class="container">
        <!-- <form action="#" method="post">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <input  type="text" name="keyword" class="form-control" placeholder="Search . . ." autocomplete="off" required="required">
            <button class="btn btn-link" type="submit" name="cari"></button>
          </form> -->
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a class="js-logo-clone">Tomat Building</a>
            </div>
          </div>
        
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="all.php">Catalog Product</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="tracking.php">Pesanan Saya</a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <!-- <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a> -->
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start title-section mb-5 col-12 title-section text-center mb-5 col-12">
            <div class="site-block-cover-content">
            <h1 class="site-navbar site-menu">Contact</h1>
            <h2>Tomat Building</h2>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/intro.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Contact Tomat :</h2>
          </div>
          <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Hint</h3>
            <a href="shop.php" class="block-6">
              <h3 class="font-weight-light  mb-0">Temukan Bahan Bangunan di Tomat</h3>
              <br>
              <p>Dibuat &mdash; November, 2020</p>
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
                <li class="address"><a href="api1.php">Jl Untung Suropati, Kota Bojonegoro, Jawa Timur</a></li>
                <li class="phone"><a href="tel://">+62 82338152403</a></li>
                <li class="email">tokomaterial.kelompokp0@gmail.com</li>
              </ul>
          </div>
        </div>

        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Pesimis Optimis | All rights reserved
            </p>
          </div>
          
        </div>
    </footer>



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