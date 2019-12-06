@extends('pageadmin/main')

@section('title', 'Page Admin')
@section('container')
<div class="col-12">
    <div class="row">
        <div class="card  border-samping" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Jumlah Booking</h5>
                <p class="card-text text-dark">Banyak calon penghuni : {{$count}}</p>
                <a href="/pageadmin/VBooking" class="btn tesss btn-primary btn-block">Validasi Booking</a>
            </div>
        </div>
        <div class="card border-samping ml-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Jumlah Kamar: </h5>
                <p class="card-text text-dark">Kamar Terisi : {{$kmrUser}}</p>
                <p class="card-text text-dark">Kamar Dibooking : {{$kmrBooking}}</p>
                <p class="card-text text-dark">Kamar Kosong : {{$kamarks}}</p>
                <p class="card-text text-dark">Total Kamar : {{$totalKmr}}</p>
            </div>
        </div>
        <div class="card border-samping ml-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Data Penghuni :</h5>
                <p class="card-text text-dark mt-3">Jumlah Penghuni : {{$countUser}}</p>
                <p class="card-text text-dark">Penghuni yang keluar : {{$keluar}}</p>
                <a href="pageadmin/manageaccount" class="btn btn-admin btn-primary btn-block">Manage Account</a>
            </div>
        </div>
    </div>



    {{-- <canvas id="myChart" width="400" height="400"></canvas> --}}

    @endsection
