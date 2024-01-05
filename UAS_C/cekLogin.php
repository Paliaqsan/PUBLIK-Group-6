<?php

include 'konek.php';
class userLogin extends Database implements eksekusiQuery//keywords implements adalah dari interface.
{
    public function __construct()
    
    {
        parent::__construct();
    }

    public function Query($nik)
    //nah kenapa visibility nya saya beri visibility public karena nantinya method query ini akan di akses di luar kelas.
    {
        $konek = $this->getKonek();
        $query = mysqli_query($konek, "SELECT * FROM tb_user WHERE nik='$nik'");
        return $query;
    }
}

$login = new userLogin();


if (isset($_POST['btnLogin'])) {
    $nik = $_POST['nik'];
    $password = $_POST['password'];

    // Authenticate user
    $sql = $login->Query($nik);
    //pemanggilan function method query dan alasan saya menaruhnya pada visibility public
    
    $data = mysqli_fetch_array($sql);

    if (mysqli_num_rows($sql) >= 1) {
        if ($data['password'] == $password) {
            // Login is valid
            session_start();
            $_SESSION['nik'] = $nik;
            echo "
            <script>
            alert('User login successful!');
            window.location.href='index.php';
            </script>";
        } else {
            // Incorrect password
            header('location:login.php?pesan=Password Salah');
        }
    } else {
        // Incorrect NIK
        header('location:login.php?pesan=NIK Salah');
    }
}

?>