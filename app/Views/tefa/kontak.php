<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid kontak">
    <div class="row d-flex align-items-center px-5" style="height: 85vh;">
        <script>
            <?php if (session()->getFlashdata('pesan')) : ?>
                Swal.fire({
                    title: "Terima Kasih",
                    text: "<?= (session()->getFlashdata('pesan')) ?>",
                    icon: "success",
                    confirmButtonColor: "#d97706"
                });
            <?php endif; ?>
        </script>
        <div class="col-md-6 text-light">
            <h2 class="lh-base fw-semibold">Masalah dengan Layanan..? <br> Laporkan kendala atau pertanyaan Anda, dan kami siap memberikan solusi terbaik.
            </h2>
            <div class="detail d-flex flex-column justify-content-between" style="height: 230px">
                <h5 class="fw-semibold">Kontak</h5>
                <div class="grup d-flex align-items-center">
                    <img src="/img/alamat.png" class="alamat">
                    <span class="ms-3">Jl. KH. Jaenal, Wanakerta, Subang, Kabupaten Subang</span>
                </div>
                <div class="grup d-flex align-items-center">
                    <img src="/img/telepon.png">
                    <span class="ms-3">0853-5232-7654</span>
                </div>
                <div class="grup d-flex align-items-center">
                    <img src="/img/email.png" class="email">
                    <span class="ms-3">TeachingFactory@gmail.com</span>
                </div>
                <h5 class="fw-semibold">Social Media</h5>
                <div class="grup d-flex align-items-center">
                    <img src="/img/facebook.png" class="sosial-media">
                    <img src="/img/twitter.png" class="sosial-media">
                    <img src="/img/instagram.png" class="sosial-media">
                    <span>Teaching Factory</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 p-5">
                <form action="/tefa/save" method="post">
                    <h2 class="text-center judul mb-4">ada pertanyaan..?</h2>
                    <div class="mb-3">
                        <input type="email" class="form-control input-kontak shadow-none" id="floatingInput" placeholder="Masukan email anda disini..." name="email" required/>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-kontak shadow-none" id="floatingInput" placeholder="Pertanyaan Anda.." name="masalah" required/>
                    </div>
                    <button type="submit" class="button-kontak border-0 fs-4 fw-bold">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>