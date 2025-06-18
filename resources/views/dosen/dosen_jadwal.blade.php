{{-- resources/views/dosen/jadwal.blade.php --}}
@extends('layouts.dashboard_dosen')

@section('content')
<div class="container-fluid">
  <div class="card card-outline card-primary">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="card-title"><i class="fas fa-calendar-alt"></i> Jadwal Konsultasi</h3>
      <a href="{{ route('dosen.jadwal.create') }}" class="btn btn-primary btn-sm">
        <i class="fas fa-plus"></i> Tambah Jadwal
      </a>
    </div>

    <div class="card-body">

      {{-- Flash message --}}
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <p class="text-muted">Berikut adalah daftar jadwal konsultasi Anda:</p>
      <table class="table table-bordered table-hover">
        <thead class="thead-light">
          <tr>
            <th>Nama Dosen</th>
            <th>Tanggal Konsultasi</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Ruang</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          {{-- Data Dummy --}}
          <tr>
            <td>Dr. Andi Wijaya</td>
            <td>2025-04-18</td>
            <td>08:00</td>
            <td>10:00</td>
            <td>Ruang 301</td>
            <td>
              <a href="{{ route('dosen.jadwal.edit', 1) }}" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
              </a>
              <form action="{{ route('dosen.jadwal.delete', 1) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus jadwal ini?')">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          <tr>
            <td>Dr. Andi Wijaya</td>
            <td>2025-04-19</td>
            <td>10:30</td>
            <td>12:00</td>
            <td>Ruang 301</td>
            <td>
              <a href="{{ route('dosen.jadwal.edit', 2) }}" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
              </a>
              <form action="{{ route('dosen.jadwal.delete', 2) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus jadwal ini?')">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
