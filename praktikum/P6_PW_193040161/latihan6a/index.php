<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukakn query
$elektronik = query("SELECT * FROM elektronik");

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

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>PW - 193040161</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-dark fixed-top" style="background-color: #6c42f5">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>Electronic Shop</strong>
      </a>
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