<!doctype html>
<html>
<head>
<title>Tambah Data</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-6 rounded shadow w-80">

<h2 class="text-xl font-bold mb-4">Tambah Data</h2>

<form action="proses/prosesTambah.php" method="POST">

<input type="text" name="nama" placeholder="Nama" class="w-full border p-2 mb-3" required>
<input type="email" name="email" placeholder="Email" class="w-full border p-2 mb-3" required>

<button class="bg-green-600 text-white w-full p-2">
Simpan
</button>

</form>

</div>

</body>
</html>