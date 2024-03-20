<?= $this->extend("template/template_admin") ?>

<?= $this->section("content") ?>
<div class="container shadow mt-3">
    <div class="row">
        <div class="col">
            <div class="data-pelanggan">Data Pelanggan</div>
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
                        <th scope="col">No Hp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pelanggan as $p) : ?>
                        <tr class="align-middle">
                            <td class="text-center"><?= $i++ ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['no_hp'] ?></td>
                            <td><?= $p['email'] ?></td>
                            <td><?= $p['password'] ?></td>
                            <td><?= $p['alamat'] ?></td>
                            <td style="width: 80px;">
                                <a href="/admin/edit_pelanggan/<?= $p['id'] ?>">
                                    <img src="/img/ubah.svg" alt="edit">
                                </a> |
                                <a href="/admin/delete_pelanggan/<?= $p['id'] ?>" class="tombol-hapus">
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