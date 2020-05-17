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
  $users = query("SELECT * FROM user WHERE
                username LIKE '%$keyword%' ");
} else {
  $users = query("SELECT * FROM user");
}

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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/admin.css">
  <title>Daftar Pengguna | Elec Shopping</title>
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
          <a class="nav-link active text-white" href="dashboard.php"><i class="fa fa-tachometer mr-2"></i> Dashboard</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="produk.php"><i class="fa fa-tags mr-2"></i> Daftar Produk</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pengguna.php"><i class="fa fa-users mr-2"></i> Daftar Pengguna</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../index.php"><i class="fa fa-arrow-left mr-2"></i> Back to Home</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item text-white fixed-bottom ml-3">
          <p>&copy; 2020 | Hermawan Arby</p>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-2" id="main">
      <h3 class="text-uppercase"><i class="fa fa-users mr-2 "></i> Daftar Pengguna</a></h3>
      <hr>
      <div class="row mb-3">
        <div class="col">
          <div class="input-group">
            <a href="dashboard.php" class="btn text-white" style="background-color: #6c42f5"><i class="fa fa-tachometer mr-2"></i>Dashboard</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="input-group">
            <form action="" method="get" class="input-group">
              <input type="text" class="form-control keyword" name="keyword" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus>
              <div class="input-group-append">
                <button class="btn text-white tombol-cari" type="submit" name="cari" style="background-color: #6c42f5">Search!</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container-teble">
        <table class="table table-bordered">
          <thead class="text-center text-uppercase bg-dark text-white">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">Username</th>
            </tr>
          </thead>

          <?php if (empty($users)) : ?>
            <tr class="text-center">
              <td colspan="2">
                <h1>404 Not Found!</h1>
                <hr style="max-width: 400px;">
                <p>Data pengguna tidak ditemukan!</p>
              </td>
            </tr>
          <?php else : ?>

            <?php $i = 1; ?>
            <?php foreach ($users as $user) : ?>
              <tbody>
                <tr>
                  <th scope="row" width="10px"><?= $i; ?></th>
                  <td class="text-center"><?= $user['username']; ?></td>
                </tr>
              </tbody>
              <?php $i++; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </table>
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