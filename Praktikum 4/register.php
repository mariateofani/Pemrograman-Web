<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-sm bg-white p-6 rounded-xl shadow">

    <h2 class="text-center text-xl font-bold mb-5">Register</h2>

    <form action="proces/registerproses.php" method="POST" class="space-y-4">

      <!-- Nama -->
      <div>
        <label class="block text-sm mb-1">Nama Lengkap</label>
        <input type="text" name="nama"
          class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Masukkan nama" required>
      </div>

      <!-- Tanggal Lahir -->
      <div>
        <label class="block text-sm mb-1">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir"
          class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          required>
      </div>

      <!-- Jenis Kelamin -->
      <div>
        <label class="block text-sm mb-1">Jenis Kelamin</label>
        <select name="jk"
          class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          required>
          <option value="">-- Pilih --</option>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm mb-1">Email</label>
        <input type="email" name="email"
          class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Masukkan email" required>
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm mb-1">Password</label>
        <input type="password" name="password"
          class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Masukkan password" required>
      </div>

      <!-- Button -->
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
        Daftar
      </button>

    </form>

    <!-- Link Login -->
    <p class="text-center text-sm mt-4">
      Sudah punya akun?
      <a href="login.php" class="text-blue-600 font-semibold">Login</a>
    </p>

  </div>

</body>
</html>
