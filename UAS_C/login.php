<?php
// E1E122004 ANNISA NURFADILAH

// Memulai sesi untuk mengelola data sesi pada PHP.
session_start();

// Memeriksa apakah sesi dengan nama 'nik' sudah ada.
if (isset($_SESSION['nik'])) {
    // Jika sesi 'nik' sudah ada, redirect pengguna ke halaman index.php.
    header("location: index.php");
    
    // Menghentikan eksekusi skrip selanjutnya setelah melakukan redirect.
    exit;
}

include 'konek.php';
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <title>PUBLIK</title>
</head>

<body>
  <div>
    <!-- Navbar -->
    <div class="nav-bar">
      <nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <!-- Container wrapper -->
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="">
          <img src=gambar/logo.png height="80" weight="80" alt="" loading="lazy" style="margin-top: -1px;" />
        </a>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="about">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="">Tentang PUBLIK</a>
            </li>
          </ul>
          <!-- Left links -->

          <div class="d-flex align-items-center">
            <a href="#masuk" data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
              Masuk
            </a>
            <a href="daftar.php" class="btn btn-primary me-3" role="button">
              Daftar
            </a>
          </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
    </nav>
  </div>
  <!-- Navbar -->


  <section>
    <div class="p-5 text-center bg-body-tertiary">
      <h1 class="h1-container">PUBLIK</h1>
      <p class="lead">PUBLIK atau Pusat Aduan dan Berita Layanan untuk Isu dan Keresahan adalah suatu platform atau
        aplikasi yang
        dirancang untuk memberikan pelayanan atau saluran bagi masyarakat khususnya di kota Kendari agar dapat
        melaporkan isu atau
        keresahan mereka terkait dengan berbagai pelayanan atau masalah tertentu. </p>
      <a data-mdb-ripple-init class="btn btn-primary-2" href="#masuk" role="button">Publikasikan Laporanmu</a>
    </div>
  </section>
  <?php
  // Memeriksa apakah terdapat parameter 'pesan' dalam data GET dari URL.
  if (isset($_GET['pesan'])) {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Login Gagal!</strong>
      <?php echo $_GET['pesan']; ?>  <!-- Menampilkan pesan yang diterima dari parameter 'pesan' dalam URL. --> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
  }
  ?>
  <div class="section-2">
    <div class="container" id="masuk">
      <div class="form-box">
        <h2 class="text-center mb-4">Masuk</h2>

        <form action="cekLogin.php" method="post">
          <div class="card-body mb-4">
            <label for="nik" class="form-label">NIK</label>
            <div class="input-group mb-4">
              <input type="text" class="form-control" id="nik" name="nik" required
                placeholder="Nomor Induk Kependudukan (KTP)" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <label for="password" class="form-label">Password <span>*</span></label>
            <div class="input-group mb-4">
              <input type="password" class="form-control" id="password" name="password" required
                placeholder="Minimal 8 Karakter & Berisi Alfanumerik" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <div class="row mb-3">
              <button type="submit" class="btn btn-primary" name="btnLogin">MASUK</button>
            </div>
            <div class="text-center">
              Belum punya akun? Silahkan <a href="daftar.php">Daftar Sekarang!</a>
            </div>
          </div>


        </form>

        <div class="text-center">

        </div>
      </div>
    </div>
  </div>
</body>

<footer class="bg-body-tertiary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #3B5998">
    Copyright 2023
    <a href="" class="link-3">PUBLIK</a>
    . Hak cipta dilindungi Undang-Undang.
  </div>
  <!-- Copyright -->
</footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</html>