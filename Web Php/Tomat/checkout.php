<?php
error_reporting(0);
session_start();
require 'fungsi.php';
$idcus = $_SESSION["idcus"];
$barang = query("SELECT * FROM barang");
$cart = query("SELECT * FROM addcart where idcus = '$idcus'");
$cart1 = query("SELECT sum(harga) as tot_harga FROM addcart where idcus = '$idcus'");
$count = query("SELECT COUNT(*) as jml FROM addcart WHERE idcus = '$idcus'");
$arr = array();
$arr_id = array();
if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}

///popup
foreach ($count as $c) 
  {
    $popup = ($c["jml"]);
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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black"></h2>
            <div class="p-3 p-lg-5 border">
              <!-- <div class="form-group ">
                <label for="c_country" class="text-black">Daerah </label>
                <h3><?php echo $_SESSION["daerah"] ?></h3>
                </div>
              <div class="form-group row"> -->
                <div class="col-md-12">
                  <label for="c_fname" class="text-black">Nama </label>
                  <h3><?php echo $_SESSION["nama"] ?></h3>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Alamat </label>
                  <h3><?php echo $_SESSION["alamat"] ?></h3>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Kode Pos </label>
                  <h3><?php echo $_SESSION["kodepos"] ?></h3>
                </div>
              </div>


              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email </label>
                  <h3><?php echo $_SESSION["email"] ?></h3>
                </div>
                
			  </div>
			  <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone </label>
                  <h3><?php echo $_SESSION["notelp"] ?></h3>
                </div>
              </div>
              <form action="" method="post">
              </div>

            </div>
          </div>
            <br><br>
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black" >Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Picture</th>
                      <th>Product</th>
					  <th>Satuan</th>
					  <th>Jumlah</th>
                      <th>Harga Satuan</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                    <?php foreach($cart as $o):?>
                      <tr>
                        <td><img src="images/<?= $o["gambar"]; ?>" height="200px" width="200px"></td>
                        <td> <?php echo $o["nama"]; ?> </td>
						<td><?php echo $o["satuan"]; ?></td> 
						<td><?php echo $o["jumlah"]; ?></td>
                        <td>Rp. <?php echo $o["hargasatuan"];?></td>
                        <td>Rp. <?php echo $o["harga"]; ?></td>
                      </tr>
                      <?php $id = $o["idadd"]; 
                            $q = query("SELECT * FROM barang WHERE idbarang LIKE '$id'");
                            foreach($q as $k){
                              $n_id = $k["idbarang"];
                              $tot = $k["stok"];
                              $st_br = $tot - $o["jumlah"];
                              array_push($arr,$st_br);
                              array_push($arr_id,$n_id);
                            }
                      ?>                    
                      <?php endforeach;?>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td></td>
                        <td></td>
                        <td class="text-black font-weight-bold"><strong>Rp. <?php echo $total ?></strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <h2 class="h3 mb-3 text-black">Cek Nomor Rekening Tujuan :</h2>
                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Bank Transfer BNI</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                      <p><img src="images/bni.png" height="200px" width="200px" alt="Image" class="img-fluid" srcset="">
                      <b>
                      <p class="mb-0">Rekening Bank BNI </p>
                      <p class="mb-0">Nomor Rekening : 10101010101</p>
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

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="order">Order</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    </form>


    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Temukan Material terbaik di Tomat</h3>
              <p>November, 2020</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
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
<?php

if(isset($_POST['order']))
  {
    date_default_timezone_set('Asia/Jakarta');

    for ($i=0; $i < count($arr); $i++) { 
        $updt = "UPDATE barang SET stok = '$arr[$i]' WHERE idbarang LIKE '$arr_id[$i]'";
        mysqli_query($conn,$updt);
    }

      foreach ($cart as $f):
        {
          $idadd = $f["idadd"];
          $nama = $_SESSION["nama"];
          $alamat = $_SESSION["alamat"];
          $kodepos = $_SESSION["kodepos"];
          $material = $f["nama"];
          $satuan = $f["satuan"];
          $hargasatuan = $f["hargasatuan"];
          $harga = $f["harga"];
          $gambar = $f["gambar"];
          $tgl = date("Y-m-d H:i:s");
          $jumlah = $f["jumlah"];
          $status = "Ordered";

            $query="INSERT INTO cekout
            VALUES
            ('','$idcus','$idadd','$nama','$alamat','$material','$satuan','$hargasatuan','$harga','$gambar','$tgl','$jumlah','$status')";
            mysqli_query($conn,$query);
        }
      endforeach;

      $query = "DELETE FROM addcart WHERE idcus = '$idcus'";
      mysqli_query($conn,$query);

      if(mysqli_affected_rows($conn)>0)
      {
          echo "
              <script>
      alert('CheckOut Berhasil')
      document.location.href='thankyou.php';
              </script>
          ";
      }
      else
      {
          echo "
              <script>
      alert('CheckOut Gagal')
      history.back(self);
              </script>
          ";
          echo "<br>";
          echo mysqli_error($conn);
      }
}
?>