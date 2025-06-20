@extends('layouts.dashboard_admin') {{-- Pastikan layout ini sesuai nama file layout kamu --}}

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <h1 class="m-0">Akun</h1>
  </div>
</div>

<div class="content">
  <div class="container-fluid">

    {{-- Form Pencarian --}}
    <form action="{{ url('/admin/akun') }}" method="GET" class="mb-3">
      <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari email..." value="{{ request('search') }}">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Cari</button>
        </div>
      </div>
    </form>

    {{-- Tabel Akun --}}
    <div class="card">
      <div class="card-header bg-primary">
        <h3 class="card-title text-white">Daftar Akun</h3>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-bordered table-hover text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Email</th>
              <th>Username</th>
              <th>Role</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $index => $user)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['role'] }}</td>
                <td>
                  <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editRoleModal{{ $user['id'] }}">
                    <i class="fas fa-edit"></i> Edit
                  </button>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center">Tidak ada data ditemukan.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    {{-- Modal Edit Role --}}
    @foreach ($users as $user)
      <div class="modal fade" id="editRoleModal{{ $user['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form action="{{ url('/admin/akun/update-role') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $user['id'] }}">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Role</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="role">Role</label>
                  <select class="form-control" name="role">
                    <option value="admin" {{ $user['role'] == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="dosen" {{ $user['role'] == 'dosen' ? 'selected' : '' }}>Dosen</option>
                    <option value="mahasiswa" {{ $user['role'] == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    @endforeach

  </div>
</div>
@endsection
