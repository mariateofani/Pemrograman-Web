<?php
include 'includes/auth_admin.php';
include 'includes/header.php';
include 'koneksi/db.php';
?>

<h2>Data Hasil Survey Pasien</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pelayanan</th>
        <th>Fasilitas</th>
        <th>Kepuasan</th>
        <th>Tanggal</th>
    </tr>

<?php
$no = 1;

$query = mysqli_query($conn, "
SELECT users.nama, users.email, survey.*
FROM survey
JOIN users ON survey.user_id = users.id
ORDER BY survey.id DESC
");

while ($row = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['pelayanan']; ?></td>
    <td><?= $row['fasilitas']; ?></td>
    <td><?= $row['kepuasan']; ?></td>
    <td><?= $row['created_at']; ?></td>
</tr>
<?php } ?>

</table>

<?php include 'includes/footer.php'; ?>