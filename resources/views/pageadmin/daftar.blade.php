@extends('pageadmin/main')

@section('title', 'Daftar Akun')
@section('container')

<div class="col-6 mx-auto">
    <form action="/daftarakun" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>
@endsection
