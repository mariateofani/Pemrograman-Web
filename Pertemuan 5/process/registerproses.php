<?php
include '../services/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "INSERT INTO users (nama,email,password)
VALUES ('$nama','$email','$password')");

if ($query) {
    header("Location: ../login.php");
    exit;
} else {
    echo "Gagal daftar";
}
?>