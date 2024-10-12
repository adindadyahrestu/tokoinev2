<?php
    session_start();

    include 'koneksi/koneksi.php';   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kontak</title>
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
    <section class="page-produk">
        <div class="container">

            <ul class="breadcrumb">
                <li><a href="index.php">Beranda</a></li>
                <li>Kontak</li>                                             
            </ul>

            <div class="row">

                <div class="col-md-3">
                   <?php include 'include/sidebar.php';?>
                </div>

                <div class="col-md-9">

                    <div class="card box">
                       <div class="card-body">
                       <h2>Hubungi Kami</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vitae voluptates praesentium saepe nemo adipisci.</p> 
                       </div>
                    </div>                                      

                    <form method="post">
                        <div class="card mt-4">
                            <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Lengkap :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">E-mail :</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control" placeholder="Masukan E-mail Anda" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No Tlp :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="telepon" class="form-control" placeholder="Masukan Telepon Anda" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Pesan :</label>
                                <div class="col-sm-8">
                                    <textarea type="text" name="pesan" class="form-control" placeholder="Masukan Pesan Anda" required></textarea>
                                </div>
                            </div>

                            <div class="text-right">
                            <button name="kirim" class="btn btn-success">Kirim</button>
                            </div>


                            </div>
                        </div>
                    </form>      

                    <div class="card mt-4">
                        <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7606820004767!2d106.85944907355544!3d-6.2951492616100575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed80b84ac47d%3A0x640561dd89719c88!2sUniversitas%20Indraprasta%20PGRI%20(UNINDRA)%2C%20Kampus%20B!5e0!3m2!1sid!2sid!4v1727682446966!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="300px"></iframe>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <?php 
     if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $pesan = $_POST['pesan'];

        $koneksi->query("INSERT INTO pesan 
        (nama,email,telepon,isi_pesan) VALUES('$nama','$email','$telepon','$pesan')");

        echo "<script>alert('pesan terkirim');</script>";
        echo "<script>location='kontak.php';</script>";
     }

    ?>

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