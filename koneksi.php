<?php

$servername = 'localhost'; // Nama host atau IP server database
$username = 'root'; // Username database
$password = ''; // Password database
$dbname = 'db_penjadwalan'; // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
