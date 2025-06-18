<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Konsultasi - Use Cash</title>
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
        <a href="/dashboard" class="nav-link">Dashboard</a>
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
            <a href="dosen" class="nav-link">
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
            <a href="izin_konsultasi" class="nav-link active">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>Konsultasi</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Manajemen Konsultasi</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">

        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#jadwal" data-toggle="tab">Jadwal Konsultasi</a></li>
              <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat Konsultasi</a></li>            </ul>
          </div>

          <div class="card-body">
            <div class="tab-content">

              <!-- Jadwal Konsultasi -->
              <div class="tab-pane active" id="jadwal">
                <div class="mb-3 text-right">
                  
                </div>
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Nama Dosen</th>
                      <th>Nama Mahasiswa</th>
                      <th>Hari</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Topik</th>
                      <th>Lokasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dr. Andi Saputra</td>
                      <td>Sidiq Putra Nababan</td>
                      <td>Senin</td>
                      <td>2025-04-21</td>
                      <td>09:00 - 10:00</td>
                      <td>TA</td>
                      <td>Ruang Dosen 2</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Riwayat Konsultasi -->
              <div class="tab-pane" id="riwayat">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nama Mahasiswa</th>
                      <th>Nama Dosen</th>
                      <th>Tanggal Konsultasi</th>
                      <th>Topik</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Sidiqq</td>
                      <td>Yoman</td>
                      <td>2025-04-24</td>
                      <td>TA</td>
                      <td><span class="badge badge-info">Selesai</span></td>
                    </tr>
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
    <strong>Use Cash</strong> - Sistem Konsultasi Dosen © 2025
  </footer>
</div>

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
