<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- MyCss -->
    <link rel="stylesheet" href="/css/tefa.css">
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/tefa">Teaching Factory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link" aria-current="page" href="/tefa" hidden>Beranda</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/paket" hidden>Paket</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/tefa/pembayaran" hidden>Pembayaran</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" hidden>
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
                        <a class="nav-link tombol-keluar" href="/login">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container container-login-pelanggan">
        <div class="row mt-4 mb-5">
            <div class="col-12">
                <div class="profile d-flex align-items-center border">
                    <img src="/img/profile.png" alt="foto profile" width="48" class="me-3">
                    <div class="fw-semibold fs-5"><?= $dataPelanggan['nama'] ?></div>
                </div>
                <div class="rank mt-2 d-flex">
                    <span>0 Poin</span>
                    <span class="line-vertical mx-2"></span>
                    <span><img src="/img/silver-medal.png" alt="silver medal" width="24"> Silver</span>
                </div>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-6">
                <div class="card-tagihan shadow">
                    <div class="tagihan px-4 d-flex justify-content-between pt-4">
                        <span>Status Layanan</span>
                        <img src="/img/checklist.png" alt="checklist" width="32">
                    </div>
                    <h5 class="px-4 pt-3">Aktif</h5>
                    <div class="card-footer px-4 d-flex justify-content-end">
                        <span class="me-5">Terbayar</span>
                        <span class="fw-semibold">04 Des '23</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-penggunaan shadow">
                    <span class="px-4 pt-4 mt-1 d-block">Penggunaan Bulan ini</span>
                    <div class="bandwith px-4 mt-3 d-flex align-items-center">
                        <img src="/img/wifi.png" alt="wifi" width="32">
                        <h5 class="ms-2 pt-2">73.52</h5>
                        <h6 class="text-secondary">GB</h6>
                    </div>
                    <div class="card-footer px-4 d-flex">
                        <span>New Loyalty Inet 8 Mbps Up Speed</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col">
                <h5 class="text-body-secondary">REKOMENDASI UNTUK ANDA</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-iklan shadow">
                    <h4>Butuh kecepatan internet <br> tambahan ?</h4>
                    <span>Tingkatkan pengalaman online Anda dengan memperbarui paket <br> kecepatan internet Anda, yang kini tersedia mulai dari 250.000 rupiah per bulan.</span>
                    <img src="/img/rocket.png" alt="roket" width="64" class="roket">
                    <div class="pelangi">
                        <div class="lapis-1">
                            <div class="lapis-2">
                                <div class="lapis-3"></div>
                            </div>
                        </div>
                    </div>
                    <img src="/img/wifi-signal.png" alt="wifi" class="wifi-signal" width="48">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    var tautanKeluar = document.querySelector(".tombol-keluar");
    tautanKeluar.addEventListener("click", function (event) {
      event.preventDefault();

      Swal.fire({
        title: "Keluar?",
        text: "Apakah Anda yakin ingin keluar?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d97706",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Keluar!"
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = tautanKeluar.getAttribute("href");
        }
      });
    });
    </script>

</body>

</html>