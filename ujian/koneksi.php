<?php
$username = "root";
$password = "";
$hostname = "localhost";
$data = "db_perpustakaan";

$koneksi = mysqli_connect($hostname, $username, $password, $data);

if ($koneksi) {
   // echo "koneksi berhasil";//
}
else{
    echo "koneksi gagal";
}
?>
