        <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
        // Fungsi untuk menyalin teks ke clipboard dan kirim ke WhatsApp
       
        document.getElementById('copyButton').addEventListener('click', function() {
            // Ambil elemen input yang disembunyikan
            var hiddenInput = document.getElementById('hiddenInput');
            var message = hiddenInput.value; // Pesan yang akan disalin dan dikirim ke WhatsApp

            // Ambil URL gambar
            var imageUrl = document.getElementById('imageToSend').src;

            // Gabungkan pesan dengan URL gambar
            var fullMessage = message + " " + imageUrl;

            // Menggunakan Clipboard API untuk menyalin teks ke clipboard
            navigator.clipboard.writeText(fullMessage).then(function() {
                // Tampilkan alert setelah berhasil disalin
                alert('Teks berhasil disalin!');

                // Kirim teks ke WhatsApp
                var phoneNumber = '6285263676114'; // Ganti dengan nomor WhatsApp Anda (pastikan menggunakan format internasional)
                var whatsappUrl = 'https://wa.me/' + phoneNumber + '?text=' + encodeURIComponent(fullMessage);
                
                // Membuka WhatsApp dengan pre-filled message
                window.open(whatsappUrl, '_blank');
            }).catch(function(err) {
                // Tangani jika terjadi kesalahan saat menyalin
                console.error('Gagal menyalin teks: ', err);
            });
        });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url("")?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url("assets/assets/demo/chart-area-demo.js")?>assets/demo/chart-area-demo.js"></script>
        <script src="<?=base_url("")?>assets/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url("")?>assets/js/datatables-simple-demo.js"></script>
    </body>
</html>