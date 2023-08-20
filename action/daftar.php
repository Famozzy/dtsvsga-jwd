<?php

include_once("../config/koneksi.php");

if(isset($_POST["submit"])) {
  $ipk = $_POST["ipk"];

  if($ipk < 3.0) {
    header("Location: ../daftar.php");
  }

  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $no_hp = $_POST["no_hp"];
  $semester = $_POST["semester"];
  $pilihan_beasiswa = $_POST["pilihan_beasiswa"];
  $berkas = $_FILES["berkas"];

  $query = "INSERT INTO pendaftar (nama, email, no_hp, semester, ipk, pilihan_beasiswa, berkas, status_ajuan) VALUES ('$nama', '$email', '$no_hp', '$semester', '$ipk', '$pilihan_beasiswa', '$berkas', '0')";
}