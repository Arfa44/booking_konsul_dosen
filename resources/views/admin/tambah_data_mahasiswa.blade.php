<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Mahasiswa - Use Cash</title>
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="mahasiswa" class="nav-link">Mahasiswa</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Use Cash</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item"><a href="/admin" class="nav-link"><i class="nav-icon fas fa-home"></i><p> Dashboard</p></a></li>
          <li class="nav-item"><a href="/mahasiswa" class="nav-link active"><i class="nav-icon fas fa-user-graduate"></i><p> Mahasiswa</p></a></li>
          <li class="nav-item"><a href="dosen" class="nav-link "><i class="nav-icon fas fa-chalkboard-teacher"></i><p> Dosen</p></a></li>
          <li class="nav-item"><a href="akun" class="nav-link"><i class="nav-icon fas fa-users"></i><p> Akun</p></a></li>
          <li class="nav-item"><a href="izin_konsultasi" class="nav-link"><i class="nav-icon fas fa-calendar-check"></i><p> Konsultasi</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Tambah Data Mahasiswa</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <form action="/admin/mahasiswa/tambah" method="POST">
          @csrf
          <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm" required>
          </div>
          <div class="form-group">
            <label for="nama_mahasiswa">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
          </div>
          <div class="form-group">
            <label for="kelas_mahasiswa">Kelas Mahasiswa</label>
            <input type="text" class="form-control" id="kelas_mahasiswa" name="kelas_mahasiswa" required>
          </div>
          <div class="form-group">
            <label for="program_studi">Program Studi</label>
            <input type="text" class="form-control" id="program_studi" name="program_studi" required>
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
          </div>
          <div class="form-group text-right">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/admin/mahasiswa" class="btn btn-secondary ml-2">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="main-footer text-sm text-center">
    Use Cash - Sistem Konsultasi Dosen © 2025
  </footer>
</div>

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
