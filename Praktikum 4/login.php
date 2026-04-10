<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="card">
        <h2 style="text-align:center;">Login</h2>

        <form action="proces/loginproses.php" method="POST">
            
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit">Login</button>
        </form>

        <div class="link">
            Belum punya akun? <a href="register.php">Daftar</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>