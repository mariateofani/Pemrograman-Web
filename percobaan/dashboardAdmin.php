<?php
session_start();
include 'service/koneksi.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM users");
?>

<!doctype html>
<html>
<head>
<title>Dashboard Admin</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

<h1 class="text-2xl font-bold mb-4">Dashboard Admin</h1>

<a href="tambah_data.php" class="bg-green-600 text-white px-3 py-2 rounded">
Tambah Data
</a>

<table class="w-full mt-4 bg-white shadow rounded">
<tr class="bg-gray-200">
<th class="p-2">Nama</th>
<th class="p-2">Email</th>
<th class="p-2">Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
<td class="p-2"><?= $row['nama'] ?></td>
<td class="p-2"><?= $row['email'] ?></td>
<td class="p-2">
<a href="edit_data.php?id=<?= $row['id'] ?>" class="text-blue-500">Edit</a>
<a href="proses/prosesHapus.php?id=<?= $row['id'] ?>" class="text-red-500 ml-2">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

</body>
</html>