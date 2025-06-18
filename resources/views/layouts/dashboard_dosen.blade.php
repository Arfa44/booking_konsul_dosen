{{-- resources/views/layouts/dashboard_dosen.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Dosen</title>
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
        <a href="/dashboard/dosen" class="nav-link">Dashboard Dosen</a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Menu Dosen</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item">
            <a href="/dashboard/dosen/jadwal" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Jadwal Dosen</p>
            </a>
          </li>

          {{-- FITUR DI-SKIP
          <li class="nav-item">
            <a href="/dashboard/dosen/sesi" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Set Sesi Konsul</p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="/dashboard/dosen/booking" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>Booking Konsultasi</p>
            </a>
          </li>

          <!-- Tambahan menu Profil Saya -->
          <li class="nav-item">
            <a href="/dashboard/dosen/profil" class="nav-link">
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
        <h1 class="m-0 text-dark">Dashboard Dosen</h1>
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
