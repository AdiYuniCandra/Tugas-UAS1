<?php 
      
      include_once("config/helper.php");
      include_once("config/koneksi.php");

      $kategori_id= isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Juragan_Adi</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL."css/bootstrap.min.css"; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL."css/shop-homepage.css"; ?>" rel="stylesheet">

  </head>

  <body>

   
    </main>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Juragan_Adi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo URL; ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL."dashboard/dashboard.php?menu=barang&action=list"; ?>">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     <hr class="divider" />
        <div class="entry">
            <h2>ONLINE SHOP.</h2>
            <img src="shofon.jpg"/
            width=”30″ height=”50″ />
            <p>Barang yang kami kirim akan terjamin keasliannya.</p>
            <hr class="divider" />
            <h2>TOKO.</h2>
            <img src="toko.jpg" class="right-img" /
            width="300px" height="300px" />
            <p>Datangi toko kami yang berada di Perum Griya Hegar Asri Blok C6 No.16.</p>
        </div>
      </hr>

    <!-- Page Content -->
    <hr class="divider" />
 
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"> &copy; Juragan_Adi</p>
      </div>
      <!-- /.container -->

    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo URL."js/jquery.min.js"; ?>"></script>
    <script src="<?php echo URL."js/bootstrap/bootstrap.bundle.min.js"; ?>"></script>

  </body>

</html>
