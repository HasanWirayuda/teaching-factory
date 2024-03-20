<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>
<div class="container container-ulasan">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-3 mb-5 judul">Ulasan Pelanggan</h2>
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
        </div>
    </div>
    <div class="row">
        <?php foreach ($testimoni as $t) : ?>
            <div class="col-md-3 mb-4">
                <div class="card card-ulasan p-3">
                    <div class="nama-ulasan">
                        <span class="fw-bold"><?= $t['nama'] ?></span>
                        <p><?= $t['email'] ?></p>
                    </div>
                    <div class="bintang pb-2">
                        <?php for ($i = 0; $i < $t['rating']; $i++) : ?>
                            <img src="/img/star.png" alt="bintang">
                        <?php endfor; ?>
                    </div>
                    <span class="judul-ulasan text-uppercase"><?= $t['judul'] ?></span>
                    <p class="deskripsi-ulasan"><?= $t['deskripsi'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="row">
        <div class="col">
            <a href="/tefa/form_ulasan"><button class="btn rounded button-ulasan">Beri Ulasan</button></a>
        </div>
    </div>
</div>
<?= $this->endSection("content") ?>