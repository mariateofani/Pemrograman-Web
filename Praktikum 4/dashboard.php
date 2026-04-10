<?php 
include 'includes/auth.php';
include 'includes/header.php'; 
?>

<div class="container">
    <h2>Dashboard</h2>

    <p>Selamat datang, <b><?= $_SESSION['user']['nama']; ?></b></p>

    <div class="menu">
        <a href="services/survey.php">Isi Survey</a>

        <?php if ($_SESSION['user']['role'] == 'admin') { ?>
            <a href="admin.php">Data Survey</a>
        <?php } ?>

        <a href="proces/logout.php">Logout</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>