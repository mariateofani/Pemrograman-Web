<?php 
include '../includes/auth.php';
include '../includes/header.php'; 
?>

<h2>Form Survey</h2>

<form action="../proces/surveyproses.php" method="POST">
    <label>Pelayanan:</label>
    <input type="number" name="pelayanan" min="1" max="5" required>

    <label>Fasilitas:</label>
    <input type="number" name="fasilitas" min="1" max="5" required>

    <label>Kepuasan:</label>
    <input type="number" name="kepuasan" min="1" max="5" required>

    <button type="submit">Kirim</button>
</form>

<?php include '../includes/footer.php'; ?>