<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - Use Cash</title>
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
  <style>
    .info-box:hover {
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }
  </style>
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
        <a href="/dashboard" class="nav-link">Sistem Konsultasi Dosen</a>
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
          <li class="nav-item"><a href="/admin/dashboard" class="nav-link active"><i class="nav-icon fas fa-home"></i><p> Dashboard</p></a></li>
          <li class="nav-item"><a href="/admin/mahasiswa" class="nav-link"><i class="nav-icon fas fa-user-graduate"></i><p> Mahasiswa</p></a></li>
          <li class="nav-item"><a href="/admin/dosen" class="nav-link"><i class="nav-icon fas fa-chalkboard-teacher"></i><p> Dosen</p></a></li>
          <li class="nav-item"><a href="/admin/akun" class="nav-link"><i class="nav-icon fas fa-users"></i><p> Akun</p></a></li>
          <li class="nav-item"><a href="/admin/izin_konsultasi" class="nav-link"><i class="nav-icon fas fa-calendar-check"></i><p> Konsultasi</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0 text-dark">Dashboard Admin</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <!-- Info Boxes -->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <a href="/admin/mahasiswa" class="text-dark">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-user-graduate"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Mahasiswa</span>
                  <span class="info-box-number">120</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="/admin/dosen" class="text-dark">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-chalkboard-teacher"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Dosen</span>
                  <span class="info-box-number">15</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="/admin/izin_konsultasi" class="text-dark">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-calendar-check"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Konsultasi</span>
                  <span class="info-box-number">45</span>
                </div>
              </div>
            </a>
          </div>
</div>

<!-- AdminLTE Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
