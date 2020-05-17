<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}
if (!isset($_GET['id'])) {
  header("Location: pengguna.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('Data Berhasil dihapus!');
          document.location.href = 'produk.php';
        </script>";
} else {
  echo "<script>
          alert('Data Gagal dihapus!');
          document.location.href = 'produk.php';
        </script>";
}
