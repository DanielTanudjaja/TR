@extends('pageuser/main')

@section('title', 'Page User')
@section('container')

<div class="card col-6 mx-auto">
    <div class="card-body">
        <h5 class="card-title text-center mb-4"><b>Upload Bukti Pembayaran</b></h5>
        @foreach ($user as $u)
        @if ($u->nik == Auth::user()->nik)
        <form action="/bayarUser/{{$u->nik}}" method="post" id="veri" enctype="multipart/form-data">
            @csrf
            <label class="label2">
                <p class="label-txt">Upload Foto</p>
                <input type="file" name="validasi" class="input @error('foto') is-invalid @enderror">
                @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </label>

            <button type="submit" class="btn btn-block btn-primary" style="border-radius: 10px;">Validasi
                Pembayaran</button>
        </form>
        @endif
        @endforeach

    </div>
</div>


{{-- <div class="col border-left konf-panel">
    @foreach ($user as $u)
    @if ($u->nik == Auth::user()->nik)
    <form action="/bayarUser/{{$u->nik}}" method="post" id="veri" enctype="multipart/form-data">
@csrf
<label class="label2">
    <p class="label-txt">Upload Foto</p>
    <input type="file" name="validasi" class="input @error('foto') is-invalid @enderror">
    @error('foto')
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</label>

<button type="submit" class="btn btn-primary" style="border-radius: 10px;">Validasi
    Pembayaran</button>
</form>
@endif
@endforeach
</div> --}}

<script>
    $(document).ready(function () {
        $('#veri input').change(function () {
            $('#veri p').text(this.files.length + " file(s) selected");
        });
    });

</script>
@endsection
