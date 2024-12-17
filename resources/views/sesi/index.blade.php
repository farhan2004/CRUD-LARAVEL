@extends('login')
@section('title')
Login
@endsection
@section('judul')
Login
@endsection
@section('content')
@if ($message = Session::get('pesan'))
<div class="alert alert-danger">
    {{ Session::get('pesan') }}
</div>
@endif

<div class="panel-body">
<form role="form" action="sesi/login" method="POST">
@csrf
<div class="form-group">
    <label>Email</label>
    <input class="form-control" type="email" value="{{ Session::get('email') }}" name="email" placeholder="Masukkan Email">
</div>
<div class="form-group">
    <label>Password</label>
    <input class="form-control" type="password" name="password" placeholder="Masukkan Password">
</div>
<button type="submit" class="btn btn-default">LOGIN</button>
</form>
</div>
@endsection