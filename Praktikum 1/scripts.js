function sambutUser(event) {

  // Mencegah halaman web melakukan refresh otomatis saat form disubmit
  event.preventDefault();

  // Mengambil nilai dari form 'myForm' dan input yang bernama 'nama'
  var namaUser = document.forms["myForm"]["nama"].value;

  // Menampilkan pop-up alert
  alert("Hallo " + namaUser + " selamat datang!");

  // Opsional: Mengosongkan form setelah disubmit
  document.forms["myForm"].reset();
}