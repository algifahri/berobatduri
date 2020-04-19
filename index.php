<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Berobat Duri</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>Berobat</span> Duri</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#get-started">Data COVID-19</a></li>
          <li><a href="#about-us">Tujuan Aplikasi</a></li>
          <li><a href="#screenshots">Cara Penggunaan</a></li>
          <li><a href="#features">Klinik & Rumah sakit</a></li>
          <li><a href="login.php"><i class="fa fa-user"></i> Masuk</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Selamat Datang di Berobat Duri</h1>
      <h2>Aplikasi untuk Anda Berobat Tanpa Harus ke Tempat</h2>
      <img src="assets/img/berobatduri.png" alt="Hero Imgs">
      <a href="#screenshots" class="btn-get-started scrollto">Cara Penggunaan</a>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
      <?php
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'http://147.139.133.81/data.json');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $content = curl_exec($ch);
  curl_close($ch);
  
  $result=json_decode($content,true);
  

  foreach ($result as $value) {
      if($value['nama'] === "odp"){
          $odp = $value['total'];
      }
      else if($value['nama'] === "pdp"){
          $pdp = $value['total'];
      }
      else if($value['nama'] === "positif"){
          $pos = $value['total'];
      }
  }
?>
        <h2>Data Pantauan COVID-19 Kabupaten Bengkalis</h2>
        <p class="separator">Sumber data : covid19-bengkaliskab.com</p>

      </div>
    </div>
    <div class="container">
      <div class="row">

      <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="assets/img/sad-u6e.png" alt="img" class="img-fluid">
            <h4>Orang Dalam Pantauan (ODP)</h4>
            <h1><?=$odp;?></h1>
            <p>Proses Pemantauan</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="assets/img/sad.png" alt="img" class="img-fluid">
            <h4>Pasien Dalam Pengawasan (PDP)</h4>
            <h1><?=$pdp;?></h1>
            <p>Dirawat</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="feature-block">

            <img src="assets/img/emoji-LWx.png" alt="img" class="img-fluid">
            <h4>Kasus Terkonfirmasi COVID-19</h4>
            <h1><?=$pos;?></h1>
            <p>Terkonfirmasi</p>

          </div>
        </div>


  </section>

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="assets/img/berobatduri2.png" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>Tujuan Aplikasi</span></h2>
            <p>Aplikasi ini bertujuan untuk mempermudah pasien melakukan pengobatan dalam masa pandemi Covid-19 ini serta menghindari interaksi antara pasien dan dokter terlalu lama sehingga persentase berkembangnya penularan Covid-19 ini bisa kita persempit tentunya, mudah mudahan dengan aplikasi ini bisa membantu pasien ataupun para dokter.
            </p>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Cara Penggunaan</h2>
        <p class="separator">cara untuk berobat tanpa harus datang langsung ke klinik atau rumah sakit</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="assets/img/screen/duri1.png" alt="img"></div>
        <div><img src="assets/img/screen/duri2.png" alt="img"></div>
        <div><img src="assets/img/screen/duri3.png" alt="img"></div>
        <div><img src="assets/img/screen/duri4.png" alt="img"></div>
        <div><img src="assets/img/screen/duri5.png" alt="img"></div>
        <div><img src="assets/img/screen/duri6.png" alt="img"></div>
        
      </div>
    </div>

  </section>

  <!--==========================
    Features Section
  ============================-->

  <section id="features" class="padd-section text-center wow fadeInUp">

    
    <div class="container">
      <div class="section-title text-center">
        <h2>Klinik & Rumah Sakit</h2>
        <p class="separator">Daftarkan klinik anda..!!</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <a href="https://drsyafni.berobatduri.com">
            <img src="assets/img/syafni.png" alt="img" class="img-fluid">
            <h4>Praktek Dokter Keluarga Dr.Syafni & Bidan Ulfa</h4>
            <p>Alamat : Jl. Kayangan, Air Jamban, Kec. Mandau, Kabupaten Bengkalis, Riau 28784</p>
            <p>Jam Buka : <b>Jam 08.00 - 21.00 WIB</b></p>
            </a>
          </div>
        </div>


        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="assets/img/berobatduri.png" alt="img" class="img-fluid">
            <h4>Nama Klinik Anda</h4>
            <p>Daftarkan Klinik anda. GRATIS..!!</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="assets/img/berobatduri.png" alt="img" class="img-fluid">
            <h4>Nama Klinik Anda</h4>
            <p>Daftarkan Klinik anda. GRATIS..!!</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="assets/img/berobatduri.png" alt="img" class="img-fluid">
            <h4>Nama Klinik Anda</h4>
            <p>Daftarkan Klinik anda. GRATIS..!!</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="assets/img/berobatduri.png" alt="img" class="img-fluid">
            <h4>Nama Klinik Anda</h4>
            <p>Daftarkan Klinik anda. GRATIS..!!</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="assets/img/berobatduri.png" alt="img" class="img-fluid">
            <h4>Nama Klinik Anda</h4>
            <p>Daftarkan Klinik anda. GRATIS..!!</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="assets/img/berobatduri.png" alt="img" class="img-fluid">
            <h4>Nama Klinik Anda</h4>
            <p>Daftarkan Klinik anda. GRATIS..!!</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="assets/img/berobatduri.png" alt="img" class="img-fluid">
            <h4>Nama Klinik Anda</h4>
            <p>Daftarkan Klinik anda. GRATIS..!!</p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!--==========================
    Testimonials Section
  ============================-->

  <section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">
                  <div class="top-top">

                    <h2>Himbauan Pemerintah Mengenai Covid-19</h2>
                    <p>Presiden meminta masyarakat yang mendapatkan kesempatan untuk bekerja dan belajar dari rumah tak menyalahgunakan hal tersebut untuk pergi berlibur.</p>
                  

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Himbauan Pemerintah Mengenai Covid-19</h2>
                    <p>Guna mencegah penyebaran infeksi Covid-19 yang semakin masif, Presiden Joko Widodo secara resmi mengimbau masyarakat untuk melakukan kegiatan dari rumah.</p>
                  

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Himbauan Pemerintah Mengenai Covid-19</h2>
                    <p> imbauan pemerintah kepada masyarakat agar melakukan social distancing atau menjaga jarak, cukup efektif mengurangi dampak penyebaran virus corona</p>
                   

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">Berobat Duri</a>
            <p>Aplikasi untuk Anda Berobat Tanpa Harus ke Tempat</p>

          </div>
        </div>



      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights BerobatDuri. All rights reserved.</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          -->
          Designed by <a href="https://berobatduri.com/">BerobatDuri</a>
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/superfish/hoverIntent.js"></script>
  <script src="assets/lib/superfish/superfish.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/modal-video/js/modal-video.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
