<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>";
  } else {
    echo "data gagal diubah!";
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
    }

    .container h3 {
      margin-top: 75px;
    }

    h3,
    h5 {
      font-weight: 600;
    }

    hr {
      margin-left: -1px;
    }
  </style>
  <title>Detail Mahasiswa</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo-unpas.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>Universitas Pasundan</strong>
      </a>
    </div>
  </nav>

  <div class="container mt-2">
    <div class="col-lg-6">
      <h3>Ubah Data Mahasiswa</h3>
      <hr style="max-width: 540px;">
      <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $m['id']; ?>">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </div>
        <div class="form-group">
          <label for="nrp">NRP:</label>
          <input type="text" class="form-control" id="nrp" name="nrp" required value="<?= $m['nrp']; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" name="email" required value="<?= $m['email']; ?>">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan:</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan" required value="<?= $m['jurusan']; ?>">
        </div>
        <div class="form-group">
          <label for="gambar">Gambar:</label>
          <input type="text" class="form-control" id="gambar" name="gambar" required value="<?= $m['gambar']; ?>">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="ubah">Ubah Data!</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>