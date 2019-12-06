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

    <title>Metode Pembayaran</title>
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
        @csrf
        <input type="hidden" name="kode" value="{{$kode}}">
        <div class="card text-center booking-form">
            <div class="card-header">
                <h2 style="font-weight: 300;">Metode Pembayaran</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col border-right konf-panel">
                        <span class="font-weight-bold">Langkah-langkah Pembayaran</span>
                        <ol class="text-justify" style="margin-top:30px;">
                            <li>Silahkan <a href="/konfirm/invoice/{{$kode}}" target="_blank" class="text-primary font-weight-bold">unduh invois</a> pemesanan
                                anda.</li>
                            {{-- <li>Silahkan <a href="/confirm/invoice" target="_blank" class="text-primary font-weight-bold">unduh invois</a> pemesanan
                                anda.</li> --}}
                            <li>Pembayaran dilakukan melalui Transfer. Bisa melalui ATM, SMS Banking, atau Internet
                                Banking.</li>
                            <li>Pilih Transfer pada menu utama bank pilihan Anda.</li>
                            <li>Masukkan nomor rekening tujuan seperti yang tertera pada invois. Kemudian, masukkan
                                nominal sesuai dengan jumlah yang tertera pada invois Anda.</li>
                            <li>Foto bukti pembayaran lalu unggah pada panel di sebelah kanan. Anda juga bisa mengunggah
                                foto bukti pembayaran melalui panel Verifikasi Pembayaran di halaman utama.</li>
                        </ol>
                    </div>
                    <div class="col border-left konf-panel">
                        <form action="/insertbooking" method="post" id="veri" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" name="id_booking" value="{{$kode}}"
                            <span class="font-weight-bold">Sudah bayar? Upload bukti pembayaran</span>
                            <div class="form-group v-form" style="margin-top:30px;">
                                <input type="file" name="file-validasi" accept="image/*">
                                <p>Upload bukti pembayaran</p>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"
                                style="border-radius: 10px;">Validasi Pembayaran</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <small><span class="text-danger font-weight-bold">Penting!</span> Masa berlaku pemesanan kamar hanya 48
                    jam sejak diproses, segeralah lakukan proses pembayaran.</small>
            </div>
        </div>
    </div>
    <!-- End Konten -->

    <!-- Footer -->
    <footer class="text-muted mt-auto py-3 bg-light" id="footer">
        <div class="container">
            <p class="float-right"><a href="#">Ke atas</a></p>
            <p>&copy; 2019 BDHG | <img src="https://img.icons8.com/windows/20/6C757D/whatsapp.png"> +62 123 0987 1357
                (Angga)
            </p>
        </div>
    </footer>
    <!-- End Footer -->

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

        $(document).ready(function () {
            $('#veri input').change(function () {
                $('#veri p').text(this.files.length + " file(s) selected");
            });
        });

    </script>
</body>

</html>
