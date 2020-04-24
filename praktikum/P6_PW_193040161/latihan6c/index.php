<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukakn query
$elektronik = query("SELECT * FROM elektronik");

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
  <?php foreach ($elektronik as $row) : ?>
    <p class="nama_produk">
      <a href="php/detail.php?id=<?= $row['id']; ?>">
        <?= $row["nama_produk"]; ?>
      </a>
    </p>
  <?php endforeach; ?>
</body>

</html>