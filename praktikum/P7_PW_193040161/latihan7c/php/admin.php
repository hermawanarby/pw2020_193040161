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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
  <br>
  <div class="add">
    <a href="tambah.php"><button>Tambah Data!</button></a>
  </div>
  <br>
  <form action="" method="get">
    <input type="text" name="keyword">
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>
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

    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($elektronik as $e) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $e['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $e['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $e['gambar']; ?>" width="100"></td>
          <td><?= $e['nama_produk']; ?></td>
          <td><?= $e['kategori']; ?></td>
          <td><?= $e['berat']; ?></td>
          <td>Rp.<?= $e['harga']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>

  </table>
</body>

</html>