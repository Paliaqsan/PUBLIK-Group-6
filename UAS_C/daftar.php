<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="daftar.css">
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
                    <img src=image/PUBLIK.png height="80" weight="80" alt="" loading="lazy" style="margin-top: -1px;" />
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
                        <a href="login.php" data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
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
            <p class="lead">PUBLIK atau Pusat Aduan dan Berita Layanan untuk Isu dan Keresahan adalah suatu platform
                atau
                aplikasi yang
                dirancang untuk memberikan pelayanan atau saluran bagi masyarakat khususnya di kota Kendari agar dapat
                melaporkan isu atau
                keresahan mereka terkait dengan berbagai pelayanan atau masalah tertentu. </p>
            <a data-mdb-ripple-init class="btn btn-primary-2" href="#masuk" role="button">Publikasikan Laporanmu</a>
        </div>
    </section>
    <?php
    if (isset($_GET['pesan'])) {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Login Gagal!</strong>
            <?php echo $_GET['pesan']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    ?>
    <div class="section-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <h2 class="text-center mt-5 mb-5"><b>DAFTAR</b></h2>
                        
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="form-box mb-4 full-control">
                                    <b>Mengapa kami meminta data ini?</b>
                                    <p style="font-weight: 100;">Layanan SP4N-LAPOR! mengumpulkan data pribadi pengguna
                                        sebagai jaminan
                                        keabsahan dari aduan atau inspirai
                                        yang disampaikan, pengenal identitas, memverifikasi akun dan mengirim notifikasi
                                        laporan, menilai
                                        tingkat partisipasi
                                        publik, pengolahan dan analisis data, penyusunan perencanaan dan pengambilan
                                        kebijakan, monitoring
                                        dan
                                        evaluasi, dan mendorong terciptanya
                                        kebijakan yang inklusif.
                                    </p>
                                </div>
                                <!-- input data form -->
                                <form method="post" action="cekDaftar.php">
                                <div class="card-body mb-4">
                                    <label for="nik" class="form-label">NIK</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="nik" name="nik" required
                                            placeholder="Nomor Induk Kependudukan (KTP)"
                                            aria-describedby="basic-addon3 basic-addon4">
                                    </div>
                                    <label for="namalengkap" class="form-label">Nama Lengkap <span>*</span> </label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                                            required placeholder="Nama Lengkap"
                                            aria-describedby="basic-addon3 basic-addon4">
                                    </div>
                                    <label for="email" class="form-label">Email <span>*</span> </label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="email" name="email" required
                                            placeholder="publik@contoh.com"
                                            aria-describedby="basic-addon3 basic-addon4">
                                    </div>
                                    <label for="no_telepon" class="form-label">No. Telp Aktif <span>*</span> </label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                                            required placeholder="Minimal 8-14 Angka"
                                            aria-describedby="basic-addon3 basic-addon4">
                                    </div>
                                    <label for="password" class="form-label">Password <span>*</span></label>
                                    <div class="input-group mb-4">
                                        <input type="password" class="form-control" id="password" name="password"
                                            required placeholder="Minimal 8 Karakter & Berisi Alfanumerik"
                                            aria-describedby="basic-addon3 basic-addon4">
                                    </div>
                                    <div class="form-check d-flex mb-4" style="margin: auto; width: 90%;">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form6Example8" />
                                        <label class="form-check-label" for="form6Example8">Saya telah membaca dan
                                            menyetujui
                                            Syarat dan
                                            Ketentuan
                                            Layanan </label>
                                    </div>
                                    <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary" name="btnDaftar">DAFTAR</button>
                                    </div>
                                    <div class="text-center">
                                        Sudah punya akun? Silahkan <a href="login.php">Login Sekarang!</a>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="container">
        <footer class="bg-body-tertiary text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #3B5998">
                Copyright 2023
                <a href="" class="link-3">PUBLIK</a>
                . Hak cipta dilindungi Undang-Undang.
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</html>