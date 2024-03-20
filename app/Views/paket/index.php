<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>
<div class="container container-paket">
    <div class="row">
        <div class="col">
            <h2 class="text-center mt-3 mb-5 judul">Paket Internet</h2>
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
        <?php foreach ($paket as $p) : ?>
            <div class="col-md-3">
                <div class="card-paket mb-4 shadow">
                    <div class="card-atas">
                        <h4 class="text-white text-center"><?= $p['nama_paket'] ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="fw-bold fs-5"><?= $p['kecepatan'] ?></div>
                        <div class="d-flex">
                            <span class="text-decoration-line-through text-body-secondary">Rp <?= $p['harga_normal'] ?>.000</span>
                            <div class="px-2 rounded-pill diskon text-danger">-<?= $p['diskon'] ?>%</div>
                        </div>
                        <div class="harga d-flex align-items-center">
                            <span class="rp align-self-start">Rp</span>
                            <h3 class="mx-1"><?= $p['harga_diskon'] ?>.000</h3>
                            <span class="text-body-secondary">/ bulan</span>
                        </div>
                        <div class="chat">
                            <a href="/paket/daftar"><button class="btn tombol fw-semibold py-2 text-light rounded-3 w-full">Langganan Sekarang</button></a>
                            <button class="btn tombol-2 border border-dark-subtle fw-semibold rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Chat Sales</button>
                        </div>
                        <div class="fitur d-flex flex-column justify-content-between">
                            <h6>FITUR</h6>
                            <div class="d-flex align-items-center">
                                <img src="/img/jaringan.png" alt="" width="25">
                                <span class="ms-2">Internet UNLIMITED</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="/img/hp.png" alt="" width="25" class="">
                                <span class="ms-2">Ideal untuk 1 - <?= $p['fitur'] ?> Device</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="/img/perkakas.png" alt="" width="20" class="perkakas">
                                <span class="instalasi">Gratis Instalasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Modal -->
        <div class="modal fade container-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><img src="/img/icon-chat.svg" alt=""></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="fw-bold">Ingin berlangganan Teaching Factory?</h5>
                        <p class="text-agen">Diskusikan kebutuhan internet dengan agen kami</p>
                        <a href="https://api.whatsapp.com/send/?phone=6281564665224" target="_blank" class="link-whatsapp">
                            <div class="chat-wa">
                                <img src="/img/whatsapp.png" alt="icon-whatsapp" width="24" height="24" class="icon-wa">
                                <div class="hubingi ms-3">
                                    <span class="text-dark fw-medium">Hubungi via Whatsapp</span>
                                    <p class="nomer-wa">Official Whatsapp Teaching Factory +62 857 1970 3839</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection("content") ?>