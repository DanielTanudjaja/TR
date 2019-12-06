<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">

    <title>Invoice</title>

    <style>
        thead tr th {
            height: 50px;
        }

        tbody tr th {
            height: 50px;
        }

        tbody tr .td {
            height: 40px;
        }

        td {
            padding: 3px;
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

    </style>
</head>

<body class="bg-light">
    <div class="container">
        @csrf
        <div class="card bg-white">
            <div class="card-body">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width: 60%; text-align: left; padding-right: 366px;" rowspan="4">
                                <div class="row">
                                    <div class="col-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                            viewBox="0 0 172 172" class="d-inline-block align-top"
                                            style=" fill:#ffffff;">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g id="logo" fill="#0069D9">
                                                    <path
                                                        d="M91.805,0l-55.04,17.2c-1.37062,0.68531 -2.365,2.06938 -2.365,3.44v134.16c0,1.72 1.075,3.09063 2.795,3.44l55.04,13.76h0.645c0.68531,0 1.35719,-0.29562 2.0425,-0.645c0.68531,-0.68531 1.3975,-1.76031 1.3975,-2.795v-165.12c0,-1.03469 -0.71219,-2.10969 -1.3975,-2.795c-1.03469,-0.68531 -2.08281,-0.645 -3.1175,-0.645zM103.2,13.76v6.88h27.52v130.72h-27.52v6.88h30.96c1.89469,0 3.44,-1.54531 3.44,-3.44v-137.6c0,-1.89469 -1.54531,-3.44 -3.44,-3.44zM82.56,82.56c2.06938,0 3.44,2.40531 3.44,5.16c0,2.75469 -1.37062,5.16 -3.44,5.16c-2.06937,0 -3.44,-2.40531 -3.44,-5.16c0,-2.75469 1.37063,-5.16 3.44,-5.16z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="col-8">
                                        <div class="col">
                                            <h1 style="font-weight: 500;">Open'D</h1>
                                        </div>
                                        <div class="col">
                                            <h3 style="font-weight: 300;">Invoice</h3>
                                        </div>
                                    </div>
                                </div>
                            <td style="width: 18%;">Kode Booking</td>
                            <td style="width: 2%; text-align: center;">:</td>
                            <td style="width: 20%;">
                                @foreach ($dataP as $p)
                                {{ $p->id_booking }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 18%;">Tanggal</td>
                            <td style="width: 2%; text-align: center;">:</td>
                            <td style="width: 20%;">
                                @foreach ($dataP as $p)
                                {{ $p->tgl }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 18%;">A/N</td>
                            <td style="width: 2%; text-align: center;">:</td>
                            <td style="width: 20%;">
                                @foreach ($dataP as $p)
                                {{ $p->nama }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 18%;">No. Kamar</td>
                            <td style="width: 2%; text-align: center;">:</td>
                            <td style="width: 20%;">
                                @foreach ($dataP as $p)
                                {{ $p->id_kamar }}
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <table width="100%">
                    <thead>
                        <tr class="border-top border-bottom">
                            <th style="width: 10%; text-align: center;">&nbsp;NO</th>
                            <th style="width: 65%; text-align: left;">&nbsp;ITEM</th>
                            <th style="width: 25%; text-align: left;" colspan="3">HARGA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=2 @endphp
                        <tr>
                            <td class="td" style="width: 10%; text-align: center;">1</td>
                            <td class="td" style="width: 65%; text-align: left;">
                                Kamar No.
                                @foreach ($dataP as $p)
                                {{ $p->id_kamar }}
                                @endforeach</td>
                            <td class="td" style="width: 5%; text-align: left;">Rp.</td>
                            <td class="td" style="width: 7%; text-align: right;">600000</td>
                            <td class="td" style="width: 13%; text-align: right;">&nbsp;</td>
                        </tr>
                        @foreach($dataC as $dataC)
                        <tr>
                            <td class="td" style="width: 10%; text-align: center;">{{ $i++ }}</td>
                            <td class="td" style="width: 65%; text-align: left;">{{ $dataC->nama }}</td>
                            <td class="td" style="width: 5%; text-align: left;">Rp.</td>
                            <td class="td" style="width: 7%; text-align: right;">{{ $dataC->harga }}</td>
                            <td class="td" style="width: 13%; text-align: right;">&nbsp;</td>
                        </tr>
                        @endforeach
                        <tr class="border-top">
                            <th style="width: 75%; text-align: right; padding-right: 30px;" colspan="2">&nbsp;JUMLAH
                            </th>
                            <th style="width: 5%;">Rp.</th>
                            <th style="width: 7%; text-align: right">
                                @foreach ($dataP as $p)
                                {{ $p->harga }}
                                @endforeach
                            </th>
                            <th class="td" style="width: 13%; text-align: right;">&nbsp;</th>
                        </tr>
                    </tbody>
                </table>

                <span class="font-weight-bold text-primary">Informasi</span>
                <small>
                    <ul class="text-justify" style="margin: 10px 0px 30px 0px;">
                        <li>Pembayaran dilakukan melalui Transfer. Bisa melalui ATM, SMS Banking, atau Internet
                            Banking.</li>
                        <li>Lakukan pembayaran transfer sesuai dengan nominal <span
                                class="font-weight-bold">jumlah</span>.
                        <li>Transfer ke nomor rekening <span class="font-weight-bold text-primary">BCA
                                9448521381</span>.
                        <li>Unggah foto bukti pembayaran untuk proses verifikasi.</li>
                    </ul>
                </small>
                <small><span class="font-weight-bold text-danger">Valid Hingga</span></small>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/assets/js/jquery-3.3.1.slim.min.js') }}">
    </script>
    <script src="{{ asset('/assets/js/popper.min.js') }}">
    </script>
    <script src="{{ asset('/assets/bootstrap/js/bootstrap.min.js') }}">
    </script>
</body>

</html>
