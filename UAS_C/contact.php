<!DOCTYPE html>
<?php
include 'konek.php';
?>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Navbar dan Home ======= -->
  <?php
  include 'navbar.php';
  ?>
  <!-- End Navbar-->


  <!-- ======= Stats Counter Section ======= -->

  <!-- ======= Menu Section ======= -->


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg" style="background: #3b5998; ">
    <div class="container">
      <div class="card">
        <div class="container" data-aos="fade-up">


          <div class="section-header mt-5">

            <p>Anggota<span> Kelompok 6</span></p>
          </div>

          <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              <?php
              class Anggota extends Database
              {
                public function __construct()
                {
                  parent::__construct();
                }

                public function getAnggota()
                {
                  $konek = $this->getKonek();
                  $query = mysqli_query($konek, 'SELECT * FROM tb_anggota');
                  return $query;
                }
              }

              $anggota = new Anggota();

              $sql = $anggota->getAnggota();

              while ($data = mysqli_fetch_array($sql)) {

                ?>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="row gy-4 justify-content-center">
                      <div class="col-lg-6">
                        <div class="testimonial-content">
                          <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <?php
                            echo $data['katakata'];
                            ?>
                            <i class="bi bi-quote quote-icon-right"></i>
                          </p>
                          <h3>
                            <?php
                            echo $data['nama'];
                            ?>
                          </h3>
                          <h4>
                            <?php
                            echo $data['nim'];
                            ?>
                          </h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                              class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2 text-center">
                        <img src="gambar/anggota/<?php
                        echo $data['foto'];
                        ?>" class="img-fluid testimonial-img" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ======= Events Section ======= -->


  <!-- ======= Chefs Section ======= -->


  <!-- ======= Book A Table Section ======= -->
  <!-- End Book A Table Section -->

  <!-- ======= Gallery Section ======= -->
  <!-- End Gallery Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">





      <form action="" method="GET">
        <div class="row">
          <div class="col-xl-6 form-group">
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name">
          </div>
          <div class="col-xl-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
        </div>

        <div class="text-center">
          <button type="submit" name="button" value="SEND">Send Message</button>
        </div>
      </form><!--End Contact Form -->
      
      <?php
      // Memasukan Pesan kedalam tabel hubungi kami
      error_reporting(0);
      $button = $_GET['button'];
      $nama = $_GET['nama'];
      $email = $_GET['email'];
      $subject = $_GET['subject'];
      $message = $_GET['message'];
      if ($button == "SEND") {
        $sql1 = "INSERT INTO tb_hubungikami VALUES ('$nama', '$email', '$subject', '$message')";
        $q = mysqli_query($konek, $sql1);
        if ($q) {
          echo "
            <script>
            alert('Input Data Berhasil!');
            window.location.href='contact.php';
            </script>";
        }
      }
      ?>

    </div>
  </section><!-- End Contact Section -->



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