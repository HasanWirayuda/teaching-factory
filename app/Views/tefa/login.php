<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>

<div class="container container-login">
    <div class="row my-3">
        <div class="col text-center">
            <img src="/img/logo tefa oren.png" alt="logo tefa" width="300" class="logo-admin">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="" method="post" class="box-login">
                <a href="/tefa"><img src="/img/arrow.png" alt="arrow" width="16"></a>
                <img src="/img/log-in.png" alt="" width="100">
                <h3 class="fw-bold">Masuk ke Teaching Factory</h3>
                <?php if (session()->getFlashdata('err')) : ?>
                    <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('err') ?>
                    </div>
                <?php endif; ?>
                <div class="form-input">
                    <div>
                        <label for="inputNomor" class="form-label label-login">NOMOR PONSEL</label>
                        <input type="text" name="inputNomor" class="form-control shadow-none" value="<?= session()->getFlashdata("inputNomor") ?>" id="inputNomor" placeholder="Masukan nomor ponsel">
                    </div>
                    <div>
                        <label for="inputPassword" class="form-label label-login">KATA SANDI</label>
                        <input type="password" name="inputPassword" class="form-control shadow-none" id="inputPassword" placeholder="Masukan kata sandi anda">
                    </div>
                </div>
                <button class="button-masuk text-white rounded fw-bold" type="submit" name="login" value="LOGIN">MASUK</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection("content") ?>