// mengambil elemen form
const form = document.getElementById("surveyForm");

// mengambil tempat untuk menampilkan pesan
const pesan = document.getElementById("pesan");

// event ketika tombol kirim ditekan
form.addEventListener("submit", function(event){

// mencegah halaman reload
event.preventDefault();

// menampilkan pesan berhasil
pesan.innerHTML = "Terima kasih! Survei Anda berhasil dikirim.";

// mengosongkan form kembali
form.reset();

});