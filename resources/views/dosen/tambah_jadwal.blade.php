@extends('layouts.dashboard_dosen')

@section('content')
<div class="container-fluid">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Jadwal Konsultasi</h3>
    </div>
    <form action="{{ route('dosen.jadwal.simpan') }}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" required>
        </div>
        <div class="form-group">
          <label for="jam_mulai">Jam Mulai</label>
          <input type="time" class="form-control" name="jam_mulai" required>
        </div>
        <div class="form-group">
          <label for="jam_selesai">Jam Selesai</label>
          <input type="time" class="form-control" name="jam_selesai" required>
        </div>
        <div class="form-group">
          <label for="ruang">Ruang</label>
          <input type="text" class="form-control" name="ruang" placeholder="Contoh: R. 203" required>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan Jadwal</button>
      </div>
    </form>
  </div>
</div>
@endsection
