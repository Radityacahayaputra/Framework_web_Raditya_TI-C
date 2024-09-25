<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal with PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col mt-4">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <form method="POST" action="your_action_page.php">
                  <div class="form-group">
                      <label for="NIM">NIM</label>
                      <input type="number" class="form-control" id="NIM" name="nim" placeholder="Masukkan NIM">
                  </div>
                  <div class="form-group">
                      <label for="Nama_mahasiswa">Nama Mahasiswa</label>
                      <input type="text" class="form-control" id="Nama_mahasiswa" name="nama" placeholder="Masukkan Nama Mahasiswa">
                  </div>
                  <div class="form-group">
                      <label for="Prodi">Prodi</label>
                      <input type="text" class="form-control" id="Prodi" name="prodi" placeholder="Masukkan Prodi">
                  </div>
                  <div class="form-group">
                      <label for="Semester">Semester</label>
                      <input type="number" class="form-control" id="Semester" name="semester" placeholder="Masukkan Semester">
                  </div>
                  <div class="form-group">
                      <label for="SKS">SKS</label>
                      <input type="number" class="form-control" id="SKS" name="sks" placeholder="Masukkan SKS">
                  </div>
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Table -->
        <table class="table table-hover mt-4">
          <thead>
            <tr>
              <th scope="col">Nim</th>
              <th scope="col">Nama</th>
              <th scope="col">Prodi</th>
              <th scope="col">Sks</th>
              <th scope="col">Semester</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($mahasiswa as $mhs): ?>
              <tr>
                <th scope="row"><?= $mhs['nim']; ?></th>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['prodi']; ?></td>
                <td><?= $mhs['sks']; ?></td>
                <td><?= $mhs['semester']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
