<?php
  include "koneksi.php";
  if(isset($_POST["id"])) {
  
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $stok = $_POST["stok"];
  
    $q = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', stok = '$stok' WHERE id = '$id'";
    $data = mysqli_query($conn, $q);

    if($data) {
      header("Location: buku.php");
    } else {
      echo "<script>alert('gagal mengubah data')</script>";
    }
  }
?>