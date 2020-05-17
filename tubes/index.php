<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword    = $_GET['keyword'];
  $elektronik = query("SELECT * FROM elektronik WHERE
                nama_produk LIKE '%$keyword%' OR
                kategori    LIKE '%$keyword%' OR
                berat       LIKE '%$keyword%' OR
                harga       LIKE '%$keyword%' ");
} else {
  $elektronik = query("SELECT * FROM elektronik");
}
$newProduct = query("SELECT * FROM elektronik ORDER by id DESC LIMIT 5");
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/images/logo-title.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>Home ― Elec Shopping</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logo.png" alt="logo" width="70" height="70" class="d-inline-block align-top">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">Produk <span class="sr-only">(current)</span></a>
          </li>
          <form action="" method="get" class="form-inline my-2 my-lg-0">
            <div class="input-group input-group-sm">
              <input type="text" name="keyword" class="form-control keyword" size="100" placeholder="Cari produk.." aria-label="Cari produk.." aria-describedby="button-addon2" autocomplete="off" autofocus>
              <div class="input-group-append">
                <button class="btn btn-outline text-muted" style="background-color: #f3f3f3; border-color: #c9c7c7;" type="submit" name="cari" id="button-addon2">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
          <a href="php/dashboard.php" class="btn btn-primary ml-5">Admin</a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Nabvar -->

  <!-- Owl Carousel -->
  <section id="banner-area">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="assets/images/banner/slide1.jpg" alt="slide1">
      </div>
      <div class="item">
        <img src="assets/images/banner/slide2.jpg" alt="slide2">
      </div>
      <div class="item">
        <img src="assets/images/banner/slide3.jpg" alt="slide3">
      </div>
    </div>
  </section>
  <!-- Akhir Owl Carousel -->

  <!-- New Product -->
  <section id="new-product">
    <div class="container">
      <?php if (empty($elektronik)) : ?>
      <?php else : ?>

        <h5 class="pt-5 text-muted">Produk Terbaru</h5>
        <hr>
        <div class="owl-carousel owl-theme ">
          <?php foreach ($newProduct as $np) : ?>
            <?php $angka = $np['harga']; ?>
            <div class="item">
              <div class="card mx-auto">
                <img src="assets/images/produk/<?= $np['gambar']; ?>" class="card-img-top">
                <div class="card-body">
                  <h6 class="card-title"><?= $np['nama_produk']; ?></h6>
                  <p class="card-text"><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></p>
                </div>
                <a href="php/detail.php?id=<?= $np['id']; ?>" class="btn btn-block text-white" style="background-color: #ff9900">Lihat Detail</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Akhir New Product -->

  <!-- Arivall Product -->
  <section id="arivall-product">
    <div class="container">

      <?php if (empty($elektronik)) : ?>
        <h1 class="text-center pt-5 pb-3" style="color: #dbdbdb">
          <i class="fa fa-search"></i>
          Data Not Found!
        </h1>
      <?php else : ?>

        <div class="row">
          <div class="col">
            <h5 class="pt-5 text-muted">Barang Elektronik Terlengkap</h5>
            <hr>
          </div>
        </div>

        <div class="row">
          <?php foreach ($elektronik as $row) : ?>
            <?php $angka = $row['harga']; ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
              <div class="card mx-auto">
                <img src="assets/images/produk/<?= $row['gambar']; ?>" class="card-img-top">
                <div class="card-body">
                  <h6 class="card-title"><?= $row['nama_produk']; ?></h6>
                  <p class="card-text"><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></p>
                </div>
                <a href="php/detail.php?id=<?= $row['id']; ?>" class="btn btn-block text-white" style="background-color: #ff9900">Lihat Detail</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Akhir Arivall Product -->

  <!-- Footer -->
  <section id="footer" class="footer bg-dark text-white py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <h4 class="text-uppercase">Elec Shopping</h4>
          <p class="text-muted">Toko online elektronik terlengkap, terpecaya dan aman untuk kebutuhan anda.</p>
        </div>
        <div class="col-12 col-lg-4">
          <h4>Contact Us</h4>
          <form class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Message..">
            </div>
            <div class="col">
              <button type="button" class="btn btn-primary mb-2">Send</button>
            </div>
          </form>
        </div>
        <div class="col-12 col-lg-2">
          <h4>Information</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="text-muted pb-1">Product</a>
            <a href="#" class="text-muted pb-1">Delevery</a>
            <a href="#" class="text-muted pb-1">Privacy</a>
            <a href="#" class="text-muted pb-1">Term</a>
          </div>
        </div>
        <div class="col-12 col-lg-2">
          <h4>Follow Us</h4>
          <div class="d-flex flex-column flex-wrap ">
            <a href="https://web.facebook.com/hermawanarbyy" class="text-muted pb-1">Facebook</a>
            <a href="https://www.instagram.com/hermawanarby/" class="text-muted pb-1">Instagram</a>
            <a href="https://twitter.com/hermawanarby" class="text-muted pb-1">Twitter</a>
            <a href="https://github.com/hermawanarby" class="text-muted pb-1">Github</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="text-muted text-center">
    <p>&copy; Copyright 2020. Design by <a href="#" class="text-muted">Hermawan Arby</a></p>
  </footer>
  <!-- Akhir Footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script src="js/script.js"></script>
</body>

</html>