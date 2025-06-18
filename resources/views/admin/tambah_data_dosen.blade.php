<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Dosen - Use Cash</title>
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
        <a href="/dosen" class="nav-link">Dosen</a>
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
          <li class="nav-item"><a href="mahasiswa" class="nav-link"><i class="nav-icon fas fa-user-graduate"></i><p> Mahasiswa</p></a></li>
          <li class="nav-item"><a href="/dosen" class="nav-link active"><i class="nav-icon fas fa-chalkboard-teacher"></i><p> Dosen</p></a></li>
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
        <h1 class="m-0">Tambah Data Dosen</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Tambah Dosen</h3>
          </div>

          <form action="/simpan_dosen" method="POST">
            @csrf <!-- Token CSRF Laravel -->
            <div class="card-body">
              <div class="form-group">
                <label>NIDN</label>
                <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIDN" required>
              </div>
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="nama_dosen" name="email" class="form-control" placeholder="Masukkan Nama Dosen" required>
              </div>
            </div>

            <div class="form-group text-right">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/admin/dosen" class="btn btn-secondary ml-2">Batal</a>
          </div>
          </form>
        </div>
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
