<?php
require 'functions.php';

$id = $_GET['id'];
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil diubah!');
          document.location.href = 'admin.php';
        </script>";
  } else {
    echo "<script>
          alert('Data Gagal diubah!');
          document.location.href = 'admin.php';
        </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
</head>

<body>
  <h3>Form Ubah Data Barang</h3>
  <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $elektronik['id']; ?>">
    <ul>
      <li>
        <label for="nama_produk">Nama Produk</label><br>
        <input type="text" name="nama_produk" id="nama_produk" value="<?= $elektronik['nama_produk']; ?>" required><br><br>
      </li>
      <li>
        <label for="kategori">Kategori</label><br>
        <input type="text" name="kategori" id="kategori" value="<?= $elektronik['kategori']; ?>" required><br><br>
      </li>
      <li>
        <label for="berat">Berat</label><br>
        <input type="text" name="berat" id="berat" value="<?= $elektronik['berat']; ?>" required><br><br>
      </li>
      <li>
        <label for="harga">Harga</label><br>
        <input type="number" name="harga" id="harga" value="<?= $elektronik['harga']; ?>" required><br><br>
      </li>
      <li>
        <label for="gambar">Gambar</label><br>
        <input type="text" name="gambar" id="gambar" value="<?= $elektronik['gambar']; ?>" required><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="button">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>