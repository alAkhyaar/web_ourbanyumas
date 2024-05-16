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
  </section>
  <!-- header section -->
  <!-- intro section -->
  <section id="intro" class="section intro">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <br>
        <h6>Kolam Renang</h6>
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
                      <img src="images/foto/kolamrenang/walik1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/walik2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/walik3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Tirto Asri Walik</h2>
          <p>Pemandian ini merupakan salah satu yang tertua di kabupaten purbalingga. Memiliki satu buah kolam renang berukuran 20×40 M dan sebuah kolam renang khusus anak, pemandian ini telah menjadi salah satu tempat favorit bagi banyak warga Purbalingga sejak bertahun silam.Terletak di dusun Walik, Desa Kutasari, pemandian ini di airi dengan mata air alami yang sejuk dan menyegarkan.</p>
          <p>Tak hanya pemandian, obyek ini juga memiliki perbukitan yang di sulap menjadi tempat bersantai yang rindang. Dengan taman yang asri dan Gasebo-gasebo yang tertata, menjadikan obyek wisata ini sebagai tempat yang tepat untuk bersantai.Hanya dengan Rp.6.000.- ( harga tiket hari biasa) atau Rp.7.500.- ( hari libur) pengunjung telah dapat menikmati kesegaran air di pemandian dan sejuknya udara perbukitan.</p>
          <br>
        </div>
      </div>
      <section id="services" class="services service-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
              <div class="services-content">
                <p>J8WG+6Q, Dusun II, Kutasari, Kec. Kutasari, Kabupaten Purbalingga, Jawa Tengah</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
              <div class="services-content">
                <p>dinporapar.purbalinggakab.go.id/pemandian-tirta-asri-walik</p>
              </div>
            </div>
            <!--<div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
              <div class="services-content">
                <p>(0293) 788266</p>
              </div>
            </div>-->
          </div>
        </div>
      </section>
    </div>
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
                      <img src="images/foto/kolamrenang/tirtakembar1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/tirtakembar2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/tirtakembar3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Tirta Kembar</h2>
          <p>Banyak pengunjung datang ke sana karena alasan harga tiket masuknya yang murah. Tapi untuk kualitasnya hampir sama seperti kolam renang pada umumnya. Hingga kini kolam renang Tirta Kembar masih ramai pengunjung yang berdatangan. Biasanya pada akhir pekan, jumlah pengunjungnya bisa meningkat. Untuk itu harus dipersiapkan waktu yang tepat agar bisa menikmati segala hal yang ada di kolam renang tersebut. Tak perlu khawatir kualitas airnya lagi, karena di sana sudah sesuai standar yang ada.</p>
          <p>Banyak yang menyebutkan bahwa harga tiket masuk kolam renang Tirta Kembar paling murah di dunia. Tapi memang bisa dikatakan benar, pengunjung hanya perlu membayar Rp. 3000 per orangnya untuk bisa masuk. Meski harga tiketnya sangat murah, fasilitas yang disediakan oleh pengelola cukup lengkap. Di sana terdapat 3 buah kolam dengan kedalaman masing-masing 50 cm, 120-250 dan 480. Kolam renang ini sebenarnya cocok untuk berlatih para atlet renang. Kolam Olympic dan locat indahnya tersedia dengan kualitas yang sangat bagus.Selain itu juga terdapat kamar ganti yang jumlahnya banyak, toilet hingga tempat penjualan makanan.</p>
          <br>
        </div>
      </div>
      <section id="services" class="services service-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
              <div class="services-content">
                <p>Komplek Tirta Kembar, Jl. Dr. Angka, Glempang, Bancarkembar, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53121</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
              <div class="services-content">
                <p>tirtakembar.id</p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
              <div class="services-content">
                <p>0281638148</p>
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
                      <img src="images/foto/kolamrenang/tirtakencana1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/tirtakencana2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/tirtakencana3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Tirta Kencana</h2>
          <p>Kolam Renang Tirta Kencana memiliki air yang bersih. Selalu ada petugas yang membersihkan jika ada kotoran di dalam kolam. Di sana pengunjung bisa berlatih berenang karena telah disediakan kolam khusus yang dilengkapi oleh papan loncat. Terkadang kolam renang ini juga digunakan oleh atlet lokal untuk mengasah kemampuan mereka. Jika ingin datang, lebih baik memilih hari senin sampai jumat untuk menghindari ramainya pengunjung. Selain itu bawa barang seadanya saja, untuk menghindari hal-hal yang tidak diiginkan meski disana juga ada kamera CCTV yang selalu mengawasi.</p>
          <p>Untuk memasuki kolam renang Tirta Kencana, setiap pengunjungnya harus membayar biaya sebesar Rp. 10.000 – Rp. 15.000. Sementara untuk biaya parkir kendaraannya terbilang normal, untuk motor sekitar Rp. 2000 dan mobil Rp. 3000. fasilitas yang disediakan cukup lengkap. Terdapat beberapa permainan seperti mini waterboom, ember tumpah, perosotan outdoor dan sebagainya. Sebagian permaiann di sana memang bisa dibilang indoor karena ditutupi oleh atap. Selain itu tersedia juga toilet, kamar bilas dan kamar ganti yang dipisah antara lelaki dan perempuan.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Jl. Mt Haryono No.1021, Purwokerto Wetan, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53111</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>Tidak tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>0281636527</p>
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
                      <img src="images/foto/kolamrenang/theforest1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/theforest2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/theforest3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>The Forest Island</h2>
          <p>Meskipun namanya “The Forest”, namun tempat ini bukanlah hutan, bukan juga wisata alam. Objek wisata ini sejatinya merupakan kolam renang. Yang mana mengusung konsep alam yang rimbun dengan pepohonan dan bunga-bunga yang indah. Tempat ini sangat cocok sebagai tujuan wisata keluarga. Karena semua wahana dapat dicoba untuk anak-anak dan orang tua.</p>
          <p>Objek wisata ini menetapkan tiket masuk yang sangat terjangkau. Tiket Masuk Senin-Kamis Rp10.000,Tiket Masuk Sabtu-Minggu Rp15.000. Tiket masuk ini berlaku terusan, berbagai wahana dapat dicoba tanpa membayar lagi, kecuali sewa ban. Yang unik dan jarang ditiru oleh tempat wisata lain adalah tiket masuk gratis untuk wisatawan tertentu. Yaitu anak yatim piatu, panti asuhan, dan pondok pesantren, tidak dikenakan tarif masuk.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Jl. Raya Baturaden Desa No.Km. 6, Dusun I Pandak, Pandak, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>instagram.com/theforestislandpurwokerto</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>085877777316</p>
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
                      <img src="images/foto/kolamrenang/gwk3.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/gwk2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/gwk1.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>GWK Baturaden Waterpark</h2>
          <p>Wahana utama dari GWK adalah kolam renangnya. Begitu masuk ke kompleks wisata, kamu akan langsung menjumpai kolam renang, dilengkapi dengan roller coaster di atasnya.Jika kamu mau berenang ke sini, silakan sesuaikan dengan tinggi badan kamu. Jika membawa anak kecil, maka bawalah ke kolam renang anak. Sudah ada 3 buah kolam renang di GWK Baturaden dengan berbagai kedalaman.Kolam renang anak di GWK tentunya menjadi tempat favorit pengunjung. Jika kamu membawa anak kecil harap perhatikan mereka jangan sampai lepas dari pengawasan.</p>
          <p>Jika kamu membawa anak berusia 3 tahun ke atas, maka anak harus membayar tiket masuk tersendiri. Harga tiket masuk anak sama dengan tiket masuk dewasa. Loket penjualan tiket masuk berada bagian paling depan, setelah parkir kendaraan. Biaya HTM GWK Baturraden selengkapnya: 20 ribu rupiah di hari biasa (Senin, Selasa, Rabu, Kamis, Jumat). 25 ribu rupiah di hari Sabtu, Minggu, dan hari libur nasional. tiket terusan dijual di loket tiket masuk. tiket masuk digunakan untuk masuk ke lokasi wisata.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>JL Raya Baturaden, Km. 12, Karang Mangu, Dusun III, Karangtengah, Kec. Baturaden, Kabupaten Banyumas, Jawa Tengah 53151</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>gwk.id</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>081391382000</p>
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
                      <img src="images/foto/kolamrenang/buken1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/buken2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/buken3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Kolam Renang Buken</h2>
          <p>Layaknya tempat piknik, kamu bisa menemukan beberapa kolam renang buat tempat santai bareng keluarga. Menggunakan aliran air langsung dari Gunung Slamet, kamu bisa merasakan kesejukan tiada tara di kolam renang ini. Menariknya, ada banyak fitur yang siap melengkapi keseruan kamu berenang di Buken, seperti permainan ember tumpah. Lantaran berada di alam terbuka, kamu bisa langsung menghirup udara yang kaya oksigen segar dengan latar belakang Gunung Slamet.</p>
          <p>Ada beberapa gimik patung petani yang bikin kenjungan kamu ke Danau Buken makin hangat. Ya, rasanya seperti disambut secara spesial, deh! Semua fasilitas dan fitur di Wisata Buken bisa kamu nikmati dengan tiket masuk mulai dari Rp10 ribu.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Dusun II, Banjarsari Kulon, Kec. Sumbang, Kabupaten Banyumas, Jawa Tengah 53183</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>tidak tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>082375635758</p>
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
                      <img src="images/foto/kolamrenang/depo1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/depo2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/depo3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Depo Bay Pelita</h2>
          <p>Jika biasanya wahana kolam renang berdiri sendiri, berbeda dengan Depo Bay. Objek wisata ini berada di dalam mall, sehingga setelah berenang dapat bermain di mall. Orang tua pun dapat sambil berbelanja sementara anak – anak bermain di kolam. Meski di dalam pusat perbelanjaan, kolam renang ini tetap berkonsep</p>
          <p>Objek wisata ini menerapkan tiket masuk yang masih terjangkau. Harga tiket ini tidak termasuk dengan biaya sewa fasilitas kolam. Seperti sewa loker dan sewa ban pelampung. Tiket masuk Rp30.000Sewa loker Rp25.000 (Deposit Rp20.000, sewa Rp5.000), Sewa pelampung single Rp10.000, Sewa pelampung double Rp25.000.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Depo Pelita, Dusun I Kalikidang, Kalikidang, Kec. Sokaraja, Kabupaten Banyumas, Jawa Tengah 53181</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>tidak tersedia</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>tidak tersedia</p>
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
                      <img src="images/foto/kolamrenang/pagubugan1.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/pagubugan2.jpg" style="height: 100%">
                    </li>
                    <li>
                      <img src="images/foto/kolamrenang/pagubugan3.jpg" style="height: 100%">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-6">
          <h2>Pagubugan Melung</h2>
          <p>Wisata di Banyumas ini mengusung konsep kolam renang di tengah sawah. Jadi ini tentu berbeda dengan kolam renang atau waterboom pada umumnya. Kolam renang ini dikelilingi sawah hijau dan pegunungan asri yang berhawa sejuk. Dengan begini, bisa dipastikan para wisatawan bisa fresh setelah pulang dari Pagubugan Banyumas. Tak hanya badan, mata pun juga ikut segar karena disuguhkan pemandangan indah.</p>
          <p>Untuk jam operasionalnya, dibuka mulai dari jam delapan pagi, hingga setengah tujuh malam. Sedangkan biaya tiket masuknya hanya lima ribu rupiah, namun itu bisa berubah sewaktu-waktu.</p>
        </div>
      </div>
    </div>
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map" style="color:#F60"></span>
            <div class="services-content">
              <p>Dusun I, Melung, Kec. Kedungbanteng, Kabupaten Banyumas, Jawa Tengah 53152</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
            <div class="services-content">
              <p>https://wisatapagubugan.business.site/?utm_source=gmb&utm_medium=referral</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
            <div class="services-content">
              <p>08112681411</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </section>
  <!-- services section -->

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