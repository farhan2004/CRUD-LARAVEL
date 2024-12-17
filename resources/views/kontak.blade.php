@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <li>
        <a href="{{('/')}}"><i class="fa fa-home"></i> Home</a>
    </li>
    <li>
        <a href="{{('/tentang')}}"><i class="fa fa-user"></i> Tentang</a>
    </li>
    <li>
        <a class="active-menu" href="{{('/kontak')}}"><i class="fa fa-phone"></i> Kontak</a>
    </li>
    <li>
        <a href="{{('/siswa')}}"><i class="fa fa-male"></i> Data Siswa</a>
    </li>
</ul>
@endsection
@section('title')
Kontak
@endsection
@section('judul')
    Kontak
@endsection
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Hubungi Kami</h2>
    <p>Jika ada pertanyaan, silakan kontak kami melalui email atau isi formulir di bawah ini:</p>
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ url('kirim-kontak') }}" class="shadow p-4 rounded bg-light">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
