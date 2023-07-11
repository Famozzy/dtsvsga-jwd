<?php
  include "koneksi.php";
  session_start();
  global $buku;
  
  if($_SESSION['email'] == null){
    header("Location: index.php");
  }
  $id = base64_decode($_GET['id']);
  $query = "SELECT * FROM buku where id = '$id'";
  $data = mysqli_query($conn, $query);
  $buku = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
</head>
<body>
  <h1>Judul     : <?= $buku["judul"] ?></h1>
  <h1>Pengarang : <?= $buku["pengarang"] ?></h1>
  <h1>Stok buku : <?= $buku["stok"] ?></h1>
  <p><a href="buku.php">Kembali</a> ke halaman buku</p>
</body>
</html>
