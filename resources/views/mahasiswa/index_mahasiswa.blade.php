@extends('layouts.dashboard_mahasiswa')

@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h3>Selamat Datang di Dashboard Mahasiswa!</h3>
    <img src="{{ asset('images/pnc.jpeg') }}" 
         alt="Dashboard Mahasiswa" 
         style="width: 600px; height: auto;" 
         class="img-fluid mt-3">
    <p class="mt-3">
      Gunakan menu di samping untuk melihat jadwal dosen, melakukan booking konsultasi, dan memantau status persetujuan.
    </p>
  </div>
</div>
@endsection
