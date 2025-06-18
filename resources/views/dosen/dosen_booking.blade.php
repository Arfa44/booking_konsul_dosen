@extends('layouts.dashboard_dosen')

@section('content')
<div class="container-fluid">
  <div class="card card-outline card-warning">
    <div class="card-header">
      <h3 class="card-title"><i class="fas fa-calendar-check"></i> Daftar Booking Konsultasi</h3>
    </div>
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead class="thead-dark">
          <tr>
            <th> Nama Mahasiswa</th>
            <th>Tanggal</th>
            <th>Topik</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Rani Safitri</td>
            <td>2025-04-18</td>
            <td>Judul TA</td>
            <td><span class="badge badge-warning status-text">Menunggu</span></td>
            <td>
              <button class="btn btn-success btn-sm btn-setujui" title="Setujui"><i class="fas fa-check"></i></button>
              <button class="btn btn-danger btn-sm btn-tolak" title="Tolak"><i class="fas fa-times"></i></button>
            </td>
          </tr>
          <tr>
            <td>Anisa Faoziah</td>
            <td>2025-04-19</td>
            <td>Bahas ERD</td>
            <td><span class="badge badge-success">Disetujui</span></td>
            <td>-</td>
          </tr>
          <tr>
            <td>Sasa</td>
            <td>2025-04-19</td>
            <td>Bahas DFD</td>
            <td><span class="badge badge-success">Disetujui</span></td>
            <td>-</td>
          </tr>
          <tr>
            <td>Nurul Azizah Sofiatun</td>
            <td>2025-04-18</td>
            <td>Bahas Laporan</td>
            <td><span class="badge badge-warning status-text">Menunggu</span></td>
            <td>
              <button class="btn btn-success btn-sm btn-setujui" title="Setujui"><i class="fas fa-check"></i></button>
              <button class="btn btn-danger btn-sm btn-tolak" title="Tolak"><i class="fas fa-times"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // tombol setujui
    document.querySelectorAll('.btn-setujui').forEach(button => {
      button.addEventListener('click', function () {
        const row = this.closest('tr');
        const statusSpan = row.querySelector('.status-text');

        statusSpan.textContent = 'Disetujui';
        statusSpan.className = 'badge badge-success status-text';

        // Hilangkan tombol aksi setelah disetujui
        row.querySelectorAll('td')[4].innerHTML = '-';
      });
    });

    // tombol tolak
    document.querySelectorAll('.btn-tolak').forEach(button => {
      button.addEventListener('click', function () {
        const row = this.closest('tr');
        const statusSpan = row.querySelector('.status-text');

        statusSpan.textContent = 'Ditolak';
        statusSpan.className = 'badge badge-danger status-text';

        // Hilangkan tombol aksi setelah ditolak
        row.querySelectorAll('td')[4].innerHTML = '-';
      });
    });
  });
</script>
@endsection

