<?php
$conn = mysqli_connect("localhost", "root", "") or die("kodeksi ke DB gagal");
mysqli_select_db($conn, "tubes_193040161") or die("Database salah!");
$result = mysqli_query($conn, "SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tubes PW - 193040161</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2 align="center">DAFTAR BARANG ELEKTRONIK</h2>
  <table border="1" cellpadding="10" cellspacing="0" align="center">

    <tr>
      <th>NO</th>
      <th>Gambar</th>
      <th>Nama Produk</th>
      <th>Kategori</th>
      <th>Berat</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1 ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="assets/img/<?= $row["gambar"]; ?>" width="90"></td>
        <td width="300"><?= $row["nama_produk"]; ?></td>
        <td><?= $row["kategori"]; ?></td>
        <td><?= $row["berat"]; ?></td>
        <td>Rp.<?= $row["harga"]; ?></td>
      </tr>
      <?php $i++ ?>
    <?php endwhile; ?>

  </table>
</body>

</html>