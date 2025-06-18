<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dosen - Use Cash</title>
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
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="mahasiswa" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>Mahasiswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dosen" class="nav-link active">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Dosen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="akun" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Akun</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="izin_konsultasi" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>Konsultasi</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Dosen</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">

        <!-- Tombol Tambah -->
        <div class="row mb-3">
          <div class="col-12 text-right">
            <a href="tambah_data_dosen" class="btn btn-primary">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
          </div>
        </div>

        <!-- Tabel Dosen -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Dosen</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID Dosen</th>
                      <th>ID User</th>
                      <th>NIDN</th>
                      <th>Nama Dosen</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>232323</td>
                      <td>343434</td>
                      <td>230302093</td>
                      <td>Bapak Subandono</td>
                      <td>
                        <a href="edit_data_dosen" class="btn btn-warning btn-sm">
                          <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="/admin/dosen" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
                          <i class="fas fa-trash"></i> Hapus
                        </a>
                      </td>
                    </tr>
                    <!-- Data dosen lainnya akan ditampilkan di sini -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
