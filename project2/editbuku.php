<?php
include "koneksi.php";
$id = $_GET['id'];

$q = "SELECT * FROM buku where id = '$id'";
$data = mysqli_query($conn, $q);

if ($data) {
  header("Location: buku.php");
} else {
  echo "gagal";
}