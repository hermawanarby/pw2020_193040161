<?php
require 'functions.php';

$id = $_GET['id'];
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil diubah!');
          document.location.href = 'admin.php';
        </script>";
  } else {
    echo "<script>
          alert('Data Gagal diubah!');
          document.location.href = 'admin.php';
        </script>";
  }
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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/admin.css">
  <title>Admin | 193040161</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-dark fixed-top" style="background-color: #6c42f5">
    <a class="navbar-brand" href="#">
      <img src="/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      <strong class="text-uppercase"><i class="fa fa-home"></i> Halaman Admin</strong>
    </a>
  </nav>
  <!-- Akhir Navbar -->

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" id="sidebar">
      <ul class="nav flex-column sidenav ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="#"><i class="fa fa-tachometer mr-2"></i> Dashboard</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="admin.php"><i class="fa fa-tags mr-2"></i> Daftar Produk</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa fa-users mr-2"></i> Daftar Pengguna</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item text-white fixed-bottom ml-3">
          <p>&copy; 2020 | Hermawan Arby</p>
        </li>
      </ul>
    </div>
    <div class="col-md-6 p-5 pt-2" id="main">
      <h3 class="text-uppercase"><i class="fa fa-edit"></i> Edit Data</a></h3>
      <hr>
      <div class="card">
        <div class="card-header text-white" style="background-color: #6c42f5">
          Form Edit Data Barang Elektronik
        </div>
        <div class="card-body">
          <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $elektronik['id']; ?>">
            <div class="form-group">
              <label for="nama_produk">Nama Produk:</label>
              <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="<?= $elektronik['nama_produk']; ?>" required>
            </div>
            <div class="form-group">
              <label for="kategori">Kategori:</label>
              <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $elektronik['kategori']; ?>" required>
            </div>
            <div class="form-group">
              <label for="berat">Berat:</label>
              <input type="text" class="form-control" name="berat" id="berat" value="<?= $elektronik['berat']; ?>" required>
            </div>
            <div class="form-group">
              <label for="harga">Harga:</label>
              <input type="number" class="form-control" name="harga" id="harga" value="<?= $elektronik['harga']; ?>" required>
            </div>
            <div class="form-group">
              <label for="gambar">Gambar:</label>
              <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $elektronik['gambar']; ?>" required>
            </div>
            <a href="admin.php" class="btn btn-secondary float-right">Kembali</a>
            <button type="submit" name="ubah" class="btn text-white float-right mr-2" style="background-color: #6c42f5">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="../js/admin.js"></script>
</body>

</html>