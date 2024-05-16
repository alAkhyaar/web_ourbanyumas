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
        <h6>WISATA ALAM</h6>
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
                      <img src="images/foto/alam/lokawisata1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/lokawisata2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/lokawisata3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Lokawisata Baturraden</h2>
          <p>Di lokawisata ini tersedia berbagai pilihan wahana wisata antara lain wisata air berupa air macur, seluncur air, curug/ air terjun, pemandian air panas belerang, sepeda air dan masih banyak yang lainnya. Ada pula wahana kolam renang di lokawisata ini.</p>
          <p>Bahkan tahun ini lokawisata Baturraden kembali menyajikan wahana baru berupa zip bike atau sepeda gantung dan swing montain (ayunan) untuk menyambut wisatawan saat libur lebaran tahun ini. Kedua wahana baru tersebut, juga dijadikan tempat selfie berlatar pemandangan Baturraden yang indah. Untuk mencoba wahana sepeda gantung tersebut, pengunjung dikenakan biaya Rp 20 ribu sekali naik. Sedangkan untuk berfoto di ayunan yang berlatar belakang jurang dan pepohonan pinus, juga dikenakan biaya sebesar Rp 20 ribu. Tiket masuk lokawisata ini cukup terjangkau hanya berkisar 14 ribu rupiah per orang</p>
          <br>
        </div>
      </div>
      <section id="services" class="services service-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
              <div class="services-content">
                <p>Lokawisata, Dusun I Karangmangu, Karangmangu, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
              <div class="services-content">
                <p>Tidak tersedia</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
              <div class="services-content">
                <p>081328111191</p>
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
                      <img src="images/foto/alam/gomblang1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/gomblang2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/gomblang3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Curug Gomblang</h2>
          <p>Daya tarik yang pertama dari Curug Gomblang Kabupaten Banyumas, tentu saja kehadiran air terjun yang eksotis, di alam yang masih terjaga kelestariaanya. Bukti alamnya masih lestari adalah, kondisi air yang tidak pernah surut sepanjang tahun. Ditambah lagi airnya sangat jernih, bebas dari sampah. Curug Gomblang memiliki ketinggian sekitar 50 meter. Dan kolam utamanya yang lebar, namun tidaklah dalam, sehingga para pengunjung bebas untuk bermain air.</p>
          <p>Harga tiket masuk Curug Gomblang ini pun juga cukup murah, yakni hanya sebesar Rp 5.000 per orang, tiket parkir motor Rp. 2.000, tiket parkir mobil Rp. 5.000. Fasilitas di Curug Gomblang bisa diblang sudah sangat memadai. seperti : Toilet, Kantin, Gazebo, dan Area Parkir.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Dusun III, Kalisalak, Kec. Kedungbanteng, Kabupaten Banyumas, Jawa Tengah 53152</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>curugpwt.blogspot.com</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>081391615829</p>
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
                      <img src="images/foto/alam/watumeja1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/watumeja2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/watumeja3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Bukit Watu Meja</h2>
          <p>Bukit Watu Meja menyajikan pesona pemandangan alam yang akan mendamaikan jiwa serta pikiran yang jenuh dan penat. Banyumas memang tak akan ada habisnya menghadirkan tempat-tempat wisata baru dan pastinya rekomended. Salah satu tempat piknik dengan sajian alam dan spot foto kece di Banyumas yaitu Bukit Watu Meja. Liburan memang tak akan lengkap ketika melewatkan aktivitas hunting foto, apalagi di zaman milenial saat ini. Dapatkan foto rekomended dengan landmark alam yang indah dari Bukit Watu Meja Banyumas.</p>
          <p>Berkunjung ke obyek wisata alam Bukit Watu Meja, anda tidak perlu mengeluarkan banyak biaya. Karena harga tiket masuk wisata alam Bukit Watu Meja yaitu Rp.7.000/orang.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>F6J7+9RR, Jl. Raya Patikraja - Kebasen, Tumiyang Kidul, Tumiyang, Kec. Kebasen, Kabupaten Banyumas, Jawa Tengah 53172</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak tersedia</p>
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
                      <img src="images/foto/alam/jenggala1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/jenggala2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/alam/jenggala3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Curug Jenggala</h2>
          <p>Curug Jenggal adalah air terjun setinggi kurang lebih 30 meter yang berada di Banyumas. Air terjun ini merupakan salah satu rangkaian air terjun yang berada di kawasan Gunung Slamet. Sebelumnya, Curug Jenggala memiliki nama Curug Tempuan, mewakili kondisinya yang menjadi pertemuan Sungai Banjaran dan Sungai Mertelu. Tempat wisata ini semakin menarik banyak pengunjung, terutama dari kalangan anak muda, setelah ditata menjadi tempat yang cantik dan menarik untuk berswafoto. Meski membutuhkan waktu untuk dicapai, namun akses jalan menuju air terjun kini sudah sangat rapi dan tertata. Rasa lelah akan terlupakan dengan pemandangan alam Gunung Slamet yang masih hijau dan terjaga.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Jl. Pangeran Limboro, Dusun III Kalipagu, Ketenger, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53152</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>mainkehutan.com</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>085742227771</p>
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