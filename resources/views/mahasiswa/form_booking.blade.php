@extends('layouts.dashboard_mahasiswa')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Form Booking Konsultasi</h3>
    </div>
    <div class="card-body">

      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif

      <form action="{{ route('mahasiswa.booking.simpan') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="dosen_id" class="form-label">Pilih Dosen</label>
          <select name="dosen_id" id="dosen_id" class="form-control" required>
            <option value="">-- Pilih Dosen --</option>
            @foreach($daftarDosen as $dosen)
              <option value="{{ $dosen['id'] }}">{{ $dosen['nama'] }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal Konsultasi</label>
          <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="topik" class="form-label">Topik Konsultasi</label>
          <input type="text" name="topik" id="topik" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Kirim Booking</button>
      </form>
    </div>
  </div>
</div>
@endsection
