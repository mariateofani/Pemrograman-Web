if(window.location.pathname.includes("survey.html")){

let login = localStorage.getItem("login");

if(!login){

alert("Silakan login terlebih dahulu!");

window.location.href="login.html";

}

}

const form = document.getElementById("surveyForm");
const pesan = document.getElementById("pesan");

form.addEventListener("submit", function(event){

event.preventDefault();

pesan.innerHTML = `
Terima kasih! Survei Anda berhasil dikirim.
<br><br>
<a href="index.html">
<button>Kembali ke Beranda</button>
</a>
`;

form.reset();

});