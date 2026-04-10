<!doctype html>
<html>
<head>
<title>Register</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-6 rounded shadow w-80">

<h2 class="text-xl font-bold mb-4 text-center">Register</h2>

<form action="register_proses.php" method="POST">

<input type="text" name="nama" placeholder="Nama"
class="w-full border p-2 mb-3" required>

<input type="email" name="email" placeholder="Email"
class="w-full border p-2 mb-3" required>

<input type="password" name="password" placeholder="Password"
class="w-full border p-2 mb-3" required>

<button class="bg-blue-600 text-white w-full p-2">
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