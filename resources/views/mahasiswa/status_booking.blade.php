@extends('layouts.dashboard_mahasiswa')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Status Booking Konsultasi</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama Dosen</th>
            <th>Tanggal</th>
            <th>Topik</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($bookingSaya as $b)
          <tr>
            <td>{{ $b['dosen'] }}</td>
            <td>{{ $b['tanggal'] }}</td>
            <td>{{ $b['topik'] }}</td>
            <td>
              @if($b['status'] == 'Disetujui')
                <span class="badge badge-success">Disetujui</span>
              @elseif($b['status'] == 'Ditolak')
                <span class="badge badge-danger">Ditolak</span>
              @else
                <span class="badge badge-warning">Menunggu</span>
              @endif
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="4" class="text-center text-muted">Belum ada booking konsultasi</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
