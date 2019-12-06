<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAAAuUlEQVQ4jeWTsQ7BYBSFv9NUFwn1AGJlFlYGm0EXi+68Ac9ilnqKvoDNI3iEisSA9JokfxsSSTfOdnLP/e5djninJGsF0jRHkcwG97jZeZsD5JogyeaGVogR4ANgXA2byfOWALL8dFuE69eO7wJM2gD98pVHHKZAClDbn3fuzPv02rf6A8CpEsCwYyWAUFQJ8I1+AOCX/AHoAvVCKMkmbpncWaGNAGyt5tcvQ7x8LDQy1HssGu1PHzwBk7MsDXoCtGcAAAAASUVORK5CYII=" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">

    <title>Booking</title>
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg navbar-light bg-white d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
        <div class="container">
            <a class="navbar-brand" href="/landingpage">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 172 172"
                    class="d-inline-block align-top" style=" fill:#ffffff;">
                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <path d="M0,172v-172h172v172z" fill="none"></path>
                        <g id="logo" fill="#0069D9">
                            <path
                                d="M91.805,0l-55.04,17.2c-1.37062,0.68531 -2.365,2.06938 -2.365,3.44v134.16c0,1.72 1.075,3.09063 2.795,3.44l55.04,13.76h0.645c0.68531,0 1.35719,-0.29562 2.0425,-0.645c0.68531,-0.68531 1.3975,-1.76031 1.3975,-2.795v-165.12c0,-1.03469 -0.71219,-2.10969 -1.3975,-2.795c-1.03469,-0.68531 -2.08281,-0.645 -3.1175,-0.645zM103.2,13.76v6.88h27.52v130.72h-27.52v6.88h30.96c1.89469,0 3.44,-1.54531 3.44,-3.44v-137.6c0,-1.89469 -1.54531,-3.44 -3.44,-3.44zM82.56,82.56c2.06938,0 3.44,2.40531 3.44,5.16c0,2.75469 -1.37062,5.16 -3.44,5.16c-2.06937,0 -3.44,-2.40531 -3.44,-5.16c0,-2.75469 1.37063,-5.16 3.44,-5.16z">
                            </path>
                        </g>
                    </g>
                </svg>
                Open'D
            </a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Konten -->
    <div class="container">
        <form action="/loaddata" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="kode" value="{{$kode}}">
            <div class="card text-center booking-form">
                <div class="card-header">
                    <h2 style="font-weight: 300;">Pilih Kamar</h2>
                </div>
                <div class="card-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <h5 style="font-weight: 300;">Lantai 1</h5>
                            <table style="border-collapse: collapse; width: 83%;" border="0" align="center"
                                class="tb-lantai">
                                <tbody>
                                    <tr>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '1')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="1">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '2')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="2">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '3')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="3">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '4')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="4">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '5')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="5">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '6')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="6">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '7')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="7">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '8')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="8">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '9')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="9">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 10%;" colspan="9" rowspan="4">&nbsp;</td>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '10')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="10">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '11')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="11">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '12')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="12">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 8.3%;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '13')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="13">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <h5 style="font-weight: 300;">Lantai 2</h5>
                            <table style="border-collapse: collapse; width: 100%; height: 180px;" border="0"
                                align="center" class="tb-lantai">
                                <tbody>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">&nbsp;</td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '23')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="23">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '24')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="24">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '25')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="25">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '26')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="26">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '27')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="27">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '28')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="28">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '29')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="29">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '30')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="30">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '31')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="31">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '32')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="32">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '22')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="22">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 90px;" colspan="10" rowspan="5">&nbsp;</td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '33')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="33">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '21')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="21">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '34')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="34">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '20')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="20">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '35')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="35">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '19')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="19">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '36')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="36">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '18')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="18">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '37')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="37">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '17')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="17">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;" colspan="11">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;" colspan="12">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '16')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="16">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;" colspan="11" rowspan="3">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '15')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="15">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '14')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="14">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <h5 style="font-weight: 300;">Lantai 3</h5>
                            <table style="border-collapse: collapse; width: 100%; height: 180px;" border="0"
                                align="center" class="tb-lantai">
                                <tbody>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">&nbsp;</td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '48')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="48">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '49')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="49">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '50')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="50">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '51')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="51">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '52')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="52">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '53')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="53">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '54')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="54">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '55')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="55">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '56')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="56">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '57')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="57">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '47')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="47">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 90px;" colspan="10" rowspan="5">&nbsp;</td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '58')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="58">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '46')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="46">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '59')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="59">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '45')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="45">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '60')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="60">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '44')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="44">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '61')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="61">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '43')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="43">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '62')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="62">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '42')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="42">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;" colspan="11">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;" colspan="12">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '41')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="41">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td style="width: 8.3%; height: 18px;" colspan="11" rowspan="4">&nbsp;</td>
                                    </tr>
                                    <tr style="height: 18px;">
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '40')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="40">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '39')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="39">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 8.3%; height: 18px;">
                                            <label class="kontener">&nbsp;
                                                @foreach ($kamar as $k)
                                                @if ($k->id_kamar == '38')
                                                <input type="radio" name="kamar" disabled>
                                                @else
                                                <input type="radio" name="kamar" value="38">
                                                @endif
                                                @endforeach
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="row justify-content-md-center">
                        <div class="cover"></div>
                        <div class="col col-lg-2">
                            <label class="kontener"><small>Terisi</small>
                                <input type="radio" name="ket" disabled>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col col-lg-2">
                            <label class="kontener"><small>Terpilih</small>
                                <input type="radio" name="ket" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col col-lg-2">
                            <label class="kontener disable-checkbox"><small>Tersedia</small>
                                <input type="radio" name="ket">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="card text-center">
                        <div class="card-header">
                            <h2 style="font-weight: 300;">Formulir Pendaftaran</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <img id="image-preview" class="rounded mx-auto d-block img-prev" alt="...">
                                    </div>
                                    <div class="form-group">
                                        <label for="image-source" class="btn btn-secondary btn-sm btn-block"
                                            style="cursor:pointer">Upload</label>
                                        <input type="file" id="image-source" name="avatar" onchange="previewImage();"
                                            accept="image/*" required />
                                    </div>
                                </div>
                                <div class="col-8 text-left">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" name="nik"
                                            id="formGroupExampleInput" placeholder="NIK" onkeypress='angka(event)'
                                            required maxlength="16">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" name="nama"
                                            id="formGroupExampleInput" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" name="kontak"
                                            id="formGroupExampleInput" placeholder="Kontak" onkeypress='angka(event)'
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" name="wali"
                                            id="formGroupExampleInput" placeholder="Kontak Wali"
                                            onkeypress='angka(event)' required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-sm" name="mail"
                                            id="formGroupExampleInput" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1"
                                            name="alamat" rows="2" placeholder="Alamat" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card text-center">
                        <div class="card-header">
                            <h2 style="font-weight: 300;">Konsumsi Listrik Tambahan</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col img-panel-add">
                                    <input type="checkbox" name="adds[]" id="add1" value="5" />
                                    <label for="add1" class="labels"></label>
                                    <img class="img-add-panel" src="{{ asset('/assets/images/pc.png') }}">
                                    <small>PC</small>
                                </div>
                                <div class="col img-panel-add">
                                    <input type="checkbox" name="adds[]" id="add2" value="6" />
                                    <label for="add2" class="labels"></label>
                                    <img class="img-add-panel" src="{{ asset('/assets/images/laptop.png') }}">
                                    <small>Laptop</small>
                                </div>
                                <div class="col img-panel-add">
                                    <input type="checkbox" name="adds[]" id="add3" value="4" />
                                    <label for="add3" class="labels"></label>
                                    <img class="img-add-panel" src="{{ asset('/assets/images/tv.png') }}">
                                    <small>TV</small>
                                </div>
                                <div class="col img-panel-add">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="col img-panel-add">
                                    <input type="checkbox" name="adds[]" id="add4" value="1" />
                                    <label for="add4" class="labels"></label>
                                    <img class="img-add-panel" src="{{ asset('/assets/images/kulkas.png') }}">
                                    <small>Kulkas</small>
                                </div>
                                <div class="col img-panel-add">
                                    <input type="checkbox" name="adds[]" id="add5" value="2" />
                                    <label for="add5" class="labels"></label>
                                    <img class="img-add-panel" src="{{ asset('/assets/images/ac.png') }}">
                                    <small>AC</small>
                                </div>
                                <div class="col img-panel-add">
                                    <input type="checkbox" name="adds[]" id="add6" value="3" />
                                    <label for="add6" class="labels"></label>
                                    <img class="img-add-panel" src="{{ asset('/assets/images/dispenser.png') }}">
                                    <small>Dispenser</small>
                                </div>
                                <div class="col img-panel-add">
                                    <input type="checkbox" name="adds[]" id="add7" value="7" />
                                    <label for="add7" class="labels"></label>
                                    <img class="img-add-panel" src="{{ asset('/assets/images/rice.png') }}">
                                    <small>Rice Cooker</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <small>Pilih barang yang akan anda tambahkan ke dalam kamar anda.</small>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top: 30px;" data-toggle="modal"
                data-target="#modal-konfir-booking">
                Proses Pemesanan
            </button>

            <div class="modal fade" id="modal-konfir-booking" tabindex="-1" role="dialog"
                aria-labelledby="modal-konfir-booking" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33"
                                    viewBox="0 0 172 172" class="d-inline-block align-top" style=" fill:#ffffff;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g id="logo" fill="#0069D9">
                                            <path
                                                d="M91.805,0l-55.04,17.2c-1.37062,0.68531 -2.365,2.06938 -2.365,3.44v134.16c0,1.72 1.075,3.09063 2.795,3.44l55.04,13.76h0.645c0.68531,0 1.35719,-0.29562 2.0425,-0.645c0.68531,-0.68531 1.3975,-1.76031 1.3975,-2.795v-165.12c0,-1.03469 -0.71219,-2.10969 -1.3975,-2.795c-1.03469,-0.68531 -2.08281,-0.645 -3.1175,-0.645zM103.2,13.76v6.88h27.52v130.72h-27.52v6.88h30.96c1.89469,0 3.44,-1.54531 3.44,-3.44v-137.6c0,-1.89469 -1.54531,-3.44 -3.44,-3.44zM82.56,82.56c2.06938,0 3.44,2.40531 3.44,5.16c0,2.75469 -1.37062,5.16 -3.44,5.16c-2.06937,0 -3.44,-2.40531 -3.44,-5.16c0,-2.75469 1.37063,-5.16 3.44,-5.16z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                Konfirmasi Booking
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-justify">
                            Dengan menekan tombol <span class="text-primary font-weight-bold">Proses</span>, anda akan
                            segera diarahkan menuju ke halaman konfirmasi pembayaran. <br><br>
                            Mohon ikuti instruksi yang diberikan untuk menyelesaikan proses transaksi.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary btn-sm">Proses</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Konten -->

    <footer class="text-muted mt-auto py-3 bg-light" id="footer">
        <div class="container">
            <p class="float-right"><a href="#">Ke atas</a></p>
            <div class="">
                <h2>Open'D</h2>
                <p>Untuk info lebih lanjut hubungi :</p>
            </div>
            <p><img src="assets/images/wa.png" width="35px" height="35px">
                <label for="ig" class="text-none text-muted d-inline-block mt-2">+62 123 0987 1357</label><br>
                <a href="instagram.com/helvin_laveda" class="text-decoration-none d-inline-block mt-2">
                    <img src="assets/images/ig.png" id="ig" width="35px" height="35px" alt="">
                    <label for="ig" class="text-none text-muted ">@helvin_laveda</label>
                </a>
                <a href="twitter.com/helvin_laveda" class="text-decoration-none d-block mt-2">
                    <img src="assets/images/twitter.png" id="ig" width="35px" height="35px" alt="">
                    <label for="ig" class="text-none text-muted ">@helvin_laveda</label>
                </a>
                <a href="facebook.com/helvin_laveda" class="text-decoration-none d-block mt-2">
                    <img src="assets/images/fb.png" id="ig" width="35px" height="35px" alt="">
                    <label for="ig" class="text-none text-muted ">@helvin_laveda</label>
                </a>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.slim.min.js">
    </script>
    <script src="assets/js/popper.min.js">
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js">
    </script>
    <script>
        function previewImage() {
            document.getElementById("image-preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };

        function angka(evt) {
            var theEvent = evt || window.event;

            if (theEvent.type === 'paste') {
                // Handle paste
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }

        $(":checkbox").on("change", function () {
            $(this).parent().toggleClass("img-panel-add-checked", this.checked);
        });

    </script>
</body>

</html>
