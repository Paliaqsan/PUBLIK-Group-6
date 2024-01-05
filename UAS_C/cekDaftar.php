<?php

// Include file untuk koneksi database
include 'konek.php';

// Interface Registrasi
// Interface menyediakan kerangka atau kontrak yang harus dipatuhi oleh kelas-kelas yang mengimplementasikannya.
interface Registrasi {
    public function cekDaftar($nik, $namalengkap, $email, $no_telepon, $password);
}

// Kelas userDaftar yang meng-extend Database dan meng-implement Registrasi
class userDaftar extends Database implements Registrasi
{
    public function __construct()
    {
        parent::__construct();
    }

    // Implementasi method cekDaftar dari interface Registrasi
    public function cekDaftar($nik, $namalengkap, $email, $no_telepon, $password)
    {
        $konek = $this->getKonek();
        $query = mysqli_query($konek, "INSERT INTO tb_user VALUES('$nik','$namalengkap','$email','$no_telepon', '$password')");
        return $query;
    }
}

// Instance objek dari kelas userDaftar
$daftar = new userDaftar();

// Proses registrasi saat tombol btnDaftar diklik
if (isset($_POST['btnDaftar'])) {
    // Ambil data dari form
    $nik = $_POST['nik'];
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $password = $_POST['password'];

    // Panggil method cekDaftar untuk melakukan registrasi
    $sql = $daftar->cekDaftar($nik, $namalengkap, $email, $no_telepon, $password);

    // Cek apakah registrasi berhasil
    if ($sql) {
        // Registrasi sukses
        echo "
        <script>
        alert('User registration successful!');
        window.location.href='login.php';
        </script>";
    } else {
        // Registrasi gagal
        echo "Registration failed. Please try again.";
    }
}

//  konsep polimorfisme terlihat dari kemampuan untuk menggunakan objek dari kelas yang berbeda (dalam contoh proyek ini adalah kelas userDaftar) melalui interface (Registrasi). Ini memungkinkan pemanggilan metode dengan nama yang sama (cekDaftar) pada objek berbagai kelas yang mengimplementasikan interface tersebut.
?>