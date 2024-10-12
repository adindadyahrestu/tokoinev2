<?php
    session_start();

    include 'koneksi/koneksi.php';   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Custom fonts for this template-->
     <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include 'include/navbar.php';?>

<section class="about py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 about-img">
                <img src="assets/foto/banner1.jpg" alt="Tentang Kami" class="img-fluid rounded shadow mb-4">
            </div>
            <div class="col-md-6 content">
                <h3 class="mb-4">Kenapa Memilih Produk Kami?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam modi, ullam deleniti tempore voluptate asperiores!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum velit repellendus, placeat dolores nulla?</p>

                <div class="row my-4">
                    <div class="col-md-6">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Kualitas Terjamin</h5>
                                <p class="card-text">Setiap produk kami telah melalui proses kontrol kualitas yang ketat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Layanan Pelanggan 24/7</h5>
                                <p class="card-text">Kami siap membantu Anda kapan saja, 24 jam sehari.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="list-unstyled my-4">
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle me-2 text-success"></i>
                        <span>Produk berkualitas tinggi</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle me-2 text-success"></i>
                        <span>Layanan pelanggan yang responsif</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle me-2 text-success"></i>
                        <span>Pengiriman cepat dan aman</span>
                    </li>
                </ul>                
                <div class="col-md-8">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Anggota Kelompok</h5>
                                <p class="card-text">202243579054 - Ade Candra Kurniawan</p>
                                <p class="card-text">202143501404 - Abdul Wahid Kaliki</p>
                                <p class="card-text">202143502663 - Adinda Dyahrestu Putri</p>
                                <p class="card-text">202143501397 - Edi Kurnianto</p>
                                <p class="card-text">202143501399 - Fadhlurrohman</p>
                                <p class="card-text">202143501418 - Raihan Khalisa W</p>

                                <div class="card-footer text-muted">
                                    <small>Created By Kelompok 1</small>
                                </div>
                            </div>
                        </div>
                    </div>

                <a href="produk.php" class="btn btn-primary mt-3">Lihat Produk Kami</a>
            </div>
        </div>       
    </div>
</section>



<?php include 'include/footer.php'; ?>

<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- js btn-menu -->
    <script src="assets/js/main.js"></script>
    <!-- js owl carousel -->
</body>
</html>