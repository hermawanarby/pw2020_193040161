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

  <div class="container">
    <h2 class="py-3 text-uppercase text-center">Daftar Barang Elektronik</h2>
    <table class="table table-bordered">
      <thead class="text-uppercase thead-dark">
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Berat</th>
          <th>Harga</th>
        </tr>
      </thead>

      <?php $i = 1 ?>
      <?php foreach ($elektronik as $row) : ?>
        <tbody>
          <tr>
            <td><?= $i; ?></td>
            <td><img src="assets/images/<?= $row["gambar"]; ?>" width="90"></td>
            <td width="350"><?= $row["nama_produk"]; ?></td>
            <td><?= $row["kategori"]; ?></td>
            <td><?= $row["berat"]; ?></td>
            <td>Rp.<?= $row["harga"]; ?></td>
          </tr>
        </tbody>
        <?php $i++ ?>
      <?php endforeach; ?>

    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>