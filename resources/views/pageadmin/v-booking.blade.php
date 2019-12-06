@extends('pageadmin/main')

@section('title', 'Page Admin')
@section('container')
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr class="text-center">
            <th>No</th>
            <th>Booking</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Kamar</th>
            <th>Foto</th>
            <th>Bukti</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($book as $u)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$u->id_booking}}</td>
            <td>{{$u->nik}}</td>
            <td>{{$u->nama}}</td>
            <td>{{$u->kontak}}</td>
            <td>{{$u->id_kamar}}</td>
            <td>
                <a href="#fotoBooking" data-toggle="modal" data-target="#fotoBooking">
                    <img src="{{asset('/imgBooking/'.$u->foto)}}" class="rounded zoom mx-auto d-block gambar">
                </a>
            </td>
            <td>
                <a href="#fotoBukti" data-toggle="modal" data-target="#fotoBukti">
                    <img src="{{asset('/imgPembayaranPertama/'.$u->kwitansi)}}"
                        class="rounded zoom mx-auto d-block gambar">
                </a>
            </td>
            <td>
                <a href="/kwitansibooking/{{$u->id_booking}}/{{$u->foto}}/{{$u->nama}}/{{$u->id_kamar}}/{{$u->nik}}"
                    class="badge badge-success">Validasi</a>
            </td>
        </tr>
        <div class="modal modal-control" id="fotoBooking" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('/imgBooking/'.$u->foto)}}" alt="" width="465px" height="560px"
                            style="object-fit:cover">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-control" id="fotoBukti" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('/imgPembayaranPertama/'.$u->kwitansi)}}" alt="" width="465px" height="560px"
                            style="object-fit:cover">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>
</table>

@endsection
