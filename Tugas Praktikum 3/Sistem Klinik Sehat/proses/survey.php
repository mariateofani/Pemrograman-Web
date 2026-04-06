<?php
include '../server/koneksi.php';

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$komentar = $_POST['komentar'];

// Query insert
$query = "INSERT INTO survey (nama, email, umur, jenis_kelamin, komentar)
          VALUES ('$nama', '$email', '$umur', '$jenis_kelamin', '$komentar')";

// Eksekusi
if (mysqli_query($conn, $query)) {
    echo "Data survey berhasil disimpan!";
    // redirect kalau mau:
 } else {
    echo "Error: " . mysqli_error($conn);
}
?>