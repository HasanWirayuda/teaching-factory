<?= $this->extend("template/template"); ?>

<?= $this->section("content"); ?>
<div class="container container-form-ulasan">
    <div class="row mt-4 mb-4">
        <div class="col">
            <h3>Form Edit Testimoni</h3>
        </div>
    </div>
    <form action="/admin/update_testimoni/<?= $testimoni['id'] ?>" class="row edit-form" method="post">
        <div class="col-12 mb-4">
            <label for="inputName" class="form-label">Nama Panggilan</label>
            <input type="text" class="form-control shadow-none" id="inputName" placeholder="Cth: James" aria-label="First name" name="nama" required value="<?= $testimoni['nama'] ?>">
        </div>
        <div class="col-12 mb-4">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control shadow-none" id="exampleFormControlInput1" placeholder="Alamat Email" name="email" required value="<?= $testimoni['email'] ?>">
        </div>
        <div class="col-12 mb-4">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select shadow-none" aria-label="Default select example" id="rating" name="rating" required>
                <option selected class="pilih-bintang"><?= $testimoni['rating'] ?></option>
                <option value="1">Bintang 1</option>
                <option value="2">Bintang 2</option>
                <option value="3">Bintang 3</option>
                <option value="4">Bintang 4</option>
                <option value="5">Bintang 5</option>
            </select>
        </div>
        <div class="col-12 mb-4">
            <label for="judul-ulasan" class="form-label">Judul</label>
            <input type="text" class="form-control shadow-none" id="judul-ulasan" placeholder="Cth: Luar Biasa" name="judul" required value="<?= $testimoni['judul'] ?>">
        </div>
        <div class="col-12 mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="3" name="deskripsi" required><?= $testimoni['deskripsi'] ?></textarea>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn px-3 button-form-ulasan text-white">Edit Ulasan</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>