<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="card">
        <h2 style="text-align:center;">Register</h2>

        <form action="proces/registerproses.php" method="POST">

            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama" required>

            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" required>

            <label>Jenis Kelamin</label>
            <select name="jk" required>
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit">Daftar</button>
        </form>

        <div class="link">
            Sudah punya akun? <a href="login.php">Login</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>