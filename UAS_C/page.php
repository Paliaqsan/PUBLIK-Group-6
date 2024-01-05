<!DOCTYPE html>
<html lang="en">
<?php
#AULIYA AFIFAH ADNAN HAKIM_E1E122046
include 'konek.php';
?>

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
</head>

<body>
    <!-- ======= Navbar.php Section ======= -->
    <?php
    include 'navbar.php';
    ?>
    <!-- End Navbar.php Section -->

    <main id="main">





        <!-- ======= Menu Section ======= -->


        <!-- ======= Testimonials Section ======= -->


        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs section-bg" style="background-color: #3b5998;">
            <div class="container" data-aos="fade-up">
                <div class="card">
                    <div style="text-align: center; line-height: 300px; height: 300px;">
                        <img src="gambar/logo.png" alt=""
                            style="width: 300px; height: 200px; vertical-align: middle; max-width: 100%; max-height: 100%;">
                    </div>

                    <div>
                        <h2 style="text-align: center;"><span>LAPORAN YANG DITERIMA</span></h2>
                    </div>





                    <div class="row gy-4 mt-5">
                        <?php
                        class Pengaduan extends Database
                        {
                            public function __construct()
                            {
                                parent::__construct();
                            }
                        
                            public function getAllPengaduan()
                            {
                                $konek=$this->getKonek();
                                $query = mysqli_query($konek, "SELECT * FROM tb_pengaduan WHERE id >= 1");
                                return $query;
                            }
                        }
                        
                        $pengaduan = new Pengaduan();
                        
                        $sql = $pengaduan->getAllPengaduan();
                        


                        while ($data = mysqli_fetch_row($sql)) {

                            ?>

                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="chef-member">
                                    <div class="member-img">
                                        <img src="gambar/pengaduan/<?php echo $data[7] ?>" class="img-fluid" alt=""
                                            style="width: 500px; height: 400px;">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>
                                            <?php echo $data[1] ?>
                                        </h4>
                                        <span>
                                            <?php echo $data[3] ?>
                                        </span>
                                        <a href="allPage.php?id=<?php echo $data[0] ?>">
                                            <p>Lihat Laporan Selengkapnya...</p>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- End Chefs Member -->
                            <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Book A Table Section ======= -->

        <!-- ======= Gallery Section ======= -->



    </main><!-- End #main -->

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