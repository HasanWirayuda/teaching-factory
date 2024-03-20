<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>
<div class="container container-pendaftaran">
    <div class="row mt-4 mb-4">
        <div class="col">
            <h3>Form Pendaftaran</h3>
        </div>
    </div>
    <form action="/paket/save" class="row" method="post">
        <div class="col-md-12 mb-4">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control shadow-none" id="nama" placeholder="Nama Lengkap" name="nama" required>
        </div>
        <div class="col-12 mb-4">
            <label for="no_hp" class="form-label">No Telepon</label>
            <input type="number" class="form-control shadow-none" id="no_hp" placeholder="Nomor Handphone" name="no_hp" required>
        </div>
        <div class="col-12 mb-4">
            <label for="passowrd" class="form-label">Password</label>
            <input type="text" class="form-control shadow-none" id="password" placeholder="Password" name="password" required>
        </div>
        <div class="col-12 mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control shadow-none" id="email" placeholder="Alamat Email" name="email" required>
        </div>
        <div class="col-12 mb-4">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control shadow-none" id="alamat" rows="3" name="alamat" required></textarea>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn px-3 button-pendaftaran text-white">Kirim Data</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>