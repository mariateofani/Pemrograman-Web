<script>
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    if (status === 'berhasil') {
        alert("Terima kasih! Survey anda berhasil dikirim! ✅");
    } else if (status === 'gagal') {
        alert("Gagal mengirim survey!");
    }
</script>