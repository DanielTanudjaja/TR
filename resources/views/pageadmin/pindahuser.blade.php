@extends('pageadmin/main')

@section('title', 'Pindah Kamar')

@section('header')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto">
        {{-- <li class="nav-item active">
            <a class="nav-link btn btn-primary" href="#">Insert Data Baru</a>
        </li> --}}
    </ul>
</div>
@endsection
@section('container')

<div class="container">
    <div class="col-12">
        <form action="/prosesPindahUser" method="post">
            @csrf
            @foreach ($user as $kl)
            <div class="form-group">
                <input type="hidden" name="nik" value="{{$kl->nik}}">
                <label for="" class="col-sm-2">Kamar Lama</label>
                <input type="text" class="w-25" name="kamar_lama" value="{{$kl->id_kamar}}" disabled>
            </div>
            @endforeach

            <div class="form-group">
                <label for="" class="col-sm-2">Kamar Tersedia</label>
                <select name="kamarbaru" id="" class="w-25">
                    @foreach ($kamar as $k)
                    <option value="{{$k->id_kamar}}" class="form-control">{{$k->id_kamar}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-2">&nbsp;</label>
                <button type="submit" class="btn btn-primary btn-sm">
                    Pindah
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
