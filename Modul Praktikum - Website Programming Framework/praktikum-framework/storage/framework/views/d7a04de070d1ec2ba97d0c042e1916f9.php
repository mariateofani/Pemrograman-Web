<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Klinik</title>
</head>

<body style="font-family: Arial, sans-serif; padding: 20px;">
<h2>Input Data Pasien</h2>

<form action="/simpan-pasien" method="POST">
    <?php echo csrf_field(); ?>

    <p>
        Nama Pasien :
        <input type="text" name="nama_pasien">
    </p>

    <p>
        Umur :
        <input type="number" name="umur">
    </p>

    <p>
        Email :
        <input type="email" name="email">
    </p>

    <p>
        No HP :
        <input type="text" name="no_hp">
    </p>

    <button type="submit">Simpan</button>
</form>

<hr>
<h2>Data Pasien Klinik</h2>

<hr>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead style="background-color: #f2f2f2;">
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Umur</th>
            <th>Email</th>
            <th>No HP</th>
        </tr>
    </thead>

    <tbody>

        <?php $__currentLoopData = $dataKlinik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td align="center"><?php echo e($index + 1); ?></td>
            <td><?php echo e($item->nama_pasien); ?></td>
            <td align="center"><?php echo e($item->umur); ?></td>
            <td><?php echo e($item->email); ?></td>
            <td><?php echo e($item->no_hp); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table>

</body>
</html><?php /**PATH C:\Users\Acer\praktikum-framework\resources\views/klinik/index.blade.php ENDPATH**/ ?>