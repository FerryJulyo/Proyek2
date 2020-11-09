<?php
session_start();
require 'fungsi.php';
$barang = query("SELECT * FROM barang");
$cekout = query("SELECT * FROM cekout ");

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
              <a class="js-logo-clone">Tomat Building</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a>../</a> <span class="mx-2 mb-0"></span> <a>../</a> <span class="mx-2 mb-0"></span> <strong class="text-black">Konfirmasi Pembayaran</strong></div>
        </div>
      </div>
    </div>

    <form action="" method="post">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
          <form action="" method="post">
            <h2 class="h3 mb-3 text-black">KONFIRMASI PEMBAYARAN </h2>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID_CekOut</th>
                            <th>ID_Customer</th>
                            <th>Nama</th>
                            <th>Picture</th>
                            <th>Satuan</th>
                            <th>Tanggal</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $i=1 ?>
			        <?php foreach($cekout as $row):?>
                    <tbody>
                        <tr>
                            <td><?= $i;?></td>
                            <td><?= $row["idcek"]; ?></td>
                            <td><?= $row["idcus"]; ?></td>
                            <td><?= $row["nama"]; ?></td>
                            <td><img src ="images/<?= $row["gambar"]; ?>" height="200px" width="200px"></td>
                            <td><?= $row["satuan"]; ?></td>
                            <td><?= $row["tanggal"]; ?></td>
                            <td><?= $row["hargasatuan"]; ?></td>
                            <td><?= $row["jumlah"]; ?></td>
                            <td><?= $row["harga"]; ?></td>
                            <td><?= $row["status"]; ?></td>
                            <td>
                            <a button type="submit" name ="konfirm" class="btn btn-lg btn-success" href="confirm.php ?id=<?php echo $row["idbarang"];?>">Konfirmasi</button></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php $i++ ?>
				    <?php endforeach;?>
                </table>
                </form>
          </div>
          </div>
          <button onclick="window.location.href='tambah/tambah.php'" type="button" class="btn btn-info">Back to Previous</button>
        </div>
      </div>
    </div>
    </form>
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