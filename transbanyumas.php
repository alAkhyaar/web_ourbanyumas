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
                <?php
                if (!isset($_SESSION['admin'])) {
                ?>
                    <h6>TENTANG KAMI</h6>
                    <p>Sebuah website yang menyajikan objek - objek wisata sekitar Banyumas yang cocok bagi Anda yang ingin mencari tempat wisata di sekitar Banyumas</p>
                    <br>
                    </li>
                <?php } else { ?>
                    <h6>RUTE TRANS BANYUMAS</h6>
                    <P>Angkutan Bus Rapid Transit (BRT) ini menjadi penunjang mobilisasi masyarakat Banyumas yang juga terkoneksi dengan Terminal Buluputu, Terminal Kebondalem, Terminal Notog, Terminal Baturraden Terminal Ajibarang hingga Pasar Pon.</P>
                    <br>
                    </li>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- intro section -->
    <!-- services section -->
    <section id="services" class="services service-section">
        <div class="container">
            <div class="row">
                <!--<div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map-pin" style="color:#F60"></span>
                    <div class="services-content">
                        <h5>OUR OFFICE LOCATION</h5>
                        <p>Perum Griya Kober Indah 12, RT.03/08, Kober, Purwokerto Barat, Banyumas</p>
                    </div>
                </div>-->
                <div>
                    <iframe src="https://www.google.com/maps/d/embed?mid=1g3AoZr4kKYvIOqz6OPrFPZavqDKRK1SH&ehbc=2E312F" width="640" height="480"></iframe>
                </div>
    </section>
    <!-- services section -->
    <!-- work section -->
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