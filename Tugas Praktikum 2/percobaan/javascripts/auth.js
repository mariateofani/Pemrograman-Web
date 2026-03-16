// cek status login saat halaman dibuka
document.addEventListener("DOMContentLoaded", function(){

let user = localStorage.getItem("userLogin");

const menuLogin = document.getElementById("menuLogin");

// jika sudah login
if(user){
menuLogin.textContent = "Logout";

menuLogin.addEventListener("click", function(e){
e.preventDefault();

localStorage.removeItem("userLogin");

alert("Berhasil logout");

window.location.href = "index.html";

});

}

});