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

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>Home - 193040161</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #6c42f5">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong class="text-uppercase">Electronic Shop</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav text-uppercase mx-auto">
          <li class="nav-item active mr-2">
            <a class="nav-link" href="#">Produk <span class="sr-only">(current)</span></a>
          </li>
          <form action="" method="get" class="form-inline my-2 my-lg-0">
            <div class="input-group input-group-sm">
              <input type="text" name="keyword" class="form-control" size="70px" placeholder="Cari produk.." aria-label="Cari produk.." aria-describedby="button-addon2" autocomplete="off" autofocus>
              <div class="input-group-append">
                <button class="btn btn-outline text-white" style="border-color: #bdbbbb" type="submit" name="cari" id="button-addon2">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </ul>
        <a href="php/admin.php" class="nav-link text-uppercase btn btn-outline-light">Admin</a>
      </div>
    </div>
  </nav>
  <!-- Akhir Nabvar -->

  <!-- Product -->
  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h3>Arrival Product</h3>
          <p>Barang elektronik terlengkap</p>
          <hr>
        </div>
      </div>

      <?php if (empty($elektronik)) : ?>
        <h1 class="text-center pt-5">
          <i class="fa fa-search"></i>
          Data Not Found!
        </h1>
      <?php else : ?>

        <div class="row">
          <?php foreach ($elektronik as $row) : ?>
            <?php $angka = $row['harga']; ?>
            <div class="col-6 col-md-4 col-lg-3 mb-3">
              <div class="card">
                <img src="assets/images/<?= $row['gambar']; ?>" class="card-img-top">
                <div class="card-body">
                  <h6 class="card-title"><?= $row['nama_produk']; ?></h6>
                  <p class="card-text"><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></p>
                </div>
                <a href="php/detail.php?id=<?= $row['id']; ?>" class="btn btn-block text-white" style="background-color: #6c42f5">Lihat Detail</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Akhir Product -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>