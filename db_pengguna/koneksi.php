<?php
$koneksi = new mysqli("localhost","root","","db_pengguna");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " .$koneksi->connect_error);
}
?>