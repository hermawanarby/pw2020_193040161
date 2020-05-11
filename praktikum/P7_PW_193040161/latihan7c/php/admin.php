<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
// menggabungkan dengan file php lainnya
require 'functions.php';


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
      <i class="fa fa-home"></i>
      <strong class="text-uppercase"> Halaman Admin</strong>
    </a>
    <a href="logout.php" class="navbar-brand  text-capitalize"><i class="fa fa-sign-out mr-1"></i>Logout</a>
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
    <div class="col-md-10 p-5 pt-2" id="main">
      <h3 class="text-uppercase"><i class="fa fa-tags mr-2 "></i> Daftar Produk</a></h3>
      <hr>
      <div class="row mb-3">
        <div class="col">
          <div class="input-group">
            <a href="tambah.php" class="btn text-white" style="background-color: #6c42f5"><i class="fa fa-plus-circle mr-2"></i>Tambah Data!</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="input-group">
            <form action="" method="get" class="input-group">
              <input type="text" class="form-control" name="keyword" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus>
              <div class="input-group-append">
                <button class="btn text-white" type="submit" name="cari" style="background-color: #6c42f5">Search!</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <table class="table table-bordered">
        <thead class="text-center text-uppercase bg-dark text-white">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Berat</th>
            <th scope="col">Harga</th>
            <th scope="col" width="200">Aksi</th>
          </tr>
        </thead>

        <?php if (empty($elektronik)) : ?>
          <tr class="text-center">
            <td colspan="7">
              <h1>404 Not Found!</h1>
              <hr style="max-width: 400px;">
              <p>Data produk tidak ditemukan!</p>
            </td>
          </tr>
        <?php else : ?>

          <?php $i = 1; ?>
          <?php foreach ($elektronik as $e) : ?>
            <?php $angka = $e['harga']; ?>
            <tbody>

              <tr>
                <th scope="row"><?= $i; ?></th>
                <td><img src="../assets/images/<?= $e['gambar']; ?>" width="100"></td>
                <td width="300"><?= $e['nama_produk']; ?></td>
                <td><?= $e['kategori']; ?></td>
                <td><?= $e['berat']; ?></td>
                <td><?= 'Rp ' . number_format($angka, 0, ".", "."); ?></td>
                <td>
                  <a href="ubah.php?id=<?= $e['id']; ?>" class="btn btn-success btn-sm text-white" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                  <a href="hapus.php?id=<?= $e['id']; ?>" class="btn btn-danger btn-sm text-white" onclick="return confirm('Hapus Data?')" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i> Delete</a>
                </td>
              </tr>
            </tbody>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </table>
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