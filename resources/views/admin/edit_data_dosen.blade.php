<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Dosen - Use Cash</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
      <li class="nav-item d-none d-sm-inline-block"><a href="/dosen" class="nav-link">Dosen</a></li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link"><span class="brand-text font-weight-light">Use Cash</span></a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item"><a href="/admin" class="nav-link"><i class="nav-icon fas fa-home"></i><p>Dashboard</p></a></li>
          <li class="nav-item"><a href="/dosen" class="nav-link active"><i class="nav-icon fas fa-chalkboard-teacher"></i><p>Dosen</p></a></li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper p-4">
    <h3>Edit Data Dosen</h3>

    <form action="/update_data_dosen" method="POST">
      @csrf
      <!-- Hidden input untuk ID dosen -->
      <input type="hidden" name="id" value="1">

      <div class="form-group">
        <label>NIDN</label>
        <input type="text" name="nidn" class="form-control" value="">
      </div>
      <div class="form-group">
        <label>Nama Dosen</label>
        <input type="nama_dosen" name="nama_dosen" class="form-control" value="">
      </div>

      <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
      <a href="/admin/dosen" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
  </div>

  <footer class="main-footer text-center">Use Cash © 2025</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
