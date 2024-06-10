<?php
include 'koneksi.php'; // Menghubungkan ke database

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi data
    if (empty($email) || empty($password)) {
        echo "<script>alert('Pastikan Anda Mengisi Semua Data'); window.location = 'register.php';</script>";
    } else {
        // Enkripsi password sebelum menyimpan ke database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data pengguna ke database
        $sql = "INSERT INTO tb_admin (email, password) VALUES ('$email', '$hashedPassword')";

        // Eksekusi query dan cek hasilnya
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registrasi berhasil'); window.location = 'login.php';</script>";
        } else {
            // Tampilkan kesalahan query
            echo "<script>alert('Terjadi kesalahan: " . mysqli_error($conn) . "'); window.location = 'register.php';</script>";
        }
    }
}
?>
