<?php
include '../koneksi/db.php'; // sesuaikan dengan file koneksi kamu

$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$email = $_POST['email'];
$password = $_POST['password'];

// simpan ke database
$query = mysqli_query($conn, "INSERT INTO users 
(nama, tgl_lahir, jk, email, password) 
VALUES 
('$nama','$tgl_lahir','$jk','$email','$password')");

// cek berhasil
if ($query) {
    header("Location: ../login.php");
    exit;
} else {
    echo "Gagal daftar!";
}
?>