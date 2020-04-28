<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Daftar Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
    }

    h2 {
      font-weight: 600;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2 class="py-3 text-uppercase text-center">Daftar Mahasiswa</h2>
    <table class="table table-hover table-bordered">
      <thead class="text-uppercase text-center thead-dark">
        <tr>
          <th>#</th>
          <th>Gambar</th>
          <th>NRP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><img src="images/<?= $m['gambar']; ?>" width="60"></td>
            <td><?= $m['nrp']; ?></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['email']; ?></td>
            <td><?= $m['jurusan']; ?></td>
            <td>
              <a href="" class="btn btn-primary btn-sm">Ubah</a> | <a href="" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>