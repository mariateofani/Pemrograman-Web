const form = document.getElementById("surveyForm");
const pesan = document.getElementById("pesan");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  pesan.innerHTML = "✅ Terima kasih! Survei Anda berhasil dikirim.";

  pesan.style.color = "green";

  setTimeout(() => {
    pesan.innerHTML = "";
  }, 4000);

  form.reset();
});
