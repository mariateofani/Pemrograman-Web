<?php
header('Content-Type: application/json'); 

// URL API BPS spesifik yang sudah dites di Postman
$url = "https://webapi.63cd767ef7a24cd0782b015036fd6414/";

// ambil data
$response = file_get_contents($url);

// cek error
if ($response === FALSE) {
    echo json_encode(["error" => "Gagal mengambil data"]);
    exit;
}

// kirim ke frontend
echo $response;
?>