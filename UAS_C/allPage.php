<!DOCTYPE html>
<html lang="en">
<?php
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
    <link rel="stylesheet" href="comment.css">


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
    <?php
    $id = $_GET['id'];
    class Pengaduan extends Database implements eksekusiQuery
    {
        public function __construct()
        {
            parent::__construct();
        }
    
        public function Query($id)
        {
            $konek=$this->getKonek();
            $query = mysqli_query($konek, "SELECT * FROM tb_pengaduan WHERE id >= $id");
            return $query;
        }
    }
    
    $pengaduan = new Pengaduan();
    
    $sql = $pengaduan->Query($id);
    $data = mysqli_fetch_row($sql);
    ?>
    <!-- ======= Navbar dan Home ======= -->
    <?php
    include 'navbar.php';
    ?>
    <!-- End Navbar-->

    <main id="main">

        <section id="about" class="about" style="background : #3b5998;">
            <div class="container" data-aos="fade-up">
                <div class="card">

                    <div class="section-header">
                       
                            <div class="mt-5 mb-5">
                                <img src="gambar/logo.png" alt="" style="width: 200px; height: 150px;">
                            </div>
                            <div>
                                <h1 style="text-align: center;"><span>Judul :
                                        <?php echo $data[1]; ?>
                                    </span></h1>
                            </div>
                            <BR>

                            <h2>Kategori Laporan : <span>
                                    <?php echo $data[6]; ?>
                                </span></h2> 
                                <br>
                                <br>
                        
                    </div>

                    <div class="row">

                        <div class="" data-aos="fade-up" data-aos-delay="300">
                            <div class="content ps-0 ps-lg-5">
                                <p class="fst-italic">

                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Isi Laporan :
                                        <?php echo $data[2]; ?>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> Tanggal Kejadian :
                                        <?php echo $data[3]; ?>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> Lokasi Kejadian :
                                        <?php echo $data[4]; ?>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> Instansi yang dituju :
                                        <?php echo $data[5]; ?>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> Tanggal Kejadian :
                                        <?php echo $data[6]; ?>
                                    </li>

                                </ul>
                                <p>
                                    lampiran :
                                </p>

                                <div class="position-relative mt-4">
                                    <img src="gambar/pengaduan/<?php echo $data[7]; ?>" class="img-fluid" alt=""
                                        style="width: 500px; height: 400px;">

                                </div>
                                <br>
                                <br>

                                <a href="page.php" class="btn btn-primary">Kembali</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section>

           

        </section>


        <!-- End About Section -->



        <!-- ======= Menu Section ======= -->


        <!-- ======= Testimonials Section ======= -->


        <!-- ======= Events Section ======= -->


        <!-- ======= Chefs Section ======= -->


        <!-- ======= Book A Table Section ======= -->


        <!-- ======= Gallery Section ======= -->




    </main><!-- End #main -->

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