<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>";
  } else {
    echo "<script>
            alert('data gagal ditambahkan!');
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
  <title>Tambah Mahasiswa</title>
</head>

<body>

  <!-- Nabvar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo-unpas.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>Universitas Pasundan</strong>
      </a>
      <a class="nav text-white" href="logout.php">Logout</a>
    </div>
  </nav>

  <div class="container mt-2">
    <div class="col-lg-6">
      <h3>Tambah Data Mahasiswa</h3>
      <hr style="max-width: 540px;">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" autofocus required>
        </div>
        <div class="form-group">
          <label for="nrp">NRP:</label>
          <input type="text" class="form-control" id="nrp" name="nrp" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan:</label>
          <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="form-group">
          <label>Gambar:</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input gambar" id="gambar" name="gambar" onchange="previewImage()">
              <label class="custom-file-label" for="gambar">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <img src="images/nophoto.png" class="img-thumbnail img-preview" width="120">
        </div>
        <div class="form-group">
          <hr>
          <button type="submit" class="btn btn-primary" name="tambah">Tambah Data!</button>
          <a href="index.php" class="card-link btn btn-secondary ml-2">Kembali</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  <script>
    $('#gambar').on('change', function(e) {
      var fileName = e.target.files[0].name;
      $(this).next('.custom-file-label').html(fileName);
    })
  </script>
</body>

</html>