<!-- FITUR DI SKIP -->

@extends('layouts.dashboard_dosen')

@section('content')
<div class="container-fluid">
  <div class="card card-outline card-success">
    <div class="card-header">
      <h3 class="card-title"><i class="fas fa-cog"></i> Atur Jumlah Sesi Konsultasi</h3>
    </div>
    <div class="card-body">
      <form id="form-set-sesi">
        <div class="form-group">
          <label for="jumlah_sesi">Jumlah Sesi per Hari</label>
          <input type="number" name="jumlah_sesi" id="jumlah_sesi" class="form-control" placeholder="Contoh: 5" required>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
      </form>

      <!-- Pesan Berhasil -->
      <div id="pesan-sukses" style="display:none; margin-top:10px;" class="alert alert-success">
        ✅ Data berhasil disimpan!
      </div>
    </div>
  </div>
</div>


{{-- Pastikan ini berada DI DALAM SECTION content --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-set-sesi');
    const pesan = document.getElementById('pesan-sukses');

    form.addEventListener('submit', function (e) {
      e.preventDefault(); // Mencegah reload
      pesan.style.display = 'none'; // Sembunyikan dulu

      // Simulasi proses
      setTimeout(() => {
        pesan.style.display = 'block'; // Tampilkan pesan sukses
      }, 300);
    });
  });
</script>
@endsection
