<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PW - 193040161</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2 align="center">DAFTAR BARANG ELEKTRONIK</h2>

  <form action="" method="get">
    <input type="text" name="keyword">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <?php if (empty($elektronik)) : ?>
    <h1>Data tidak ditemukan</h1>
  <?php else : ?>
    <?php foreach ($elektronik as $row) : ?>
      <p class="nama_produk">
        <a href="php/detail.php?id=<?= $row['id']; ?>">
          <?= $row["nama_produk"]; ?>
        </a>
      </p>
    <?php endforeach; ?>
  <?php endif; ?>

  <a href="php/admin.php">
    <button>Masuk ke halaman Admin</button>
  </a>
</body>

</html>