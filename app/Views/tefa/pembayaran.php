<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center judul mt-3 mb-5">Metode Pembayaran</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="height: 300px;">
                <div class="row g-0">
                    <div class="col-md-4 border-end">
                        <img src="/img/logo bca.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-evenly">
                        <h5 class="card-title ms-3">Bank BCA</h5>
                        <ul>
                            <li>Aktifkan menu m-BCA di ponsel Anda.</li>
                            <li>Pilih menu m-payment dan tekan OK/YES.</li>
                            <li>Masukkan no rek 439201003377530, lalu tekan OK/YES.</li>
                            <li>Masukkan pin m-BCA dan tekan OK/YES.</li>
                            <li>Jika terdapat lebih dari 1 rekening yang terhubung ke m-BCA, pilih nomor rekening yang akan digunakan kemudian tekan OK/YES.</li>
                            <li>Masukkan pin m-BCA Anda dan tekan OK/YES.</li>
                            <li>Anda akan menerima pesan yang berisi informasi transaksi pembayaran.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="height: 300px;">
                <div class="row g-0">
                    <div class="col-md-4 border-end d-flex align-items-center" style="height: 300px">
                        <img src="/img/alfamart.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <h5 class="card-title ms-3 mt-4 mb-4">Alfamart</h5>
                        <ul>
                            <li>Kunjungi Alfamart terdekat di lokasi Anda.</li>
                            <li>Beritahu petugas kasir Alfamart bahwa Anda ingin membayar tagihan Internet.</li>
                            <li>Berikan nomor telepon 0853-5232-7654.</li>
                            <li>Petugas kasir akan memproses pembayaran dengan mencocokkan data dan informasi yang Anda berikan.</li>
                            <li>Jika data sesuai, Anda dapat melakukan pembayaran tagihan Internet menggunakan uang tunai maupun non-tunai.</li>
                            <li>Petugas kasir akan memberikan struk sebagai bukti pembayaran yang telah diproses.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-3" style="height: 300px;">
                <div class="row g-0">
                    <div class="col-md-4 border-end d-flex align-items-center justify-content-center" style="height: 300px">
                        <img src="/img/shopee.png" class="img-fluid rounded-start" alt="..." width="370px">
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <h5 class="card-title ms-3 mt-4 mb-4">Shopee</h5>
                        <ul>
                            <li>Buka aplikasi Shopee, pilih menu Pulsa: Tagihan & Hiburan.</li>
                            <li>Pilih menu Telkom, lalu pilih Internet sebagai produk yang ingin dibayarkan.</li>
                            <li>Masukkan nomor 0853-5232-7654.</li>
                            <li>Selanjutnya, klik Lihat Tagihan.</li>
                            <li>Klik tombol Lanjut dan lakukan pembayaran via metode yang dipilih.</li>
                            <li>Pembayaran berhasil.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

