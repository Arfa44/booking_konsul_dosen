
@extends('layouts.dashboard_dosen')

@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h3>Selamat Datang di Dashboard Dosen!</h3>
    <img src="{{ asset('images/pnc.jpeg') }}" 
         alt="Dashboard Dosen" 
         style="width: 600px; height: auto;" 
     class="img-fluid mt-3">
    <p class="mt-3">Gunakan menu di samping untuk melihat jadwal, set sesi, dan mengelola booking konsultasi.</p>
  </div>
</div>
@endsection