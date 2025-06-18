@extends('layouts.dashboard_mahasiswa')

@section('content')
<div class="container">
    <h4>Profil Mahasiswa</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('mahasiswa.profil.simpan') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>NPM</label>
            <input type="text" name="NPM" value="{{ $profil->NPM }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_mhs" value="{{ $profil->nama_mhs }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas_mhs" value="{{ $profil->kelas_mhs }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Prodi</label>
            <input type="text" name="prodi_mhs" value="{{ $profil->prodi_mhs }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan_mhs" value="{{ $profil->jurusan_mhs }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
