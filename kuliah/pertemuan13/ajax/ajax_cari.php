<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table class="table table-hover table-bordered">
  <thead class="text-uppercase text-center thead-dark">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php if (empty($mahasiswa)) : ?>
      <tr class="text-center">
        <td colspan="4">
          <h1>404 Not Found!</h1>
          <hr style="max-width: 400px;">
          <p>Data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="images/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>" class="btn btn-warning btn-sm">Lihat Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>