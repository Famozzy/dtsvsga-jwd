<?php include("_header.php") ?>
<?php 
  include_once("config/koneksi.php");
  function cekStatus($status) {
    if($status == 0){
      echo '<span class="badge text-bg-warning">Menunggu Verifikasi
      </span>';
    } else if($status == 1) {
      echo '<span class="badge text-bg-success">Diterima</span>';
    } else {
      echo '<span class="badge text-bg-danger">Ditolak</span>';
    }
  }
?>

<div class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <h2 class="ms-5">Hasil Beasiswa Prestasi</h2>
        <div class="overflow-x-auto">
          <table class="table table-striped overflow-x-auto">
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
              </tr>
            </thead>
            <tbody>
              <?php 
                $query_prestasi = "SELECT * FROM pendaftar WHERE pilihan_beasiswa = 'Beasiswa Prestasi'";
                $beasiswa_prestasi = mysqli_query($conn, $query_prestasi);
                $n = 1;
              ?>
              <?php while($row = mysqli_fetch_assoc($beasiswa_prestasi)): ?>
                <tr>
                  <th scope="row"><?= $n++ ?></th>
                  <td><?= $row["nama"] ?></td>
                  <td><?= $row["email"] ?></td>
                  <td><?= "*********" ?></td>
                  <td><?= "*********" ?></td>
                  <td><?= "*********" ?></td>
                  <td><?= "*********" ?></td>
                  <td><?= $row["pilihan_beasiswa"] ?></td>
                  <td>dirahasiakan</td>
                  <td><?= cekStatus($row["status_ajuan"]); ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="ms-5">Hasil Beasiswa Bidikmisi</h2>
        <div class="overflow-x-auto">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No. HP</th>
                <th scope="col">Semester Saat Ini</th>
                <th scope="col">IPK</th>
                <th scope="col">Pilihan Beasiswa</th>
                <th scope="col">Berkas Syarat</th>
                <th scope="col">Status Ajuan</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $query_bidikmisi = "SELECT * FROM pendaftar WHERE pilihan_beasiswa = 'Beasiswa Bidikmisi'";
                $beasiswa_bidikmisi = mysqli_query($conn, $query_bidikmisi);
                $n = 1;
              ?>
              <?php while($row = mysqli_fetch_assoc($beasiswa_bidikmisi)): ?>
                <tr>
                  <th scope="row"><?= $n++ ?></th>
                  <td><?= $row["nama"] ?></td>
                  <td><?= $row["email"] ?></td>
                  <td><?= "*********" ?></td>
                  <td><?= "*********"?></td>
                  <td><?= "*********" ?></td>
                  <td><?= $row["pilihan_beasiswa"] ?></td>
                  <td>dirahasiakan</td>
                  <td><?= cekStatus($row["status_ajuan"]); ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("_footer.php") ?>
  
