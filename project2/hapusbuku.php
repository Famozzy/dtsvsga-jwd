<?php
include "koneksi.php";

if(isset($_GET["id"])) {
  $id = base64_decode($_GET["id"]);
  $query = "DELETE FROM buku WHERE id = '$id'";
  
  $data = mysqli_query($conn, $query);
  if($data) {
    header("Location: buku.php");
  } else {
    echo "<script>alert('gagal menghapus data')</script>";
  }
}
