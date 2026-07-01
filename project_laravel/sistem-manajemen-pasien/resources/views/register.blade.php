<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Akun</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <div
        class="min-h-[calc(100vh-4rem)] flex items-center justify-center py-12 px-4 bg-gradient-to-br from-blue-50 to-cyan-50">

        <div class="bg-white rounded-3xl shadow-xl w-full max-w-md p-8">

            <div class="text-center mb-8">

                <div
                    class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg shadow-blue-200">

                    <i class="fa-solid fa-user-plus"></i>

                </div>

                <h1 class="text-2xl font-extrabold text-gray-900">

                    Buat Akun Baru

                </h1>

                <p class="text-gray-400 text-sm mt-1">

                    Daftar sebagai pasien Sistem Administrasi Pasien

                </p>

            </div>


            @if(session('success'))

                <div
                    class="flex items-center gap-2 bg-green-50 border-green-200 text-green-700 border px-4 py-3 rounded-xl text-sm mb-5">

                    <i class="fa-solid fa-circle-check"></i>

                    {{ session('success') }}

                </div>

            @endif


            @if(session('error'))

                <div
                    class="flex items-center gap-2 bg-red-50 border-red-200 text-red-700 border px-4 py-3 rounded-xl text-sm mb-5">

                    <i class="fa-solid fa-circle-exclamation"></i>

                    {{ session('error') }}

                </div>

            @endif



            <form method="POST" action="/register">

                @csrf


                <div class="mb-4">

                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">

                        Username

                    </label>

                    <div class="relative">

                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">

                            <i class="fa-solid fa-user text-sm"></i>

                        </span>

                        <input type="text" name="username" required placeholder="username_anda"
                            class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-xl">

                    </div>

                </div>



                <div class="mb-4">

                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">

                        Email

                    </label>

                    <div class="relative">

                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">

                            <i class="fa-solid fa-envelope text-sm"></i>

                        </span>

                        <input type="email" name="email" required placeholder="nama@email.com"
                            class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-xl">

                    </div>

                </div>



                <div class="mb-4">

                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">

                        No. HP / WhatsApp

                    </label>

                    <div class="relative">

                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">

                            <i class="fa-solid fa-phone text-sm"></i>

                        </span>

                        <input type="tel" name="phone" required placeholder="081234567890"
                            class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-xl">

                    </div>

                </div>



                <div class="mb-4">

                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">

                        Password

                    </label>

                    <div class="relative">

                        <input type="password" id="pwd1" name="password" required placeholder="Min. 8 karakter"
                            class="w-full pl-9 pr-10 py-2.5 border border-gray-200 rounded-xl">


                        <button type="button" onclick="togglePwd('pwd1','eye1')" class="absolute right-3 top-3">

                            <i id="eye1" class="fa-solid fa-eye">

                            </i>

                        </button>

                    </div>

                </div>



                <div class="mb-6">

                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">

                        Konfirmasi Password

                    </label>

                    <div class="relative">

                        <input type="password" id="pwd2" name="password_confirmation" required placeholder="Ulangi password"
                            class="w-full pl-9 pr-10 py-2.5 border border-gray-200 rounded-xl">

                        <button type="button" onclick="togglePwd('pwd2','eye2')" class="absolute right-3 top-3">

                            <i id="eye2" class="fa-solid fa-eye">

                            </i>

                        </button>

                    </div>

                </div>



                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-bold">

                    Daftar Sekarang

                </button>

            </form>


            <p class="text-center text-sm text-gray-400 mt-6">

                Sudah punya akun?

                <a href="/login" class="text-blue-500 font-semibold">

                    Login di sini

                </a>

            </p>

        </div>

    </div>


    <script>

        function togglePwd(id, iconId) {

            const el = document.getElementById(id);

            const ic = document.getElementById(iconId);

            const show = el.type === 'password';

            el.type =
                show
                    ? 'text'
                    : 'password';

            ic.className =
                show
                    ? 'fa-solid fa-eye-slash'
                    : 'fa-solid fa-eye';

        }

    </script>

</body>

</html>