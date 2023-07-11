<?php
include "koneksi.php";

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$stok = $_POST['stok'];

$data = mysqli_query($conn, "INSERT INTO buku (judul, pengarang, stok) VALUES ('$judul','$pengarang','$stok')");
if ($data) {
  header("Location: buku.php");
} else {
  echo "gagal";
}