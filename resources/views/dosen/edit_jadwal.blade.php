@extends('layouts.dashboard_dosen')

@section('content')
<div class="container-fluid">
  <div class="card card-outline card-warning">
    <div class="card-header">
      <h3 class="card-title"><i class="fas fa-edit"></i> Edit Jadwal Konsultasi</h3>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('dosen.jadwal.update', $jadwal->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="tanggal">Tanggal Konsultasi</label>
          <input type="date" name="tanggal" class="form-control" value="{{ $jadwal->tanggal }}">
        </div>

        <div class="form-group">
          <label for="jam_mulai">Jam Mulai</label>
          <input type="time" name="jam_mulai" class="form-control" value="{{ $jadwal->jam_mulai }}">
        </div>

        <div class="form-group">
          <label for="jam_selesai">Jam Selesai</label>
          <input type="time" name="jam_selesai" class="form-control" value="{{ $jadwal->jam_selesai }}">
        </div>

        <div class="form-group">
          <label for="ruang">Ruang</label>
          <input type="text" name="ruang" class="form-control" value="{{ $jadwal->ruang }}">
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
        <a href="{{ route('dosen.jadwal') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>
@endsection
