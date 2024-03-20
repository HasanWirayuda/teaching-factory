<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- My Css -->
  <link rel="stylesheet" href="/css/css-admin/admin.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <title><?= $title ?></title>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <aside id="sidebar">
      <div class="h-100">
        <div class="sidebar-logo text-center">
          <a href="#">MENU</a>
        </div>
        <!-- Sidebar Navigation -->
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="/admin/beranda" class="sidebar-link d-flex align-items-center">
              <i class="fa-solid fa-list pe-2"><img src="/img/dashboard.svg" alt="icon-dashboard"></i>
              Beranda
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
              <i class="align-items-center pe-1"><img src="/img/tabel.svg" alt="icon-tabel"></i>
              Tabel
            </a>
            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="/admin/data_pelanggan" class="sidebar-link">Pelanggan</a>
              </li>
              <li class="sidebar-item">
                <a href="/admin/data_kontak" class="sidebar-link">Kontak</a>
              </li>
              <li class="sidebar-item">
                <a href="/admin/data_testimoni" class="sidebar-link">Testimoni</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="/login" class="sidebar-link tombol-keluar">
              <i class="icon-keluar"><img src="/img/keluar.svg" alt="icon-keluar"></i>
              Keluar
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- Main Component -->
    <div class="main">
      <nav class="navbar navbar-expand px-3">
        <!-- Button for sidebar toggle -->
        <button class="btn" type="button" data-bs-theme="light">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
          <span class="navbar-brand mt-1"><img src="/img/logo tefa oren.png" alt="logo tefa" width="250"></span>
          <form action="" class="d-flex" role="search" method="get">
            <input class="form-control me-2 shadow-none inputCari" type="search" placeholder="Cari..." aria-label="Search" name="search">
            <button class="btn button-cari" type="submit">Cari</button>
          </form>
        </div>
      </nav>
      <main class="content px-2 py-4">
        <?= $this->renderSection("content"); ?>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    const toggler = document.querySelector(".btn");
    toggler.addEventListener("click", function() {
      document.querySelector("#sidebar").classList.toggle("collapsed");
    });
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    var tombolHapusList = document.querySelectorAll(".tombol-hapus");
    var tautanKeluar = document.querySelector(".tombol-keluar");

    tombolHapusList.forEach(function (tombolHapus) {
      tombolHapus.addEventListener("click", function (event) {
        event.preventDefault();

        var urlHapus = tombolHapus.getAttribute("href");

        Swal.fire({
          title: "Apakah anda yakin?",
          text: "Anda tidak dapat mengembalikannya!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d97706",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Hapus!"
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = urlHapus;
          }
        });
      });
    });

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
  });
</script>
</body>

</html>