<?php include("_header.php") ?>
<?php
  session_start();
  if (!isset($_SESSION["email"])) {
    header("Location: admin-login.php");
  }
  include_once("config/koneksi.php");
  function cekStatus($status) {
    if($status == 0){
      echo '<span class="badge text-bg-warning">Belum Diverifikasi</span>';
    } else if($status == 1) {
      echo '<span class="badge text-bg-success">Sudah Diverifikasi</span>';
    } else {
      echo '<span class="badge text-bg-danger">Ditolak</span>';
    }
  }
?>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-12 overflow-x-auto">
      <h2 class="ms-5">Admin Dashboard</h2>
      <a class="btn btn-outline-danger ms-5" href="action/logout.php">Logout</a>
      <hr>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No. HP</th>
            <th scope="col">NIM</th>
            <th scope="col">Semester Saat Ini</th>
            <th scope="col">IPK</th>
            <th scope="col">Pilihan Beasiswa</th>
            <th scope="col">Berkas Syarat</th>
            <th scope="col">Status Ajuan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $query = "SELECT * FROM pendaftar";
            $result = mysqli_query($conn, $query);
            $n = 1;
          ?>
          <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <th scope="row"><?= $n++ ?></th>
              <td><?= $row["nama"] ?></td>
              <td><?= $row["email"] ?></td>
              <td><?= $row["no_hp"] ?></td>
              <td><?= $row["nim"] ?></td>
              <td>Semester <?= $row["semester"]?></td>
              <td><?= $row["ipk"] ?></td>
              <td><?= $row["pilihan_beasiswa"] ?></td>
              <td><a href="uploads/<?= $row["berkas"] ?>" target="_blank">Lihat Berkas</a></td>
              <td><?= cekStatus($row["status_ajuan"]); ?></td>
              <td>
                <a class="btn btn-sm btn-primary" href="action/terima.php?id=<?=$row["id"]?>">Terima</a>
                <a class="btn btn-sm btn-danger" href="action/tolak.php?id=<?=$row["id"]?>">Tolak</a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include("_footer.php") ?>
  
