<?php
session_start();
include 'koneksi.php';

// proteksi login
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

// ambil id
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID tidak valid");
}

$id = $_GET['id'];

// ambil data user
$stmt = mysqli_prepare($koneksi, "SELECT * FROM users WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if (!$user) {
    die("User tidak ditemukan");
}

// proses update
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $role = $_POST['role'];

    $stmt = mysqli_prepare($koneksi, 
        "UPDATE users SET nama=?, email=?, role=? WHERE id=?"
    );
    mysqli_stmt_bind_param($stmt, "sssi", $nama, $email, $role, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: dashboard.php?edit=success");
        exit;
    } else {
        echo "Gagal update data";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $user['nama'] ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>

    <label>Role:</label><br>
    <select name="role">
        <option value="admin" <?= $user['role']=='admin'?'selected':'' ?>>Admin</option>
        <option value="user" <?= $user['role']=='user'?'selected':'' ?>>User</option>
    </select><br><br>

    <button type="submit" name="submit">Update</button>
</form>

</body>
</html>