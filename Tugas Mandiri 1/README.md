Sistem Survei Kepuasan Pasien
Proyek ini adalah aplikasi web sederhana yang dirancang untuk mengumpulkan data kepuasan pasien terhadap layanan kesehatan secara digital. Aplikasi ini dikembangkan sebagai bagian dari tugas praktikum pada program studi D3 Teknik Informatika di Universitas Sebelas Maret (UNS).

Fitur Unggulan
Validasi Formulir: Menggunakan atribut HTML5 untuk memastikan semua data wajib (nama, umur, jenis kelamin, dan 10 pertanyaan survei) terisi sebelum dikirim.

Desain Card-Based: Antarmuka modern menggunakan konsep kartu yang responsif dan nyaman dipandang.

Interaksi Real-time: Pengiriman formulir dilakukan tanpa memuat ulang halaman (prevent default) menggunakan JavaScript, memberikan pengalaman pengguna yang lebih lancar.

Skala Likert: Menggunakan radio button untuk mempermudah pasien memberikan penilaian dalam 4 tingkatan standar.

Penjelasan Kode Program
1. Struktur Data (index.html)
Formulir ini dibagi menjadi dua bagian utama:
Data Pasien: Mengambil identitas dasar menggunakan elemen <input> dan <select>.
Evaluasi Pelayanan: Terdiri dari 10 pertanyaan spesifik mengenai fasilitas, kebersihan, hingga keramahan petugas dengan sistem input radio agar data konsisten.

2. Styling (style.css)
Visualisasi aplikasi dioptimalkan dengan:
Linear Gradient: Memberikan efek warna latar belakang yang profesional pada body dan header.
Box Shadow: Memberikan kedalaman visual pada kontainer survei agar terpisah secara jelas dari latar belakang.
Hover Effect: Memberikan umpan balik visual pada tombol kirim saat kursor diarahkan.

3. Logika Program (script.js)
Event Listener: Menangkap aksi klik pada tombol "Kirim Survei".
DOM Manipulation: Mengubah isi elemen HTML dengan ID pesan secara dinamis untuk menampilkan notifikasi sukses.
Form Reset: Memastikan formulir kembali bersih setelah data berhasil "dikirim".
