@extends('pageadmin/main')

@section('title', 'Edit User')
@section('container')

<div class="col-6">
    <form action="/prosesEditUser" method="post">
        @csrf
        @foreach ($user as $u)
        <h2>Edit User</h2>
        <input type="hidden" name="nik" value="{{$u->nik}}">

        <div class="form-group">
            <p class="label-txt">Nama Lengkap</p>
            <input type="text" name="nama" value="{{$u->nama}}"
                class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <p class="label-txt">Foto</p>
            <input type="file" name="foto" value="{{$u->foto}}" class="@error('foto') is-invalid @enderror">
            @error('foto')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <p class="label-txt">Kontak</p>
            <input type="text" name="kontak" value="{{$u->kontak}}"
                class="form-control @error('kontak') is-invalid @enderror">
            @error('kontak')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <p class="label-txt">Kontak Wali</p>
            <input type="text" name="wali" value="{{$u->wali}}"
                class="form-control @error('wali') is-invalid @enderror">
            @error('wali')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <p class="label-txt">Alamat</p>
            <input type="text" name="alamat" value="{{$u->alamat}}"
                class="form-control @error('alamat') is-invalid @enderror">
            @error('alamat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
        @endforeach
    </form>
</div>
@endsection
