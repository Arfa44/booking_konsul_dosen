{{-- resources/views/layouts/dashboard_mahasiswa.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Mahasiswa</title>
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
        <a href="/dashboard/mahasiswa" class="nav-link">Dashboard Mahasiswa</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Menu Mahasiswa</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">

          <li class="nav-item">
            <a href="/dashboard/mahasiswa/jadwal" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Lihat Jadwal Dosen</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/mahasiswa/booking" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>Booking Konsultasi</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/mahasiswa/status" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>Status Booking Saya</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/mahasiswa/profil" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profil Saya</p>
            </a>
          </li>

          <!-- Tombol Logout di Bawah -->
          <li class="nav-item mt-3">
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="nav-link btn btn-danger btn-block text-left text-white">
                <i class="nav-icon fas fa-sign-out-alt text-white"></i>
                <p class="text-white mb-0">Logout</p>
              </button>
            </form>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Konten Dinamis -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0 text-dark">Dashboard Mahasiswa</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>

  <footer class="main-footer text-sm text-center">
    <strong>Sistem Konsultasi Dosen</strong> &copy; 2025
  </footer>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
