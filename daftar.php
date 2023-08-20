<?php include("_header.php") ?>

<div class="container my-5">
  <div class="row">
    <div class="col-md-5 mx-auto border rounded shadow-sm px-4 py-5">
      <h2 class="text-center">Form Pendaftaran Beasiswa</h2>
      <form>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input name="nama" type="text" class="form-control" id="nama" placeholder="adit" required>
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input name="Email" type="Email" class="form-control" id="Email" placeholder="mhs@kampus.ac.id" required>
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">No. HP</label>
          <input name="no_hp" type="number" class="form-control" id="no_hp" pattern="[0-9]{10,12}" placeholder="08123XXXXXXX" required>
        </div>
        <div class="mb-3">
          <label for="semester" class="form-label">Semester Saat Ini</label>
          <select class="form-select" id="semester" required>
            <option selected disabled value="">Pilih Semester</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
            <option value="8">Semester 8</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="ipk" class="form-label">IPK Terakhir</label>
          <div class="input-group">
            <input name="ipk" type="text" class="form-control" id="ipk" placeholder="IPK" disabled>
            <button class="btn btn-outline-secondary" type="button" id="ipkButton">Cek IPK mu</button>
          </div>
        </div>
        <div class="mb-3">
          <label for="pilihanBeasiswa" class="form-label">Pilihan Beasiswa</label>
          <select name="pilihan_beasiswa" class="form-select" id="pilihanBeasiswa" disabled>
            <option selected disabled value="">Pilih Beasiswa</option>
            <option value="Beasiswa a">Beasiswa A</option>
            <option value="Beasiswa b">Beasiswa B</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Berkas Syarat</label>
          <input class="form-control" type="file" id="formFile" name="berkas" required disabled>
        </div>
        <div class="row mb-3 column-gap-2">
          <button id="submitButton" type="submit" class="col btn btn-primary w-full" disabled>Daftar</button>
          <a href="index.php" class="col btn btn-outline-primary w-full">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include("_footer.php") ?>
  