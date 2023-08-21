<?php

session_start();
if (!isset($_SESSION["email"])) {
  header("Location: admin-login.php");
}

include_once("../config/koneksi.php");

if(isset($_GET["id"])) {
  header("Location: ../dashboard.php");
  $id_pendaftar = $_GET["id"];

  $query = "UPDATE pendaftar SET status_ajuan = -1 WHERE id = $id_pendaftar";
  $result = mysqli_query($conn, $query);

  if($result) {
    header("Location: ../dashboard.php");
  }
}
