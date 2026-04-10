<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<form action="proses/prosesEdit.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<input type="text" name="nama" value="<?= $row['nama'] ?>">
<input type="email" name="email" value="<?= $row['email'] ?>">
<button>Simpan</button>
</form>