<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Akun - Use Cash</title>
  <!-- AdminLTE & FontAwesome -->
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
        <a href="/akun" class="nav-link">Akun</a>
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
            <a href="/admin/mahasiswa" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>Mahasiswa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/dosen" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Dosen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/akun" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>Akun</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/izin_konsultasi" class="nav-link">
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
        <h1 class="m-0">Akun</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">

        <!-- Tombol Tambah -->

        <!-- Tabel Akun -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title text-white">Daftar Akun</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>admin@mail.com</td>
                      <td>adminuser</td>
                      <td>admin</td>
                      <td>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editRoleModal">
                          <i class="fas fa-edit"></i> Edit
                        </button>
                      </td>
                    </tr>
                    <!-- Tambahkan data akun lainnya di sini -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Edit Role -->
  <div class="modal fade" id="editRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <form action="update_role.php" method="POST">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Role</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" value="1">
            <div class="form-group">
              <label for="role">Role</label>
              <select class="form-control" name="role">
                <option value="admin">Admin</option>
                <option value="dosen">Dosen</option>
                <option value="mahasiswa">Mahasiswa</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </form>
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
