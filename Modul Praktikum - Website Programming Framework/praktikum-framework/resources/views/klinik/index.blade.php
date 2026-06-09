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
    @csrf

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

        @foreach($dataKlinik as $index => $item)
        <tr>
            <td align="center">{{ $index + 1 }}</td>
            <td>{{ $item->nama_pasien }}</td>
            <td align="center">{{ $item->umur }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->no_hp }}</td>
        </tr>
        @endforeach

    </tbody>
</table>

</body>
</html>