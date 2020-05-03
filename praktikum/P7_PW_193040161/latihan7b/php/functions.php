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

// fungsi untuk mengubah data
function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $nama_produk = htmlspecialchars($data['nama_produk']);
  $kategori = htmlspecialchars($data['kategori']);
  $berat = htmlspecialchars($data['berat']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE elektronik
            SET
            nama_produk = '$nama_produk',
            kategori = '$kategori',
            berat = '$berat',
            harga = '$harga',
            gambar = '$gambar'
            WHERE id = '$id'";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('Username sudah digunakan!');
        </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru
  $query_tambah = "INSERT INTO user 
                    VALUES
                  ('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
