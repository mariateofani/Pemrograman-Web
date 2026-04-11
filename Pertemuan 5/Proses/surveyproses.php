<?php
include '../koneksi/db.php';
session_start();

$user_id = $_SESSION['user']['id'];

$pelayanan = $_POST['pelayanan'];
$fasilitas = $_POST['fasilitas'];
$kepuasan  = $_POST['kepuasan'];

mysqli_query($conn, "INSERT INTO survey 
(user_id, pelayanan, fasilitas, kepuasan)
VALUES ('$user_id', '$pelayanan', '$fasilitas', '$kepuasan')");

header("Location: ../dashboard.php");
?>