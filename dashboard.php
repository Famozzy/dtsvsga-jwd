<?php include("_header.php") ?>
<?php
  session_start();
  if (!isset($_SESSION["email"])) {
    header("Location: admin-login.php");
  }
  // include_once("config/koneksi.php");

  $data = [
    [
      "id" => "1",
      "nama" => "John Doe",
      "email" => "johndoe@email.com",
      "no_hp" => "08123456789",
      "semester" => "3",
      "ipk" => "3.5",
      "pilihan_beasiswa" => "Beasiswa 1",
      "berkas" => "berkas.pdf",
      "status_ajuan" => "0"
    ],
  ]
?>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-12 overflow-x-auto">
      <h2 class="ms-5">Admin Dashboard</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">No. HP</th>
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
            // $query = "SELECT * FROM pendaftar";
            // $result = mysqli_query($conn, $query);
            // $data = mysqli_fetch_assoc($result);
            while($row = $data[0]): 
            $status_ajuan = $row["status_ajuan"] == 0 ? "Belum Diverifikasi" : "Sudah Diverifikasi";
          ?>
          <tr>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["no_hp"] ?></td>
            <td>Semester <?= $row["semester"]?></td>
            <td><?= $row["ipk"] ?></td>
            <td><?= $row["pilihan_beasiswa"] ?></td>
            <td><a href="uploads/<?= $row["berkas"] ?>" target="_blank">Lihat Berkas</a></td>
            <td><?= $status_ajuan ?></td>
            <td>
              <a class="btn btn-sm btn-primary" href="action/terima.php?id=<?=$row["id"]?>">Terima</a>
              <a class="btn btn-sm btn-danger" href="action/tolak.php?id=<?=$row["id"]?>">Tolak</a>
            </td>
          </tr>
          <?php break; ?>
          <?php endwhile; ?>
        </tbody>
  </div>
</div>

<?php include("_footer.php") ?>
  
