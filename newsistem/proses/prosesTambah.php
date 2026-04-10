<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];

mysqli_query($conn, "INSERT INTO users (nama,email) VALUES ('$nama','$email')");

header("Location: ../dashboardAdmin.php");