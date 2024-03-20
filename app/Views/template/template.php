<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- MyCss -->
    <link rel="stylesheet" href="/css/tefa.css">
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/tefa"><img src="/img/logo tefa.png" alt="logo" width="200" class="logo-tefa-beranda"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link" aria-current="page" href="/tefa">Beranda</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/paket">Paket</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/tefa/pembayaran">Pembayaran</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/tefa/kontak">Kontak</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/tefa/testimoni">Testimoni</a></li>
                        </ul>
                    </li>
                    <li class="nav-item masuk border px-2 rounded-pill">
                        <a class="nav-link" href="/login">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection("content"); ?>

    <footer class="d-flex align-items-center position-relative">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center">
                        <img src="Assets/Logo Icon.png" alt="" />
                        <a href="/tefa" class="ms-3">Teaching Factory</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-evenly">
                        <a href="/tefa">Beranda</a>
                        <a href="/paket">Paket</a>
                        <a href="/tefa/pembayaran">Pembayaran</a>
                        <a href="/tefa/kontak">Layanan</a>
                    </div>
                </div>
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p>Copyright 2024 Kelompok 5 All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Tambahkan script JavaScript berikut -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Temukan formulir edit
            var formEdit = document.querySelector(".edit-form");

            // Tambahkan event listener untuk meng-handle submit formulir
            formEdit.addEventListener("submit", function(event) {
                // Mencegah aksi default dari submit formulir
                event.preventDefault();

                // Menampilkan SweetAlert konfirmasi
                Swal.fire({
                    title: "Simpan Perubahan?",
                    text: "Apakah Anda yakin ingin menyimpan perubahan?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#d97706",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Simpan",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    // Jika pengguna mengonfirmasi, submit formulir
                    if (result.isConfirmed) {
                        formEdit.submit();
                    }
                });
            });
        });
    </script>

</body>

</html>