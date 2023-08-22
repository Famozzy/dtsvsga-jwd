<?php include("_header.php") ?>

<?php
  if(isset($_GET["status"])) {
    if($_GET["status"] == "success") {
      echo "<script>alert('Beasiswa berhasil diajukan')</script>";
    }
  }
?>

<div class="container mt-5">
  <div class="row px-2">
    <div class="col-md-4 mx-auto">
      <h1 class="text-center">Beasiswa<span class="text-danger">Merdeka</span></h1>
      <div class="my-3">
        <p>adalah beasiswa yang diberikan kepada mahasiswa yang berprestasi dan membutuhkan bantuan biaya pendidikan.</p>
        <p class="mb-1">Beasiswa<span class="text-danger">Merdeka</span> memiliki 2 jenis beasiswa, yaitu:</p>
        <ul>
          <li>Beasiswa Prestasi</li>
          <li>Beasiswa Keringanan</li>
        </ul>
      </div>
      <div class="row gap-3">
        <a class="btn btn-primary" href="daftar.php">Daftar Beasiswa</a>
        <a class="btn btn-primary" href="hasil.php">Lihat Hasil</a>
      </div>
    </div>
  </div>
</div>

<?php include("_footer.php") ?>
  
