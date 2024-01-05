<?php
// E1E122004 ANNISA NURFADILAH

// Memulai sesi untuk mengelola data sesi pada PHP.
session_start();
// Memeriksa apakah sesi dengan nama 'nik' belum diatur atau tidak ada.
if (!isset($_SESSION['nik'])) {
  // Jika sesi 'nik' belum diatur, melakukan redirect ke halaman login.php.
  header("location: login.php");
  exit;
}
include 'konek.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | PUBLIK!!!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
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

<body>
  <!-- ======= Navbar dan Home ======= -->
  <?php
  include 'navbar.php';
  ?>
  <!-- End Navbar-->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section style="background-color: #3b5998;">
      <div class="container">
        <div class="card">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <div class="container">

                <figure class="text-center">
                  <div class="mt-5 mb-5">
                    <img src="gambar/logo.png" alt="" style="width: 200px; height: 150px;">
                  </div>
                  <blockquote class="blockquote">
                    <h1>FORM PENGADUAN</h1>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    <cite title="Source Title">CRUD : Create, Read, Update, and Delete</cite>
                  </figcaption>
                </figure>
                <form action="proses.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id">

                  <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Laporan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="judul" name="judul"
                        placeholder="Ketik Judul Laporan Anda *">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="isi" class="col-sm-2 col-form-label">isi Laporan</label>
                    <div class="col-sm-10">
                      <textarea name="isi" id="isi" rows="6" class="form-control "
                        placeholder="Ketik Isi Laporan Anda *" required=""></textarea>

                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Kejadian</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tanggal" name="tanggal"
                        placeholder="Pilih tanggal Kejadian">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Kejadian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lokasi" name="lokasi"
                        placeholder="Ketik Lokasi Kejadian *">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="instansi" class="col-sm-2 col-form-label">Instansi Yang Dituju</label>
                    <div class="col-sm-10">
                      <select name="instansi" id="instansi" class="form-control">
                        <?php
                        class Instansi extends Database
                        {
                          // Konstruktor Instansi yang memanggil konstruktor dari kelas induk (Database)
                          public function __construct()
                          {
                            parent::__construct();
                          }

                          // Metode untuk mendapatkan semua data dari tabel tb_instansi
                          public function getAllInstansi()
                          {
                            $konek = $this->getKonek();

                            // Melakukan query ke database menggunakan koneksi dari kelas induk (Database)
                            $query = mysqli_query($konek, 'SELECT * FROM tb_instansi');

                            // Mengembalikan hasil query
                            return $query;
                          }
                        }

                        // Contoh penggunaan kelas Instansi
                        $instansi = new Instansi();

                        // Menyimpan hasil query dalam variabel $sql
                        $sql = $instansi->getAllInstansi();

                        // Sekarang $sql berisi hasil dari query
                        while ($data = mysqli_fetch_array($sql)) {

                          ?>
                          <option value="<?php
                          echo $data['nama_instansi'];
                          ?>">
                            <?php
                            echo $data['nama_instansi'];
                            ?>
                          </option>
                          <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="kategori" class="col-sm-2 col-form-label">Pilih Kategori Laporan</label>
                    <div class="col-sm-10">
                      <select name="kategori" id="kategori" class="form-control">
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Ketertiban">Ketertiban</option>
                        <option value="Kekerasan">Kekerasan</option>
                        <option value="Keresahan">Keresahan</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="lampiran" class="col-sm-2 col-form-label">Sisipkan Lampiran</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="lampiran" name="lampiran">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <button type='submit' class='btn btn-primary' name='btnProses' value='tambah'>Tambah
                      Laporan</button>
                  </div>
                  <br>
                </form>
                <br>
              </div>

            </div>
          </div>
        </div>
      </div>
      </div>

    </section>

    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Kementrian</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Lembaga</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Pemprov</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Pemkot</p>
            </div>
          </div><!-- End Stats Item -->
          < <div class="row">
            <a href="instansi.php" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
      </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <?php
  include 'footer.php';
  ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>