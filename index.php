<?php
    session_start();
    include 'koneksi/koneksi.php';

    $produk = array();

    $ambil = $koneksi->query("SELECT * FROM produk JOIN kategori
    ON produk.id_kategori=kategori.id_kategori LIMIT 8");
     
    while($pecah = $ambil->fetch_assoc()){
        $produk[] = $pecah;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko ONE</title>
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
    <!-- navbar start -->

 <?php include 'include/navbar.php';?>
    <!-- navbar end -->   

    <div class="container">

    <!--hero section Start  -->
    <section class="hero">
        <div id="owl-nav"></div>
        <div class="owl-carousel owl-theme">

            <div class="item">
                <img src="assets/foto/banner1.jpg">
                <main class="content">
                    <h1>Toko <span>One</span></h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quasi.</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </main>
            </div>

            <div class="item">
                <img src="assets/foto/banner2.jpg">
                <main class="content">
                    <h1>Toko <span>One</span></h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quasi.</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </main>
            </div>
            
            <div class="item">
                <img src="assets/foto/banner1.jpeg">
                <main class="content">
                    <h1>Toko <span>One</span></h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, quasi.</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </main>
            </div>


        </div>
    </section>
    <!--hero section End  -->

        <!-- about section start -->

        <section class="about">           
            <div class="row">
                <div class="col-md-6 about-img">
                    <img src="assets/foto/banner1.jpg" alt="">
                </div>
                <div class="col-md-6 content">
                    <h3>Kenapa Memilih Produk Kami?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam modi, ullam deleniti tempore voluptate asperiores!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum velit repellendus, placeat dolores nulla?</p>
                </div>
            </div>

        </section>
        <!-- about section end -->

        <!-- produk section start -->
        <section class="produk">
            <div class="produk-box">
            <h2><span>Produk</span> Kami</h2>
            </div>
            <div class="row">

            <?php foreach ($produk as $key => $value): ?>
                <div class="col-md-3">
                <div class="card">
                    <img src="assets/foto_produk/<?php echo $value['foto_produk'];?>">
                    <div class="card-body content">
                        <h5><?php echo $value['nama_produk'];?></h5>
                        <p>Rp. <?php echo number_format($value['harga_produk']); ?></p>
                        <a href="beli.php?idproduk=<?php echo $value['id_produk'];?>" class="btn btn-success">
                            <i class="fas fa-shopping-cart"></i> Keranjang
                        </a>
                        <a href="detail_produk.php?idproduk=<?php echo $value['id_produk'];?>" class="btn btn-success">
                            <i class="fas fa-eye"></i> Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>            

            </div>
        </section>

        <!-- produk section end -->

        <!-- kontak section start -->
            <section class="kontak">
                <h2 class="judul"><span>Kontak</span>Kami</h2>
                <div class="row">

                <div class="col-md-6 kontak-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7606820004767!2d106.85944907355544!3d-6.2951492616100575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed80b84ac47d%3A0x640561dd89719c88!2sUniversitas%20Indraprasta%20PGRI%20(UNINDRA)%2C%20Kampus%20B!5e0!3m2!1sid!2sid!4v1727682446966!5m2!1sid!2sid"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-6 kontak-form">
                    <form method="post">
                        <div class="card">
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
                </div>

                </div>
            </section>
        <!-- kontak section start -->

    </div>

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

    <?php include 'include/footer.php';?>

    
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