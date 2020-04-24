<?php
// menggabungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$elektronik = query("SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>

</body>
<table border="1" cellpadding="13" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Opsi</th>
    <th>Gambar</th>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Berat</th>
    <th>Harga</th>
  </tr>

  <?php $i = 1; ?>
  <?php foreach ($elektronik as $e) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href=""><button>Ubah</button></a>
        <a href=""><button>Hapus</button></a>
      </td>
      <td><img src="../assets/img/<?= $e['gambar']; ?>" width="100"></td>
      <td><?= $e['nama_produk']; ?></td>
      <td><?= $e['kategori']; ?></td>
      <td><?= $e['berat']; ?></td>
      <td>Rp.<?= $e['harga']; ?></td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>

</table>

</html>