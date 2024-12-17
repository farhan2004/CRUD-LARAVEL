@extends('tema')
@section('menu')
<ul class="nav" id="main-menu">
    <li>
        <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
    </li>
    <li>
        <a class="active-menu" href="{{ url('/tentang') }}"><i class="fa fa-user"></i> Tentang</a>
    </li>
    <li>
        <a href="{{ url('/kontak') }}"><i class="fa fa-phone"></i> Kontak</a>
    </li>
    <li>
        <a href="{{ url('/siswa') }}"><i class="fa fa-male"></i> Data Siswa</a>
    </li>
</ul>
@endsection
@section('judul')
    Tentang
@endsection
@section('content')
    Kelas ini merupakan kelas belajar laravel.
@endsection