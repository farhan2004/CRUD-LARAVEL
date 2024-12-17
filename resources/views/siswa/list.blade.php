@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <li>
        <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
    </li>
    <li>
        <a href="{{ url('/tentang') }}"><i class="fa fa-user"></i> Tentang</a>
    </li>
    <li>
        <a href="{{ url('/kontak') }}"><i class="fa fa-phone"></i> Kontak</a>
    </li>
    <li>
        <a class="active-menu" href="{{ url('/siswa') }}"><i class="fa fa-male"></i> Data Siswa</a>
    </li>
</ul>
@endsection
@section('judul')
    Data Siswa
@endsection
@section('content')
<div class="container mt-5">
    <!-- Menampilkan pesan jika ada -->
    @if(Session::has('pesan'))
        <div class="alert alert-success">
            {{ Session::get('pesan') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ url('siswa/insert') }}" class="btn btn-primary">Tambah Siswa</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dt_siswa as $siswa)
            <tr>
                <td>{{ $siswa->nis_siswa }}</td>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->alamat_siswa }}</td>
                <td>
                    <a href="{{ url('siswa/ubah/'.$siswa->id_siswa) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="{{ url('siswa/hapus/'.$siswa->id_siswa) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
