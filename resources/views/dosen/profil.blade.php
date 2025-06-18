@extends('layouts.dashboard_dosen')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Profil Dosen</h3>
    </div>
    <div class="card-body">
        {{-- Notifikasi sukses --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Form profil --}}
        <form action="{{ route('dosen.profil.update') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nidn">NIDN</label>
                <input type="text" name="nidn" id="nidn" class="form-control" 
                       value="{{ old('nidn', $detail->nidn ?? '') }}" required>
            </div>

            <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" 
                       value="{{ old('nama_dosen', $detail->nama_dosen ?? '') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
