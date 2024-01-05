<!-- ======= Navbar dan Home ======= -->
<!-- ======= Navbar ======= -->

<head>

  <style>
    .layanan {
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      margin-top: 80px;

    }

    .layanan2 {
      font-weight: 300;
      font-size: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }
  </style>
</head>


<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>PUBLIK<span>!!!</span></h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="index.php">Pengaduan</a></li>
        <li><a href="page.php">Laporan</a></li>
        <li><a href="instansi.php">Instansi</a></li>
        <li><a href="contact.php">Hubungi Kami</a></li>
      </ul>
    </nav><!-- .navbar -->

    <a class="btn btn-primary" href="logout.php">Logout</a>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header>
<!-- End Navbar -->
<!-- Home -->
<div class="card">
  <section id="hero" class="hero d-flex align-items-center section-bg" style="background-color: #3b5998;">
    <div class="container">
      <h1 class="layanan">Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
      <h1 class="layanan2">Sampaikan Laporan Anda Langsung Kepada Instansi Pemerintah Berwenang</h1>
    </div>
  </section>
  <!-- End Home-->