<?php
// Memulai sesi untuk mengakses atau menghapus data sesi
session_start();

// Menghapus semua variabel sesi
session_unset();

// Menghancurkan atau mengakhiri sesi
session_destroy();

// Mengarahkan pengguna kembali ke halaman login setelah sesi dihapus
header('location:login.php');
?>
