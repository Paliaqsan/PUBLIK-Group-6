<?php
// E1E122004 ANNISA NURFADILAH
interface eksekusiQuery{
    public function Query($parameter);
}
class Database
{

    private $host = "localhost", $username = "root", $password = "", $db = "db_publik", $conn;
    //disini saya menggunakan konsep oop yaitu enkapsulasi atau pembungkusan untuk melindungidata dengan menambahkan visibility sebelum property host, dll. 
    //visibility yang saya guanakan dibawah adalah private yang artinya sebuah property tersebut hanya boleh diakses pada class induk saja, dan tidak boleh di gunakan di class anak atau diluar kelas.
    //alasannya yaitu karena menurut saya properti sperti host dll, harus di private. adapun untuk akses digunakan dikelas lain,saya akan membuatkan method/function yg visibilitynya public atau dapat diakses didalam kelas maupun diluar kelas.

    // Konstruktor, merupakan magic method pada PHP, digunakan untuk inisialisasi objek saat objek dibuat.
    protected function __construct()
    //nah pada method  function construct saya membuat method construct nya adalah protected yang artinya saya hanya akan mengizinkan yang bisa mengakses adalah class induknya dan class childnya, sedangkan di luar kelas tidak diberi akses karena dalam kodingan saya rasa tidak perlu.
    {
        // Menghubungkan ke database menggunakan properti yang telah ditentukan sebelumnya.
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    // Metode getKonek digunakan untuk mengembalikan nilai dari properti $conn.
    
    protected function getKonek()
    //disini saya  menggunakan protected untuk mengizinkan akses method hanya pada classs induk dan kelas anaknya.
    //dan kenapa tidak public karena menurut saya tidak ada yang perlu diakses di luar kelas.
    {
        return $this->conn;
    }
}
?>
