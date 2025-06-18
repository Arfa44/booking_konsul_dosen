<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Mahasiswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="container">
            <div class="content">
      <div class="container-fluid">
        <form action="mahasiswa" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Kelas Mahasiswa</label>
            <input type="text" name="kelas_mahasiswa" class="form-control"  required>
          </div>
          <div class="form-group">
            <label>Program Studi</label>
            <input type="text" name="program_studi" class="form-control" value="Teknik Informatika" required>
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="Teknik Informatika" required>
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="mahasiswa" class="btn btn-secondary">Batal</a>
        </form>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>
