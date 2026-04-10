<?php
include '../koneksi/db.php';

$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// CEK QUERY BERHASIL ATAU TIDAK
$query = mysqli_query($conn, "INSERT INTO users 
(nama, tgl_lahir, jk, email, password) 
VALUES 
('$nama','$tgl_lahir','$jk','$email','$password')");

if ($query) {
    header("Location: ../login.php");
    exit;
} else {
    echo "Register gagal: " . mysqli_error($conn);
}
?>