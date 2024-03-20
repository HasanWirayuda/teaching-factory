<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid">
    <div class="row beranda">
        <div class="col">
            <h2 class="text-center my-3 judul">#TerhubungTanpaBatas</h2>
            <h3 class="text-center">Dengan biaya yang lebih hemat, <br> hadirkan dunia digital ke ujung jari Anda. </h3>
        </div>
    </div>
    <div class="row beranda-2">
        <div class="col-md-6">
            <img src="/img/megang laptop.png" alt="perempuan megang laptop" width="800" class="megang-laptop">
        </div>
        <div class="col-md-6">
            <div class="content-right">
                <h3 class="fw-semibold">#PakeTefa Lebih Cepat!</h3>
                <p>Era digital memberikan banyak kemudahan dalam beraktivitas sehari-hari, seperti meeting online, upload download, menayangkan sesi live dan streaming. <br> <br>

                    <b class="fw-semibold">Teaching Factory Internet</b> hadir dengan bandwidth hingga 10 Mbps. Sehingga kamu dapat melakukan kegiatan digital 24/7 tanpa perlu khawatir.
                </p>
                <a href="/paket"><button>Beli Sekarang</button></a>
            </div>
        </div>
    </div>
    <div class="row beranda-3">
        <div class="col-md-6 d-flex justify-content-end">
            <div class="content-left">
                <h3 class="fw-semibold">Bermain Game Tanpa Lag!</h3>
                <p>Tingkatkan level dan kuasai permainan untuk menjadi pemain profesional terbaik. Dengan jaringan Internet WiFi cepat dan stabil, lawan musuh dengan kecepatan maksimum tanpa nge-lag. <br> <br>

                    <b class="fw-semibold">Teaching Factory</b> memiliki bandwidth hingga 10 Mbps dengan IP Public. Dapatkan pengalaman terbaik saat bermain game untuk terus jadi juara!
                </p>
                <a href="/paket"><button>Beli Sekarang</button></a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/img/main game.png" alt="bermain game" width="700" class="bermain-game">
        </div>
    </div>
</div>
<?= $this->endSection() ?>