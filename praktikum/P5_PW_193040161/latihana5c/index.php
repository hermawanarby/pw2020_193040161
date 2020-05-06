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
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>Electronic Shop</strong>
      </a>
    </div>
  </nav>
  <!-- Akhir Nabvar -->

  <!-- Product -->
  <section class="product p-5" id="product">
    <div class="container">
      <div class="row">
        <div class="col text-center mt-3">
          <h3>Arrival Product</h3>
          <p>Barang elektronik terlengkap</p>
          <hr>
        </div>
      </div>
      <div class="row justify-content-center">
        <?php foreach ($elektronik as $row) : ?>
          <?php
          $nama = $row['nama_produk'];
          $angka = $row['harga'];
          ?>
          <div class="col">
            <figure class="figure">
              <div class="product-img">
                <img src="assets/images/<?= $row["gambar"]; ?>" class="figure-img img-fluid rounded">
                <a href="php/detail.php?id=<?= $row['id']; ?>" class="d-flex justify-content-center">
                  <img src="assets/images/icon-plus.png" class="align-self-center" width="20">
                </a>
              </div>
              <figcaption class="figure-caption">
                <h5><?= substr($nama, 0, 30) . '...'; ?></h5>
                <p><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></p>
              </figcaption>
            </figure>
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