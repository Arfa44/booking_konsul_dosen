@extends('layouts.dashboard_mahasiswa')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Jadwal Konsultasi Dosen</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama Dosen</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Ruang</th>
          </tr>
        </thead>
        <tbody>
          @foreach($jadwal as $j)
          <tr>
            <td>{{ $j->dosen->nama }}</td>
            <td>{{ $j->tanggal }}</td>
            <td>{{ $j->jam_mulai }}</td>
            <td>{{ $j->jam_selesai }}</td>
            <td>{{ $j->ruang }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
