<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("kodeksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040161") or die("Database salah!");

  return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $sql);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
  $conn = koneksi();

  $nama_produk = htmlspecialchars($data['nama_produk']);
  $kategori = htmlspecialchars($data['kategori']);
  $berat = htmlspecialchars($data['berat']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO elektronik
            VALUES
          ('', '$nama_produk', '$kategori', '$berat', '$harga', '$gambar') ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

  return mysqli_affected_rows($conn);
}
