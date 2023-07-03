<?php
  if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == 'admon') {
      echo '<h1>Selamat Datang '+ $username +'</h1>';
    } else {
      header('Location:index.php?status=gagal');
    }
  }
?>
