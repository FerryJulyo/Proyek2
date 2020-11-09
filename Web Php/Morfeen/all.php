<?php
session_start();
require 'fungsi.php';
$barang = query("SELECT * FROM barang");
// var_dump($_SESSION["username"]);
if (isset($_POST["cari"]))
{
    //cari adalah function cari dari keyword adalah name dari inputan text
    $barang = cari($_POST["keyword"]);
}

if(isset($_POST["cart"]))
{
  if($_POST > 0)
  {
    $idcus = $_SESSION["idcus"];
    $id = $_POST["cart"];
    $query1 = query("SELECT * from barang where idbarang = '$id'");
    $query2 = query("SELECT * from addcart where idadd = '$id' and idcus = '$idcus'");

    // var_dump($query2);
    foreach ($query1 as $k) 
    {
      $quantity = $_POST["quan"];
      $jenis = $k["jenis"];
      $warna = $k["warna"];
      $size = $k["size"];
      $hargasatuan = $k["harga"];
      $hargatotal = $quantity * $k["harga"];
      $gambar = $k["gambar"];
    }
    // var_dump($id,$k);
    
    if($query2)
    {
      echo "<script>
      alert('Data Sudah Ada')
              </script>
          ";
    }
    else 
    {
      $query="INSERT INTO addcart
      VALUES
      ('$id','$idcus','$jenis','$warna','$size','$hargasatuan','$hargatotal','$gambar','$quantity')";
      mysqli_query($conn,$query);
      
      $result = mysqli_query ($conn,"SELECT * FROM addcart WHERE idcus = '$idcus'");
      if (mysqli_num_rows($result)==1)
        {
          $row=mysqli_fetch_assoc($result);
          $_SESSION["idadd"] = $row["idadd"];
        }

    }

    if(mysqli_affected_rows($conn)>0)
    {
        echo "
            <script>
    alert('data berhasil disimpan')
            </script>
        ";
    }
    else
    {
        echo "
            <script>
    alert('data gagal disimpan')
    history.back(self);
            </script>
        ";
        echo "<br>";
        echo mysqli_error($conn);
      }

  }
}

///popup
$idcus = $_SESSION["idcus"];
$count = query("SELECT COUNT(*) as jumlah FROM addcart WHERE idcus = '$idcus'");

foreach ($count as $c) 
          {
            $popup = ($c["jumlah"]);
} 

//popup checkout
$idcus = $_SESSION["idcus"];
$countcek = query("SELECT COUNT(*) as jumlah_cek FROM cekout WHERE idcus = '$idcus'");

foreach ($countcek as $ca) 
          {
            $popupcek = ($ca["jumlah_cek"]);
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
  <div class="site-wrap icons">
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
              <a class="js-logo-clone">Morfeen Thirteen</a>
            </div>
          </div>
        
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="all.php">Catalog Product</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="tracking.php">Pesanan Saya </a></li>
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

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start title-section mb-5 col-12 title-section text-center mb-5 col-12">
            <div class="site-block-cover-content">
            <h1 class="site-navbar site-menu">ALL Product</h1>
            <h2>Morfeen Thirteen</h2>
            <!-- <p><a href="shop.php" class="btn btn-black rounded-0">Belanja Sekarang</a></p> -->
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/g1.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">ALL Products</h2>
          </div>
        <!-- </div> -->

        <form method="post" action="">
        <div class="row icons">
          <?php foreach($barang as $row):?>
          
          <div class="col-lg-4 col-md-6 item-entry mb-4">
              <a class="product-item md-height bg-gray d-block">
                <img src ="images/<?= $row["gambar"]; ?>" name="g" alt="Image" class="img-fluid"> 
                <input type="hidden" name="g" value="<?=$row["gambar"] ;?>">
              </a>
              <h3 class="item-title" ><?=$row["jenis"]; ?> <input type="hidden" name="j" value="<?=$row["jenis"] ;?>"></h3>
              <h3 class="item-title" name="w">Warna <?=$row["warna"]; ?> <input type="hidden" name="w" value="<?=$row["warna"] ;?>"></h3> 
              <h3 class="item-title" name="s">Size <?=$row["size"]; ?> <input type="hidden" name="s" value="<?=$row["size"] ;?>"></h3> 
              <h3 class="item-title">Stok : <?=$row["stok"]; ?></h3>
              <strong class="item-price" name="h">Rp. <?=$row["harga"]; ?> <input type="hidden" name="h" value="<?=$row["harga"] ;?>"> </strong>
              
              <br><br>           
              <a class="btn btn-primary" data-toggle="modal" href='#modal-id<?=$row["idbarang"]; ?>'>Add to Cart <span class="icon-cart-plus"></span></a>
              <div class="modal fade" id="modal-id<?=$row["idbarang"]; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add To Cart</h4>
                      </div>

                      <div class="modal-body">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th class="text-center">
                              <img src ="images/<?= $row["gambar"]; ?>" alt="Image" class="img-fluid" height="200px" width="200px">
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td><?=$row["jenis"]; ?> <?=$row["warna"]; ?></td>
                          </tr>
                          <tr>
                              <td>Size : <?=$row["size"]; ?></td>
                          </tr>
                          <tr>
                              <td>Harga : Rp. <?=$row["harga"]; ?></td>
                          </tr>
                          <tr>
                              <td>Stok : <?=$row["stok"]; ?></td>
                          </tr>
                          </tbody>
                        </table> 
                      </div>

                      <h4>Quantity:</h4>
                      <div class="mb-2">
                        <input type="text" name="quan" value="1" class="counter"/>
                        
                        <button type="button"  class="decrement-btn"><b>-</b></button>
                        <button type="button"  class="increment-btn"><b>+</b></button>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="cart" value="<?=$row["idbarang"] ; ?>" class="btn btn-primary">Add</button>

                      </div>
                    </div>
                  </div>
              </div>
              </div>
          <?php endforeach;?>
        </form>
      

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

<script>
  var $button = $('.increment-btn');
  var $button1 = $('.decrement-btn');
  var $counter = $('.counter');
  $button.click(function()
  {
    $counter.val( parseInt($counter.val()) + 1 ); // `parseInt` converts the `value` from a string to a number
  }
  );$button1.click(function()
  {
    $counter.val( parseInt($counter.val()) - 1 ); // `parseInt` converts the `value` from a string to a number
  }
  );
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>