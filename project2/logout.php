<?php 
  session_start();
  session_destroy();
  echo "<h2>berhasil logout,</br><a href='index.php'>login</a> kembali</h2>";
?>