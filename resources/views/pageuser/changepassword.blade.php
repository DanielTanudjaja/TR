@extends('pageuser/main')

@section('title', 'Page User')
@section('container')


{{-- 
<div class="card col-6 mx-auto">
    <div class="card-body">
        <div class="row">
            <h5 class="card-title text-center mb-4"><b>Download Tagihan Bulan Ini</b></h5>
            <button type="submit" class="btn btn-block btn-primary" style="border-radius: 10px;">Download</button>
        </div>
    </div>
</div> --}}

<div class="card col-6 mx-auto">
    <div class="card-body">
        <h5 class="card-title text-center mb-4"><b>Ubah Password</b></h5>
        {{-- <div class="row"> --}}
        @foreach ($account as $a)
        @if ($a->nik == Auth::user()->nik)
        <form action="/changepassword/{{$a->nik}}" method="POST">
            @csrf
            <div class="form-group w-100">
                <label for="">Password Baru :</label>
                <input type="password" name="password" id="" class="form-control w-100">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Proses</button>

        </form>
        @endif
        @endforeach
        {{-- </div> --}}
    </div>
</div>
@endsection
