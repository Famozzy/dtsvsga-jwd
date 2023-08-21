<?php

include_once("../config/koneksi.php");

if(isset($_POST["submit"])) {
  $ipk = (float) $_POST["ipk"];

  if($ipk < 3.0) {
    header("Location: ../daftar.php");
  }

  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $no_hp = $_POST["no_hp"];
  $semester = $_POST["semester"];
  $pilihan_beasiswa = $_POST["pilihan_beasiswa"];
  $berkas = $_FILES["berkas"];

  $target_dir = "../uploads/";
  $file_name = basename($berkas["name"]);
  $target_file = $target_dir . $file_name;
  move_uploaded_file($berkas["tmp_name"], $target_file);
  // header("Location: ../uploads/$file_name");

  $query = "INSERT INTO pendaftar (nama, email, no_hp, semester, ipk, pilihan_beasiswa, berkas) VALUES ('$nama', '$email', '$no_hp', '$semester', '$ipk', '$pilihan_beasiswa', '$file_name')";
  $result = mysqli_query($conn, $query);

  if($result) {
    header("Location: ../index.php?status=success");
  }
}