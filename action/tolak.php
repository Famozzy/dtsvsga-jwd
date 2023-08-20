<?php

session_start();
if (!isset($_SESSION["email"])) {
  header("Location: admin-login.php");
}

header("Location: ../dashboard.php");