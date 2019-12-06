@extends('pageuser/main')

@section('title', 'Page User')
@section('container')
{{-- <div class="clear"></div> --}}
<div class="col-8 ku mx-auto">
    @foreach ($user as $u)
    @if ($u->nik == Auth::user()->nik)
    <form action="/updateDataDiri/{{$u->nik}}" enctype='multipart/form-data' method="POST">
        @csrf
        <input type="hidden" name="foto_lama" value="{{asset('/imgPenghuni/'.$u->foto)}}">
        <label class="label2">
            <p class="label-txt">Upload Foto</p>
            <img src="{{asset('/imgUser/'.$u->foto)}}" class="zoom rounded mt-3 gambar" alt="" value="{{$u->foto}}">
            <input type="file" name="foto" class="input @error('foto') is-invalid @enderror">
            @error('foto')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </label>

        <label class="label2">
            <p class="label-txt">Nama Lengkap</p>
            <input type="text" name="nama" value="{{$u->nama}}" class="input @error('nama') is-invalid @enderror">
            <div class="line-box">
                <div class="line"></div>
            </div>
            @error('nama')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </label>

        <label class="label2">
            <p class="label-txt">Alamat</p>
            <input type="text" name="alamat" value="{{$u->alamat}}" class="input @error('alamat') is-invalid @enderror">
            <div class="line-box">
                <div class="line"></div>
            </div>
            @error('alamat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </label>

        <label class="label2">
            <p class="label-txt">Kontak</p>
            <input type="text" name="kontak" value="{{$u->kontak}}" class="input @error('kontak') is-invalid @enderror">
            <div class="line-box">
                <div class="line"></div>
            </div>
            @error('kontak')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </label>

        <label class="label2">
            <p class="label-txt">Email</p>
            <input type="text" name="email" value="{{$u->email}}" class="input @error('email') is-invalid @enderror">
            <div class="line-box">
                <div class="line"></div>
            </div>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </label>

        <label class="label2">
            <p class="label-txt">Kontak Wali</p>
            <input type="text" name="wali" value="{{$u->wali}}" class="input @error('wali') is-invalid @enderror">
            <div class="line-box">
                <div class="line"></div>
            </div>
            @error('wali')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </label>

        <button type="submit" class="btn btn-primary btn-block">Update</button>
    </form>
    @endif
    @endforeach


    @endsection
