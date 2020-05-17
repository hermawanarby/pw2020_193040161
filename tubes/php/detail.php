<?php
// mencetak apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];

// untuk menampung harga yg akan dirubah ke format number rupiah
$angka = $elektronik['harga'];

$rekomendasi = query("SELECT * FROM elektronik ORDER BY RAND() LIMIT 3");

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/images/logo-title.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/detail.css">

  <title>Detail - Elec Shopping</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/images/logo.png" alt="logo" width="70" height="70" class="d-inline-block align-top">
      </a>
    </div>
  </nav>
  <!-- Akhir Nabvar -->

  <!-- Breadcrumb -->
  <div class="container">
    <nav>
      <ol class="breadcrumb bg-transparent pl-0">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Product</li>
      </ol>
    </nav>
  </div>
  <!-- Akhir Breadcrumb -->

  <!-- Detail Product -->
  <section class="detail-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <figure class="figure">
            <img src="../assets/images/produk/<?= $elektronik["gambar"]; ?>" class="figure-img img-fluid rounded">
          </figure>
        </div>

        <div class="col-lg-6">
          <div class="container">
            <h2><?= $elektronik["nama_produk"]; ?></h2>
            <h3><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></h3>
            <table class="table table-responsive pt-4">
              <tr>
                <td>Kategori</td>
                <td>:</td>
                <td><b><?= $elektronik["kategori"]; ?><b></td>
              </tr>
              <tr>
                <td>Berat</td>
                <td>:</td>
                <td><b><?= $elektronik["berat"]; ?><b></td>
              </tr>
              <tr>
                <td colspan="3"><a href="../index.php" class="btn mt-3 text-white" style="background-color: #ff9900">Kembali</a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Detail Product -->

  <!-- Rekomendasi Product -->
  <section class="rekomendasi mt-5">
    <div class="container">
      <hr>
      <h5 class="mb-3">Rekomendasi Produk</h5>
      <div class="row">
        <?php foreach ($rekomendasi as $rek) : ?>
          <div class="col mb-4">
            <a href="detail.php?id=<?= $rek['id']; ?>" class="text-decoration-none">
              <div class="card">
                <img src="../assets/images/produk/<?= $rek["gambar"]; ?>" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><?= $rek["nama_produk"]; ?></h5>
                  <p class="card-text"><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- Akhir Rekomendasi Product -->

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
              <button type="button" class="btn text-white mb-2" style="background-color: #ff9900">Send</button>
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
</body>

</html>