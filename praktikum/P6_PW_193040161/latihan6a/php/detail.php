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
  <link rel="stylesheet" href="../css/detail.css">

  <title>PW - 193040161</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-dark fixed-top" style="background-color: #6c42f5">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>Electronic Shop</strong>
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
            <img src="../assets/images/<?= $elektronik["gambar"]; ?>" class="figure-img img-fluid rounded">
          </figure>
        </div>

        <div class="col-lg-6">
          <div class="container">
            <h2><?= $elektronik["nama_produk"]; ?></h2>
            <h4><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></h4>
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
                <td colspan="3"><a href="../index.php" class="btn mt-3 text-white" style="background-color: #6c42f5">Kembali</a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Detail Product -->




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>