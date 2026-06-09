<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Aplikasi</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md">

        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Buat Akun Baru
        </h2>

        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
        @endif

        <form action="/register" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    class="w-full px-4 py-2 border rounded-lg"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">
                    Alamat Email
                </label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    class="w-full px-4 py-2 border rounded-lg"
                    required
                >
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-1">
                    Password
                </label>

                <div class="relative">

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Buat password"
                        class="w-full px-4 py-2 border rounded-lg pr-10"
                        required
                    >

                    <button
                        type="button"
                        onclick="togglePassword()"
                        class="absolute right-3 top-2.5 text-gray-500"
                    >
                    </button>

                </div>
            </div>

            <button
                type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700"
            >
                Daftar Sekarang
            </button>

        </form>

        <div class="text-center text-sm text-gray-600 mt-6">

            Sudah punya akun?

            <a
                href="/login"
                class="text-blue-600 hover:underline font-medium"
            >
                Login di sini
            </a>

        </div>

    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");

            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        }
    </script>

</body>
</html>
