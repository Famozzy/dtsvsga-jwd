
<?php
  $username = "root";
  $password = "";
  $database = "jwd";

  $conn = new mysqli("localhost", $username, $password, $database);

  if(!$conn) {
    echo "<script>alert('not connected')</script>";
  }
?>