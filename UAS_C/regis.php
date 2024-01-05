<?php

include 'konek.php';

class UserRegistration extends Database {
    public function __construct() {
        parent::__construct();
    }

    // Metode polimorfisme untuk pendaftaran pengguna
    public function register($nik, $namalengkap, $email, $no_telepon, $password) {
        $konek = $this->getKonek();
        $query = mysqli_query($konek, "INSERT INTO tb_user VALUES('$nik','$namalengkap','$email','$no_telepon', '$password')");
        return $query;
    }
}

// Penggunaan polimorfisme dengan membuat objek dari class UserRegistration
$registration = new UserRegistration();

if (isset($_POST['btnDaftar'])) {
    $nik = $_POST['nik'];
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $password = $_POST['password'];

    // Memanggil metode register untuk pendaftaran pengguna
    $result = $registration->register($nik, $namalengkap, $email, $no_telepon, $password);

    if ($result) {
        // Registration successful
        echo "
        <script>
        alert('User registration successful!');
        window.location.href='login.php';
        </script>";
    } else {
        // Registration failed
        echo "Registration failed. Please try again.";
    }
}

?>
