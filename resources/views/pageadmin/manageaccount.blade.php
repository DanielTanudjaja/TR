@extends('pageadmin/main')

@section('title', 'Page Admin')

@section('header')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
</div>
@endsection
@section('container')
<style type="text/css">


</style>

{{-- <div class="container"> --}}
{{-- <div class="col-12"> --}}
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr class="text-center">
            <th>No</th>
            <th>NIK</th>
            <th>Foto</th>
            <th>Nama Penghuni</th>
            <th>Kontak</th>
            {{-- <th>Email</th> --}}
            <th>Kontak Wali</th>
            <th>Alamat</th>
            <th>No Kamar</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <div>
            @foreach ($user as $u)
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td width="10px">{{$u->nik}}</td>
                <td>
                    <a href="{{asset('/imgUser/'.$u->foto)}}">
                        <img id="myImg" src="{{asset('/imgUser/'.$u->foto)}}" alt=""
                            class="zoom rounded mx-auto d-block gambar">
                    </a>
                </td>
                <td>{{$u->nama}}</td>
                <td>{{$u->kontak}}</td>
                {{-- <td>{{$u->email}}</td> --}}
                <td>{{$u->wali}}</td>
                <td>{{$u->alamat}}</td>
                <td>{{$u->id_kamar}}</td>
                <td>
                    <a href="/pageadmin/manageaccount/edit/{{$u->nik}}" class="badge badge-info">Edit</a>
                    <a href="/pageadmin/manageaccount/pindah/{{$u->nik}}" class="badge badge-info">Pindah
                        Kamar</a>
                    <a href="/pageadmin/manageaccount/delete/{{$u->nik}}" class="badge badge-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </div>
    </tbody>
</table>
{{-- </div> --}}
{{-- </div> --}}

{{$user->links()}}
@endsection
