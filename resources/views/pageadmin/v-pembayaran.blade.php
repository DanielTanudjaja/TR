@extends('pageadmin/main')

@section('title', 'Page Admin')
@section('container')
@foreach ($user as $u)
<li class="list-group-item d-flex justify-content-between align-items-center">
    <p class="text-dark">{{'No Kamar:'.$u->id_kamar}} || {{'Nama: '.$u->nama}}</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#validasi">Open</b>
</li>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="validasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalCenterTitle">Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{asset('/imgBayar/'.$u->foto)}}" width="470px" height="500px" style="object-fit: cover"
                    alt="">
            </div>
            <div class="modal-footer">
                <a href="/validasiBayar/{{$u->nik}}" class="btn btn-primary">Verifikasi</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
