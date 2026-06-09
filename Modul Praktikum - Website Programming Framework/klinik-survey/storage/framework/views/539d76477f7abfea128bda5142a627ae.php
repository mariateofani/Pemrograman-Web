<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Aplikasi</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md">

    <h2 class="text-2xl font-bold text-center mb-6">
        Masuk ke Akun Anda
    </h2>

    <?php if(session('error')): ?>
    <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4">
        <?php echo e(session('error')); ?>

    </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
    <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

    <form action="/login" method="POST">

        <?php echo csrf_field(); ?>

        <div class="mb-4">
            <label class="block mb-1">
                Email
            </label>

            <input
                type="email"
                name="email"
                class="w-full border rounded-lg px-4 py-2"
                required
            >
        </div>

        <div class="mb-4">
            <label class="block mb-1">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="w-full border rounded-lg px-4 py-2"
                required
            >
        </div>

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700"
        >
            Login
        </button>

    </form>

    <div class="text-center mt-4">

        Belum punya akun?

        <a href="/register" class="text-blue-600 hover:underline">
            Register
        </a>

    </div>

</div>

</body>
</html>

<?php /**PATH C:\Users\Acer\klinik-survey\resources\views/login.blade.php ENDPATH**/ ?>