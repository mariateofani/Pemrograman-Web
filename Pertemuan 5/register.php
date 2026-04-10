<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-6 rounded-lg shadow w-full max-w-sm">

<h2 class="text-xl font-bold text-center mb-4">Register</h2>

<form action="proses/prosesRegister.php" method="POST">

<input type="text" name="nama" placeholder="Nama"
class="w-full border p-2 mb-3 rounded" required>

<input type="email" name="email" placeholder="Email"
class="w-full border p-2 mb-3 rounded" required>

<input type="password" name="password" placeholder="Password"
class="w-full border p-2 mb-3 rounded" required>

<button class="bg-blue-600 text-white w-full py-2 rounded">
Daftar
</button>

</form>

<p class="text-center mt-3">
Sudah punya akun?
<a href="login.php" class="text-blue-500">Login</a>
</p>

</div>

</body>
</html>