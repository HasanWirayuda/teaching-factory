<?= $this->extend("template/template_admin") ?>

<?= $this->section("content") ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <!-- Eksplorasi -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-card-1 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-eksplorasi text-uppercase mb-1 motivation">
                                                Eksplorasi</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3">60%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar progres-eksplorasi" role="progressbar" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Inovasi -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-card-2 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-inovasi text-uppercase mb-1 motivation">
                                                Inovasi</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">40%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar progres-inovasi" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Inspirasi -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-card-3 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-inspirasi text-uppercase mb-1 motivation">Inspirasi
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar progres-inspirasi" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kolaborasi -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-card-4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-kolaborasi text-uppercase mb-1 motivation">
                                                Kolaborasi</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar progres-kolaborasi" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold judul-motivasi">Eksplorasi</h6>
                                </div>
                                <div class="card-body text-body-secondary">
                                    Melalui Eksplorasi, kami mendorong pengguna dan tim kami untuk terus menjelajahi peluang baru dan merintis jalur inovatif dalam dunia digital serta merintis jalur-jalur inovatif yang membawa terobosan luar biasa dalam dunia digital.
                                </div>
                            </div>

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold judul-motivasi">Inovasi</h6>
                                </div>
                                <div class="card-body text-body-secondary">
                                    Inovasi menjadi fokus kami, di mana kami berkomitmen untuk menyajikan solusi terdepan dan teknologi mutakhir, membawa pengalaman internet yang selalu berkembang. kami berupaya membawa pengalaman internet yang terbaik.
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold judul-motivasi">Inspirasi</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body text-body-secondary">
                                    Inspirasi hadir sebagai daya pendorong, menghidupkan semangat positif dan memberikan motivasi kepada komunitas kami, dan menjadi inspirasi di ranah digital sebagai kekuatan pendorong utama yang menghidupkan semangat positif.
                                </div>
                            </div>

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold judul-motivasi">Kolaborasi</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body text-body-secondary">
                                    Kolaborasi adalah kunci kesuksesan kami, karena kami mendorong partisipasi aktif dan sinergi antara tim kami dan pelanggan, menciptakan lingkungan yang mendukung yakni merupakan kunci keberhasilan yang tak terbantahkan.
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
    </div>
</div>
<?= $this->endSection("content") ?>