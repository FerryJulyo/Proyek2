<?php
session_start();
require 'fungsi.php';
$barang = query("SELECT * FROM barang");
$idcus = $_SESSION["idcus"];
$cekout = query("SELECT * FROM cekout WHERE idcus = '$idcus'");
$count = query("SELECT COUNT(*) as jumlah FROM addcart WHERE idcus = '$idcus'");
$cart = query("SELECT * FROM addcart where idcus = '$idcus'");
$cart1 = query("SELECT sum(harga) as tot_harga FROM cekout where idcus = '$idcus'");

if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}

///popup
foreach ($count as $c) 
  {
    $popup = ($c["jumlah"]);
  } 

  ///Total
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
    <link rel="icon" href="images/logotomat.png">
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
            <button class="btn btn-link" type="submit" name="cari"></button>
          </form> 
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="" class="js-logo-clone">Tomat Building</a>
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">INVOICE </h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group ">
                <label for="c_country" class="text-black">Daerah : </label><br>
                <?php echo $_SESSION["daerah"]; ?>
                </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nama </label><br>
                  <?php echo $_SESSION["nama"]; ?>
                </div>
                </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_address" class="text-black">Alamat </label><br>
                  <?php echo $_SESSION["alamat"]; ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Kode Pos </label><br>
                  <?php echo $_SESSION["kodepos"]; ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email </label><br>
                  <?php echo $_SESSION["email"]; ?>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone </label><br>
                  <?php echo $_SESSION["notelp"]; ?>
                </div>
              </div>
                  <h2 class="h3 mb-3 text-black">Cek Nomor Rekening Tujuan :</h2>
                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer BNI</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                      <p><img src="images/bni.png" height="200px" width="200px" alt="Image" class="img-fluid" srcset="">
                      <b>
                      <p class="mb-0">Rekening Bank BNI </p>
                      <p class="mb-0">Nomor Rekening : 101001010101</p>
                      <p class="mb-0">Atas Nama : FERRY </p>
                      </b>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer BCA</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                      <p><img src="images/bca.png" height="200px" width="200px" alt="Image" class="img-fluid" srcset="">
                      <b>
                      <p class="mb-0">Rekening Bank BCA </p>
                      <p class="mb-0">Nomor Rekening : 77777777777</p>
                      <p class="mb-0">Atas Nama : JULYO </p>
                      </b>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Konfirmasi Pembayaran</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">
                        <a href ="https://api.whatsapp.com/send?phone=6281226341584&text=Chat%20Admin%20Toko%20Material%20Tomat%20" type="button" class="btn btn-success">Konfirmasi Pembayaran</a>
                        </p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          </div>
          <br><br>
          <div class="form-group">
                <label for="c_order_notes" class="text-black text-bold"><h3>History Pesanan :</h3></label><br>
              </div>

              <?php foreach($cekout as $o):?>

              <table class="table table-hover">
                    <thead>
                      <th>Picture</th>
                      <th>Product</th>
                      <th>Harga_Satuan</th>
                      <th>Jumlah</th>
                      <th>Harga_Total</th>
                      <th>Status</th>
                      <th>Tanggal_Pembelian</th>
                      <th>Konfirmasi_Penerimaan</th>
                    </thead>
                    <tbody>                     
                      <tr>
                      <td><img height="200px" width="200px" src ="images/<?php echo $o["gambar"]; ?>"></td>
                        <td> <?php echo $o["nama"];?> <?php echo $o["satuan"];?></td>
                        <td><?php echo $o["hargasatuan"];?></td>
                        <td><?php echo $o["jumlah"]; ?></td>
                        <td><?php echo $o["harga"]; ?></td>
                        <td><b><?php echo $o["status"];?></b></td>
                        <td><?php echo $o["tanggal"];?></td>  
                        <td>
                          <a button type="submit" name ="konfirmuser" class="btn btn-lg btn-success" href="confirmuser.php ?id=<?php echo $o["idbarang"];?>">Pesanan Diterima</button></a>
                        </td>       
                      </tr>      
                      <?php endforeach; ?>
        
                      <!-- <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong> echo $total ?></strong></td>
                      </tr> -->
                      
                    </tbody>
                  </table>
        </div>
      </div>
    </div>


    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/marmerempe.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Cari Bahan Material Yang Terbaik</h3>
              <p>Promo from  July 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
             
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Tentang Kami :</h3>
              <ul class="list-unstyled">
                <li class="address">Jl. Raya rengel, Kec. Rengel, Kab. Tuban</li>
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Pesimis Optimis | All rights reserved
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