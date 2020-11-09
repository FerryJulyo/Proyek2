<?php
 session_start();
 require 'fungsi.php';

 $ca = querycart("SELECT * FROM addcart");
 $idcus = $_SESSION["idcus"];
 
 $cart = query("SELECT * FROM addcart where idcus = '$idcus'");
 $cart1 = query("SELECT sum(harga) as tot_harga FROM addcart where idcus = '$idcus'");
 $carth = query("SELECT harga as sub_harga FROM addcart where idcus = '$idcus'");
 $count = query("SELECT COUNT(*) as jumlah FROM addcart WHERE idcus = '$idcus'");

 if (isset($_POST["ca"]))
 {
     //cari adalah function cari dari keyword adalah name dari inputan text
     $ca = caricart($_POST["keyword"]);
 }

///popup
foreach ($count as $c) 
  {
    $popup = ($c["jumlah"]);
  } 

///total
foreach ($cart1 as $s)
{
  $subtot = $s["tot_harga"];
  $total = $subtot;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Tomat &ndash; Distro & CLothing</title>
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
          <form action="#" method="post">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <input  type="text" name="keyword" class="form-control" placeholder="Search . . ." autocomplete="off" required="required">
            <button class="btn btn-link" type="submit" name="ca"></button>
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a  class="js-logo-clone">Tomat Building</a>
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
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number"><?php echo $popup?></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Picture</th>
                    <th class="product-name">Nama</th>
                    <th class="product-name">Satuan</th>
                    <!-- <th class="product-name">Size</th> -->
                    <th class="product-name">Harga Satuan</th>
                    <th class="product-price">Jumlah</th>
                    <th class="product-price">Harga Total</th>
                    <th class="product-remove">Remove from Cart</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($cart as $row):?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?= $row["gambar"]; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?= $row["nama"]; ?></h2>
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?= $row["satuan"]; ?></h2>
                    </td>
                    <!-- <td class="product-name">
                      <h2 class="h5 text-black"><?= $row["size"]; ?></h2>
                    </td> -->
                    <td  class="product-name"> 
                    <h2 class="h5 text-black">Rp. <?= $row["hargasatuan"]; ?></h2>
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?= $row["jumlah"]; ?></h2>
                    </td>
                    <td  class="product-name"> 
                    <h2 class="h5 text-black">Rp. <?= $row["harga"]; ?></h2>
                    </td>
                    
                    <td><a class="btn btn-primary height-auto btn-sm" 
                    href="hapuscart.php ?id=<?php echo $row["idadd"];?>"onclick="return confirm('Apakah Cart akan dihapus?')">X</a></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <!-- <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div> -->
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block" onclick="window.location.href='all.php'">Continue Shopping</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal : </span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">
                    </strong>
                  </div>
                </div> -->
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total : </span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Rp. <?php echo $total ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Hint</h3>
            <a href="#" class="block-6">
              <img src="images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Temukan clothing kesukaan mu di Tomat</h3>
              <p>Build on &mdash; September, 2019</p>
            </a>
          </div>
          <!-- <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Links</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div> -->
          
          <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Tentang Kami :</h3>
              <ul class="list-unstyled">
                <li class="address">Jl. Swari Selatan No. 07, Sukun, Kota Malang, Jawa Timur</li>
                <li class="phone"><a href="tel://23923929210">+62 1011001110010</a></li>
                <li class="email">emailaddress@domain.com</li>
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