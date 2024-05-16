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
</head>

<body>
  <!-- header section -->
  <section>
    <header id="header">
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
            <li><a href="transbanyumas.php">Trans Banyumas</li>
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
  </section>
  <!-- header section -->
  <!-- intro section -->
  <section id="intro" class="section intro">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <br>
        <h6>WISATA PENDIDIKAN</h6>
      </div>
    </div>
  </section>
  <!-- intro section -->
  <!-- services section -->

  <section id="services" class="services service-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <section id="testimonials" class="section testimonials no-padding">
            <div class="container-fluid">
              <div class="row no-gutter">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="images/foto/modern/smallworld1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/smallworld2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/smallworld3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Taman Miniatur Dunia ( Small World)</h2>
          <p>Tak perlu jauh – jauh untuk melihat berbagai bangunan yang masuk keajaiban dunia, di Purwokerto juga ada Taman Miniatur Dunia atau Small World Purwokerto. Sebuah tempat rekreasi sekaligus wahana edukasi yang berisi berbagai miniatur mahakarya luar biasa yang tersebar diberbagai belahan dunia.</p>
          <p>Sebagai wahana rekreasi sekaligus edukasi, rencananya Small World ini akan memiliki banyak sekali miniatur bangunan terkenal dari seluruh dunia, seperti (yang sudah ada) Kincir Angin khas Belanda dengan bunga tulip yang khas, Patung Merlion, Twin Tower, Big Ben, Colosseum, Angkorwatt, Menara Eiffel, Kinkakuji, Taman Bunga Sakura, Opera House Sidney dan banyak lainnya.</p>
          <p>Tiket Weekday Dewasa 20 ribu, Anak-anak sampai 12 Tahun 10 ribu. Weekend (Sabtu-Minggu) Dewasa 25 ribu, anak-anak 15 ribu. Buka setiap hari mulai jam 7 pagi sampai 5 sore.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Jl. Raya Baturaden Barat No.270, Ketenger, Dusun I Karangmangu, Karangmangu, Kec. Baturaden, Purwokerto, Jawa Tengah 53151</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak Tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>081218063535</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </section>
  <section id="services" class="services service-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <section id="testimonials" class="section testimonials no-padding">
            <div class="container-fluid">
              <div class="row no-gutter">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="images/foto/modern/bendungan1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/bendungan2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/bendungan3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Bendungan Gerak Serayu</h2>
          <p>Sebuah danau buatan yang sangat indah. Berada di daerah Gambarsari, Kebasen. Dengan tarif gratis kamu sudah bisa menikmati bendungan yang merupakan pertemuan dari delta sungai logawa dan Serayu ini. Sebenarnya fungsi utama dari bendungan ini sebagai media irigasi utuk persawahan yang mencang area kabupaten Banyumas. Namun tetap masih bisa dijadikan tujuan wisata kamu kok. Jadi jangan lupa mampir ya.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Bendungan gerak serayu, Area Sawah/Kebun, Gambarsari, Kec. Rawalo, Kabupaten Banyumas, Jawa Tengah</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak Tersedia</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </section>
  <section id="services" class="services service-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <section id="testimonials" class="section testimonials no-padding">
            <div class="container-fluid">
              <div class="row no-gutter">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="images/foto/modern/menara1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/menara2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/menara3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Menara Pandang Teratai</h2>
          <p>Pada 27 April 2022, menara itu resmi dibuka untuk umum. Tak hanya kemegahannya, bagian dalam menara itu juga memiliki berbagai fasilitas mewah. Dari atas menara itu pengunjung bisa melihat ke seluruh Kota Purwokerto.</p>
          <p>Dari atas menara itu, pengunjung dapat melihat pemandangan hamparan Kota Purwokerto. Karena berada di ketinggian, kencangnya angin sepoi-sepoi begitu terasa saat pengunjung berada di puncak menara ini. Salah satu keunikan yang bisa ditemui di menara itu adalah jembatan kaca yang berada di lantai 3 menara. Saat melintas di atas jembatan kaca ini, pengunjung akan merasa sedang berjalan di atas awan. Jembatan kaca itu sendiri berada pada ketinggian 70-80 meter.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>H69J+GX, Sawangan, Kedungwuluh, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak Tersedia</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </section>
  <section id="services" class="services service-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <section id="testimonials" class="section testimonials no-padding">
            <div class="container-fluid">
              <div class="row no-gutter">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="images/foto/modern/maskumambang1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/maskumambang2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/modern/maskumambang3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Taman Maskumambang</h2>
          <p>Taman Balai Kemembang ini berdiri di atas lahan seluas 1,2 hektare, di dalam taman terdapat kolam yang besar yang dikelilingi pepohonan, taman, dan jogging track. Taman ini dilengkapi juga dengan taman bermain yang cukup lengkap, seperti ayunan, perosotan, jungkat-jungkit dan lain-lain Kolam yang memiliki kedalaman 1,6 meter ini terdapat ikan berwarna-warni yang bisa menjadi hiburan tersendiri.</p>
          <p>Mengapung, di atas kolam seluas kurang lebih 250 meter persegi ada sebuah balai kecil yang mengambang ditengah-tengah kolam. Untuk bisa masuk taman balai Kemambang pengunjung cukup merogoh kocek Rp.2.500,- untuk dewasa dan Rp.1.000,- untuk anak. Jam operasional Taman ini mulai buka pukul 07.00 WIB dan tutup pada pukul 22.00 WIB. </p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Jl. Karang Kobar No.9, Glempang, Bancarkembar, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53115</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak Tersedia</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </section>
  <!-- services section -->
  <!-- work section -->
  <!-- overlay -->
  <!-- work section -->
  <!-- our team section -->
  <!-- our team section -->
  <!-- Testimonials section -->
  <!-- Testimonials section -->
  <!-- contact section -->
  <!-- contact section -->

  <!-- Footer section -->
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
  <!-- footer top -->

  <!-- Footer section -->
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