<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
</head>

<body>

    <h2>Input Data Panen</h2>

    <form action="/simpan-panen" method="POST">

        @csrf

        <label>Nama Komoditas</label>
        <br>

        <input type="text" name="nama_komoditas">

        <br><br>

        <label>Jumlah KG</label>
        <br>

        <input type="number" name="jumlah_kg">

        <br><br>

        <label>Tanggal Panen</label>
        <br>

        <input type="date" name="tanggal_panen">

        <br><br>

        <button type="submit">
            Simpan
        </button>

    </form>

    @if($errors->any())

        <ul>

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    @endif

</body>

</html>