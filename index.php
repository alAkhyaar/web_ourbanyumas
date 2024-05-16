<?php
session_start();
$sesiData = !empty($_SESSION['sesiData']) ? $_SESSION['sesiData'] : '';
if (!empty($sesiData['status']['msg'])) {
  $statusPsn = $sesiData['status']['msg'];
  $jenisStatusPsn = $sesiData['status']['type'];
  unset($_SESSION['sesiData']['status']);
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OurBanyumas</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/font-icon.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/logoblack.png">
  <style>
    .btn {
      background-color: gray;
      color: #FA4;
      font-size: 13px;
      font-weight: 600;
      border: 0;
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      border-radius: 2px;
      display: inline-block;
      text-transform: uppercase;
      opacity: 0.8;
    }
  </style>
</head>

<body>
  <!-- header  -->
  <section class="banner" role="banner">
    <header id="header" font-color: #000000>
      <div class="header-content clearfix"> <a class="logo" href="index.php">OurBanyumas</a>
        <nav class="navigation" role="navigation">
          <ul class="primary-nav">
            <li><a href="index.php">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a style="color:grey" href="kolamrenang.php">Kolam Renang</a>
                </li>
                <li>
                  <a style="color:grey" href="wisataalam.php">Wisata Alam</a>
                </li>
                <li>
                  <a style="color:grey" href="wisatamodern.php">Wisata Modern</a>
                </li>
              </ul>
            </li>
            <li><a href="artikel.php">Artikel</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="transbanyumas.php">Trans Banyumas</a></li>
            <li><a href="testimonial.php">Testimonial</a></li>
            <li><a href="tentang.php">Tentang Kami</a></li>
            <?php
            if (!isset($_SESSION['is_login'])) {
            ?>
              <li>
                <a href="login.php">Login</a>
              </li>
            <?php } else { ?>
              <li>
                <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser']; ?>)</a>
              </li><?php } ?>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
    </header>
    <!-- banner text -->
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <!--<p><a class="navbar-brand"><img src="images/logo.png" class="img-responsive" style="width: 1400px; margin-top: -130px;"></a></p>-->
          <!-- banner text -->
        </div>
      </div>
  </section>
  <!-- header  -->
  <!-- intro  -->
  <section id="intro" class="section intro">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h3>SELAMAT DATANG</h3>
        <p>Sebuah website yang menyajikan objek - objek wisata sekitar Banyumas yang cocok bagi Anda yang bingung mencari tempat wisata di sekitar Banyumas</p>
      </div>
    </div>
  </section>
  <!-- intro  -->
  <!-- services  -->
  <section id="services" class="services service-section">
    <div class="container">
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!--Satu-->
          <iframe width="750" height="400" src="https://www.youtube.com/embed/u9N6gPT3GZk" frameborder="0" allowfullscreen></iframe>
          <p>
          <h4>Tirto Asri Walik</h4>
          </p>
          <p class="justify">Pemandian ini merupakan salah satu yang tertua di kabupaten purbalingga. Memiliki satu buah kolam renang berukuran 20×40 M dan sebuah kolam renang khusus anak, pemandian ini telah menjadi salah satu tempat favorit bagi banyak warga Purbalingga sejak bertahun silam.Terletak di dusun Walik, Desa Kutasari, pemandian ini di airi dengan mata air alami yang sejuk dan menyegarkan.</p>
          <br>
          <br>
          <br>

          <!--Dua-->
          <hr>
          <iframe width="750" height="400" src="https://www.youtube.com/embed/sP4sKruPSII" frameborder="0" allowfullscreen></iframe>
          <p>
          <h4>Tirta Kembar</h4>
          </p>
          <p class="justify">Banyak pengunjung datang ke sana karena alasan harga tiket masuknya yang murah. Tapi untuk kualitasnya hampir sama seperti kolam renang pada umumnya. Hingga kini kolam renang Tirta Kembar masih ramai pengunjung yang berdatangan. Biasanya pada akhir pekan, jumlah pengunjungnya bisa meningkat. Untuk itu harus dipersiapkan waktu yang tepat agar bisa menikmati segala hal yang ada di kolam renang tersebut. Tak perlu khawatir kualitas airnya lagi, karena di sana sudah sesuai standar yang ada.</p>
          <br>
          <br>
          <br>

          <!--Tiga-->
          <hr>
          <iframe width="750" height="400" src="https://www.youtube.com/embed/vwrKwqczUKI" frameborder="0" allowfullscreen></iframe>
          <p>
          <h4>Curug Gomblang</h4>
          </p>
          <p class="justify">Daya tarik yang pertama dari Curug Gomblang Kabupaten Banyumas, tentu saja kehadiran air terjun yang eksotis, di alam yang masih terjaga kelestariaanya. Bukti alamnya masih lestari adalah, kondisi air yang tidak pernah surut sepanjang tahun. Ditambah lagi airnya sangat jernih, bebas dari sampah. Curug Gomblang memiliki ketinggian sekitar 50 meter. Dan kolam utamanya yang lebar, namun tidaklah dalam, sehingga para pengunjung bebas untuk bermain air.</p>
          <br>
          <br>
          <br>

          <!--Empat-->
          <hr>
          <iframe width="750" height="400" src="https://www.youtube.com/embed/1E0UC_SNmRk" frameborder="0" allowfullscreen></iframe>
          <p>
          <h4>Bukit Watu Meja</h4>
          </p>
          <p class="justify">Bukit Watu Meja menyajikan pesona pemandangan alam yang akan mendamaikan jiwa serta pikiran yang jenuh dan penat. Banyumas memang tak akan ada habisnya menghadirkan tempat-tempat wisata baru dan pastinya rekomended. Salah satu tempat piknik dengan sajian alam dan spot foto kece di Banyumas yaitu Bukit Watu Meja. Liburan memang tak akan lengkap ketika melewatkan aktivitas hunting foto, apalagi di zaman milenial saat ini. Dapatkan foto rekomended dengan landmark alam yang indah dari Bukit Watu Meja Banyumas.</p>
          <br>
          <br>
          <br>

          <!--Lima-->
          <hr>
          <iframe width="750" height="400" src="https://www.youtube.com/embed/FqF5XJH4ySk" frameborder="0" allowfullscreen></iframe>
          <p>
          <h4>Bendungan Gerak Serayu</h4>
          </p>
          <p class="justify">Sebuah danau buatan yang sangat indah. Berada di daerah Gambarsari, Kebasen. Dengan tarif gratis kamu sudah bisa menikmati bendungan yang merupakan pertemuan dari delta sungai logawa dan Serayu ini. Sebenarnya fungsi utama dari bendungan ini sebagai media irigasi utuk persawahan yang mencang area kabupaten Banyumas. Namun tetap masih bisa dijadikan tujuan wisata kamu kok. Jadi jangan lupa mampir ya.</p>
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Blog Search Well -->
          <div class="well">
            <h4>Pencarian</h4>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
            <!-- /.input-group -->
          </div>

          <!-- Blog Categories Well -->
          <div class="well">
            <h4>Kategori</h4>
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled">
                  <li>
                    <a href="kolamrenang.php">Kolam Renang</a>
                  </li>
                  <li>
                    <a href="wisataalam.php">Wisata Alam</a>
                  </li>
                  <li>
                    <a href="wisatamodern.php">Wisata Modern</a>
                  </li>
                </ul>
              </div>
              <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- Side Widget Well -->
          <div class="well">
            <h4>Wisata di Banyumas</h4>
            <section>
              <div class="container-fluid">
                <div class="row no-gutter">
                  <div class="flexslider">
                    <ul class="slides">
                      <li>
                        <img href="wisataalam.php" src="images/foto/alam/lokawisata1.jpg" style="height: 100%">
                      </li>
                      <li>
                        <img href="wisataalam.php" src="images/foto/kolamrenang/walik1.jpg" style="height: 100%">
                      </li>
                      <li>
                        <img href="wisataalam.php" src="images/foto/modern/maskumambang3.jpg" style="height: 100%">
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <p id="demo"></p>
          <script>
            document.getElementById("demo").innerHTML = Date();
          </script>
          <section id="services" class="services service-section">
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <h6 align="center" style="color:black">Mengapa memilih OurBanyumas ?</h6>
      <section id="services" class="services service-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-global" style="color:#F60"></span>
              <div class="services-content">
                <h5>Terlengkap dan terupdate</h5>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart" style="color:#F60"></span>
              <div class="services-content">
                <h5>Informasi terpercaya</h5>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-paperclip" style="color:#F60"></span>
              <div class="services-content">
                <h5>Testimonial Pengunjung</h5>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>


  <!-- Footer  -->
  <footer class="footer">
    <div class="footer-top section">
      <div class="container" align="center">
        <div class="row">
          <a style="padding:20px" ; href="#"><i class="fa fa-facebook"></i></a>
          <a style="padding:20px" ; href="#"><i class="fa fa-twitter"></i></a>
          <a style="padding:20px" ; href="#"><i class="fa fa-linkedin"></i></a>
          <a style="padding:20px" ; href="#"><i class="fa fa-google-plus"></i></a>
          <br>
          <br>
          <p>Copyright © 2022 ourbanyumas.com All Rights Reserved. Made by Akhyaar</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->

  <!-- Footer -->
  <!-- JS FILES -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/retina.min.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="js/jquery.contact.js"></script>
</body>

</html>