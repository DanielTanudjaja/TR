@extends('pageuser/main')

@section('title', 'Page User')
@section('container')

<div class="card col-6 mx-auto">
    <div class="card-body">
        <div class="row">
            <h5 class="card-title text-center mb-4"><b>Download Tagihan Bulan Ini</b></h5>
            <form method="GET" action="/pageuser/kwitansi">
                @csrf
                <button type="submit" class="btn btn-block btn-primary" style="border-radius: 10px;">Download</button>
            </form>
        </div>
    </div>
</div>


@endsection
