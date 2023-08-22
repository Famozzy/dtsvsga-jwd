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
  $nim = $_POST["nim"];
  $pilihan_beasiswa = $_POST["pilihan_beasiswa"];
  $berkas = $_FILES["berkas"];

  $target_dir = "../uploads/";
  $file_name = md5(time() . $berkas["name"]) . ".pdf";
  $target_file = $target_dir . $file_name;
  move_uploaded_file($berkas["tmp_name"], $target_file);

  $query = "INSERT INTO pendaftar (nama, email, no_hp, nim, semester, ipk, pilihan_beasiswa, berkas) VALUES ('$nama', '$email', '$no_hp', '$nim', '$semester', '$ipk', '$pilihan_beasiswa', '$file_name')";
  $result = mysqli_query($conn, $query);

  if($result) {
    header("Location: ../index.php?status=success");
  }
}