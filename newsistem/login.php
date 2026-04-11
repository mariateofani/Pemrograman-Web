<!doctype html>
<html>
<head>
<title>Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-6 rounded shadow w-80">

<h2 class="text-xl font-bold mb-4 text-center">Login</h2>

<form action="login_proses.php" method="POST">

<input type="email" name="email" placeholder="Email"
class="w-full border p-2 mb-3" required>

<input type="password" name="password" placeholder="Password"
class="w-full border p-2 mb-3" required>

<button class="bg-blue-600 text-white w-full p-2">
Login
</button>

</form>

<p class="text-center mt-3">
Belum punya akun?
<a href="register.php" class="text-blue-500">Register</a>
</p>

</div>

</body>
</html>