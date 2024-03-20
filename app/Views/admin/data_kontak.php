<?= $this->extend("template/template_admin") ?>

<?= $this->section("content") ?>
<div class="container shadow mt-3">
    <div class="row">
        <div class="col">
            <div class="data-kontak">Data Kontak</div>
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
                        <th scope="col" class="text-center" >No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Masalah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($kontak as $k) : ?>
                    <tr class="align-middle">
                        <td class="text-center"><?= $i++ ?></td>
                        <td><?= $k['email'] ?></td>
                        <td style="width: 600px";><?= $k['masalah'] ?></td>
                        <td style="width: 80px;">
                            <a href="/admin/edit_kontak/<?= $k['id'] ?>">
                                <img src="/img/ubah.svg" alt="">
                            </a> |
                            <a href="/admin/delete_kontak/<?= $k['id'] ?>" class="tombol-hapus">
                                <img src="/img/hapus.svg" alt="">
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