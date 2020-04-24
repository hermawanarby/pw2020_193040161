<?php
// mencetak apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
</head>

<body>
  <div class="container">
    <div class="gambar">
      <img src="../assets/img/<?= $elektronik["gambar"]; ?>" width="150">
    </div>
    <div class="keterangan">
      <p><?= $elektronik["nama_produk"]; ?></p>
      <p><?= $elektronik["kategori"]; ?></p>
      <p><?= $elektronik["berat"]; ?></p>
      <p>Rp.<?= $elektronik["harga"]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
  </div>
</body>

</html>