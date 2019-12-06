@extends('pageuser/main')

@section('title', 'Page User')
@section('container')
<div class="card col-6 mx-auto">
    <div class="card-body">
        <h5 class="card-title text-center mb-4"><b>My Profile</b></h5>
        @csrf
        @foreach ($user as $u)
        @if ($u->nik == Auth::user()->nik)
        <p class="mb-4 d-flex justify-content-center">
            <img src="{{asset('/imgUser/'.$u->foto)}}" alt="" class="zoom rounded mx-auto gambar">
        </p>
        <div class="clear">
            <table>
                <tr>
                    <td>
                        <p class="card-text text-dark">NIK &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: {{$u->nik}}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text text-dark">Nama &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: {{$u->nama}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text text-dark">Kontak &ensp;&ensp;&ensp;&ensp;&ensp;: {{$u->kontak}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text text-dark">Email &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: {{$u->email}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text text-dark">Kontak Wali : {{$u->wali}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text text-dark">Alamat &ensp;&ensp;&ensp;&ensp;&ensp;: {{$u->alamat}}</p>
                    </td>
                </tr>
                <tr>
                    <td><a href="/gotoupdate" class="mt-5 mb-0 btn-block btn btn-primary text-light">Ubah
                            Data</a></td>
                </tr>
            </table>
        </div>
        @endif
        @endforeach
        <br>
    </div>
</div>

<div class="clear"></div>
@endsection
