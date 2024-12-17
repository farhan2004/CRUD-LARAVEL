@extends('tema')
@section('judul')
    Tambah Data Siswa
@endsection
@section('content')

<div class="container mt-5">
    <form method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" value="{{ isset($siswa) ? $siswa->nis_siswa : '' }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($siswa) ? $siswa->nama_siswa : '' }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ isset($siswa) ? $siswa->alamat_siswa : '' }}</textarea>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('siswa') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

@endsection
