<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data Berhasil ditambahkan!');
          document.location.href = 'admin.php';
        </script>";
  } else {
    echo "<script>
          alert('Data Gagal ditambahkan!');
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
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form Tambah Data Barang</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label for="nama_produk">Nama Produk</label><br>
        <input type="text" name="nama_produk" id="nama_produk" required><br><br>
      </li>
      <li>
        <label for="kategori">Kategori</label><br>
        <input type="text" name="kategori" id="kategori" required><br><br>
      </li>
      <li>
        <label for="berat">Berat</label><br>
        <input type="text" name="berat" id="berat" required><br><br>
      </li>
      <li>
        <label for="harga">Harga</label><br>
        <input type="number" name="harga" id="harga" required><br><br>
      </li>
      <li>
        <label for="gambar">Gambar</label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>