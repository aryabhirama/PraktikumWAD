<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost:3306";
$dbuser = "root";
$dbname = "modul4_wad";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// 
 
?>