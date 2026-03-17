document.addEventListener("DOMContentLoaded", function(){
    const form = document.querySelector("form");
    if(form){
        form.addEventListener("submit", function(e){
            e.preventDefault();
            alert("✅ Terima kasih! Survei Anda berhasil dikirim.");
            window.location.href = "index.html";});
        }
    });