

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<form action="proces/loginproses.php" method="POST">
<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
      <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

      <form>
        <input
          id="email"
          type="email"
          placeholder="Email"
          required
          class="w-full border rounded-lg px-3 py-2 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />

        <input
          type="password"
          placeholder="Password"
          required
          class="w-full border rounded-lg px-3 py-2 mb-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />

        <button type="submit" class="bg-blue-600 text-white p-2 w-full der rounded-lg px-3 py-2">
          Login
        </button>

        <p class="text-center mt-4">
          Belum punya akun?
          <a href="register.php" class="text-blue-500">Register</a>
        </p>
      </form>
    </div>
</form>
</body>
</html>

