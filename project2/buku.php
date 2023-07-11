<?php
  include 'koneksi.php';
  session_start();
  if(!isset($_SESSION["email"])) {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Buku</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">DTS KOMINFO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Dropdown link
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Anggota 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Tambah Anggota</a>
        </div>
      </li>
      <li>
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div id="wrapper" style="height:auto; background-color:white; padding:16px">
<h3>Data Buku</h3>
<a href="buku.php?aksi=tambah" class="btn btn-success my-3">tambah</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Pengarang</th>
        <th scope="col">stok buku</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $buku = mysqli_query($conn, "SELECT * FROM buku");
      while ($b = mysqli_fetch_array($buku)):
      ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $b['judul']; ?></td>
          <td><?= $b['pengarang']; ?></td>
          <td><?= $b['stok']; ?></td>
          <td colspan=2>
            <?php $id = base64_encode($b["id"]);?>
            <a href="buku.php?aksi=edit&id=<?= $id ?>" class="btn btn-warning">Edit</a>
            <a href="hapusbuku.php?id=<?= $id ?>" class="btn btn-danger">Hapus</a>
            <a href="cetakbuku.php?id=<?= $id ?>" class="btn btn-secondary">cetak</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<?php if(isset($_GET["aksi"])): ?>
<div class="modal fade"  id="modalbuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $_GET["aksi"] ?> buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if($_GET["aksi"] == "tambah"): ?>
        <form action="tambahbuku.php" method="post">
          <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku">
          </div>
          <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang">
          </div>
          <div class="form-group">
            <label for="stok">Stok Buku</label>
            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok Buku">
          </div>
          <button type="submit" class="btn btn-primary">Tambah buku</button>
        </form>
        <?php elseif($_GET["aksi"] == "edit"): ?>
        <?php 
          $id = base64_decode($_GET["id"]);
          $data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
          $buku = mysqli_fetch_assoc($data);
        ?>
        <form action="ubahbuku.php" method="post">
          <input type="hidden" name="id" value="<?=$buku["id"]?>">
          <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" value="<?=$buku["judul"]?>">
          </div>
          <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang" value="<?=$buku["pengarang"]?>">
          </div>
          <div class="form-group">
            <label for="stok">Stok Buku</label>
            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok Buku" value="<?=$buku["stok"]?>">
          </div>
          <button type="submit" class="btn btn-primary">Simpan perubahan</button>
        </form>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<?php if(isset($_GET['aksi'])): ?>
<script type="text/javascript">
  $(window).on('load', function() {
    $('#modalbuku').modal('show');
  });
</script>
<?php endif ?>
</body>
</html>