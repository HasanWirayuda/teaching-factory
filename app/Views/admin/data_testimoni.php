<?= $this->extend("template/template_admin") ?>

<?= $this->section("content") ?>
<div class="container shadow mt-3">
    <div class="row">
        <div class="col">
            <div class="data-pelanggan">Data Testimoni</div>
            <script>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    Swal.fire({
                        title: "<?= (session()->getFlashdata('title')) ?>",
                        text: "<?= (session()->getFlashdata('pesan')) ?>",
                        icon: "success",
                        confirmButtonColor: "#d97706"
                    });
                <?php endif; ?>
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($testimoni as $t) : ?>
                        <tr class="align-middle">
                            <td class="text-center"><?= $i++ ?></td>
                            <td><?= $t['nama'] ?></td>
                            <td><?= $t['email'] ?></td>
                            <td class="text-center"><?= $t['rating'] ?></td>
                            <td><?= $t['judul'] ?></td>
                            <td style="width: 400px" ;><?= $t['deskripsi'] ?></td>
                            <td style="width: 80px;">
                                <a href="/admin/edit_testimoni/<?= $t['id'] ?>">
                                    <img src="/img/ubah.svg" alt="edit">
                                </a> |
                                <a href="/admin/delete_testimoni/<?= $t['id'] ?>" class="tombol-hapus">
                                    <img src="/img/hapus.svg" alt="hapus">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection("content") ?>