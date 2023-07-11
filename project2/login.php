<?php
include "koneksi.php";

session_start();
  
if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE email='$email' AND pass='$password'";
  $data = mysqli_query($conn, $query);
  
  if(mysqli_num_rows($data) > 0) {
    $userdata = mysqli_fetch_assoc($data);
    if($email == $userdata["email"] && $password == $userdata["pass"]){
      $_SESSION["email"] = $userdata["email"];
      header("Location: buku.php");
    } 
  } else {
    header("Location: index.php?pesan=password atau username salah!");
  }
}