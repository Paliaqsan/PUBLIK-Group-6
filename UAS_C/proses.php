<?php

// Menginclude file konek.php yang berisi koneksi database
include 'konek.php';

// Membuat class Proses berupa turunan dari class Database
class Proses extends Database
{
    public function __construct()
    {
        parent::__construct();
    }
    // Metode untuk menambahkan data pengaduan ke database
    public function getProses($judul, $isi, $tanggal, $lokasi, $instansi, $kategori, $lampiranFileName)
    {
        $konek = $this->getKonek();
        $query = mysqli_query($konek, "INSERT INTO tb_pengaduan VALUES ('', '$judul', '$isi', '$tanggal', '$lokasi', '$instansi', '$kategori', '$lampiranFileName')");

        return $query;
    }
}
//Membuat objek dari class Proses
$proses = new Proses();
// Mengecek apakah tombol proses diklik dan memiliki nilai 'tambah'
if (isset($_POST['btnProses']) && $_POST['btnProses'] == "tambah") {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $instansi = $_POST['instansi'];
    $kategori = $_POST['kategori'];

    $lampiran = $_FILES['lampiran'];

    // Upload lampiran
    $lampiranFileName = $lampiran['name'];
    $dir = "gambar/";
    $dirFiles = $lampiran['tmp_name'];
    move_uploaded_file($dirFiles, $dir . $lampiranFileName);

    // Insert data pengaduan
    $sql = $proses->getProses($judul, $isi, $tanggal, $lokasi, $instansi, $kategori, $lampiranFileName);


    if ($sql) {
        echo "
        <script>
        alert('Tambah Data Berhasil!');
        window.location.href='index.php';
        </script>";
    }
}

?>