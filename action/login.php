<?php

if(isset($_POST["email"]) && isset($_POST["password"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  if($email == "admin@admin.com" && $password == "admin") {
    session_start();
    $_SESSION["email"] = $email;
    header("Location: ../dashboard.php");
  } else {
    header("Location: ../admin-login.php");
  }
} else {
  header("Location: ../admin-login.php");
}