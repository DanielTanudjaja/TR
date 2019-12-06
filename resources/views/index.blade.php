<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Open'D 2019</title>

    <link rel="canonical" href="index.htm">
    <link rel="shortcut icon" type="image/png"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAAAuUlEQVQ4jeWTsQ7BYBSFv9NUFwn1AGJlFlYGm0EXi+68Ac9ilnqKvoDNI3iEisSA9JokfxsSSTfOdnLP/e5djninJGsF0jRHkcwG97jZeZsD5JogyeaGVogR4ANgXA2byfOWALL8dFuE69eO7wJM2gD98pVHHKZAClDbn3fuzPv02rf6A8CpEsCwYyWAUFQJ8I1+AOCX/AHoAvVCKMkmbpncWaGNAGyt5tcvQ7x8LDQy1HssGu1PHzwBk7MsDXoCtGcAAAAASUVORK5CYII=" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg navbar-light d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
        <div class="container">
            <a class="navbar-brand text-white" href="/landingpage">
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
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    {{-- <span class="nav-item nav-link text-white" href="#">Home <span class="sr-only">(current)</span></span> --}}
                    <a class="nav-item nav-link text-white" href="#aboutus">About Us</a>
                </div>
                <a class="nav-item btn btn-primary tombol pl-3 pr-3 pt-1 pb-1" href="#Login" data-toggle="modal">Sign
                    In</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Cari rumah kos <span>murah</span> dan <span>nyaman</span><br> di Salatiga?</h1>
            <a href="#footer" class="btn btn-primary tombol pl-4 pr-4 pt-2 pb-2">Contact Us</a>
        </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Konten -->
    <div class="container">
        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-9 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <a href="/booking" class="text-dark" style="text-decoration: none;">
                            <img src="assets/images/ticket.png" alt="Booking" class="float-left">
                            <h4>Booking</h4>
                            <p>Pesan kamar sekarang!</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="#Validasi" class="text-dark" data-toggle="modal" style="text-decoration: none;">
                            <img src="assets/images/payment.png" alt="About" class="float-left">
                            <h4>Validasi Pembayaran</h4>
                            <p>Sudah booking?</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="/gallery" class="text-dark" style="text-decoration: none;">
                            <img src="assets/images/image.png" alt="Galery" class="float-left">
                            <h4>Gallery</h4>
                            <p>Lihat foto kos.<br><span class="text-danger">Click Bait Allert!<span></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Panel -->
    </div>

    <!-- About Us -->
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" id="aboutus">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Ribuan mahasiswa Salatiga bahkan tidak menyadari bahwa ada hunian yang nyaman di kota ini.
            <span>Open'D</span>
            merupakan suatu layanan pemesanan dan manajemen kamar kost Wisma Zobo berbasis Web Application. Semua
            fasilitas yang anda lihat di galery kami bisa anda nikmati hanya dengan <span>Rp. 600K</span> per bulan.
            Tetapi hal terpenting yang bisa anda dapatkan adalah rasa kekeluargaan yang tak ternilai di sini 😘<br>
        </p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.559630268049!2d110.4937573222295!3d-7.3224339788616986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a79d58485ee5b%3A0xef28342d5b787521!2sWisma%20Zobo!5e0!3m2!1sen!2sid!4v1573997053876!5m2!1sen!2sid"
            width="868" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- End About Us -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-443314a1-a7f0-4ec6-a7c3-7b2372412d1d"></div>
    <!-- Footer -->
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
    <!-- End Footer -->

    <!-- Login -->
    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33"
                            viewBox="0 0 172 172" class="d-inline-block align-top" style=" fill:#ffffff;">
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
                        Login
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <small class="form-text">Nama Pengguna</small>
                            <input type="text" class="form-control" name="username">
                            {{-- <small class="form-text text-muted">Format: XX-XXXXXXXX</small> --}}
                        </div>
                        <div class="form-group">
                            <small class="form-text">Kata Sandi</small>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"
                            style="border-radius: 10px;">Masuk</button>
                        <div class="user-accounts-alt__separator">
                            <span class="user-accounts-hline"></span>
                            <span class="user-accounts-alt__separator-text">Belum punya akun?</span>
                            <span class="user-accounts-hline"></span>
                        </div>
                        <small class="form-text text-muted" style="display: block; text-align: center;">Booking kamar
                            <a href="/booking"
                                class="text-primary text-decoration-none font-weight-bold">sekarang</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login -->

    <!-- Validasi -->
    <div class="modal fade" id="Validasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="33" height="33"
                            viewBox="0 0 172 172" class="d-inline-block align-top" style=" fill:#ffffff;">
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
                        Validasi Pembayaran
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/insertbooking" method="post" id="veri" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <small class="form-text">Kode Booking</small>
                            <input type="text" class="form-control" name="id_booking"
                                placeholder="Masukkan kode booking">
                        </div>
                        <div class="form-group v-form">
                            <input type="file" name="file-validasi" accept="image/*">
                            <p>Upload bukti pembayaran</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" style="border-radius: 10px;">Validasi
                            Pembayaran</button>
                        <div class="user-accounts-alt__separator">
                            <span class="user-accounts-hline"></span>
                            <span class="user-accounts-alt__separator-text">Informasi</span>
                            <span class="user-accounts-hline"></span>
                        </div>
                        <small class="form-text text-muted" style="display: block; text-align: center;">Proses validasi
                            membutuhkan waktu maksimal 48 jam oleh Admin.</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Validasi -->

    <script src="{{ asset('/assets/js/jquery-3.3.1.slim.min.js') }}">
    </script>
    <script src="{{ asset('/assets/js/popper.min.js') }}">
    </script>
    <script src="{{ asset('/assets/bootstrap/js/bootstrap.min.js') }}">
    </script>
    <script>
        $(window).on("scroll", function () {
            if ($(window).scrollTop() < 200) {
                $(".navbar").removeClass("bg-white");
                // $(".navbar").removeClass("border-bottom");
                // $(".navbar").removeClass("shadow-sm");
                $(".navbar").removeClass("sticky");
                $(".nav-link").removeClass("text-dark");
                $(".nav-link").addClass("text-white");
                $(".navbar-brand").addClass("text-white");
            } else {
                $(".navbar").addClass("bg-white");
                // $(".navbar").addClass("border-bottom");
                // $(".navbar").addClass("shadow-sm");
                $(".navbar").addClass("sticky");
                $(".nav-link").removeClass("text-white");
                $(".nav-link").addClass("text-dark");
                $(".navbar-brand").removeClass("text-white");
            }
        });

        $("nav").hide();

        $("html").mousemove(function (event) {
            $("nav").show();

            myStopFunction();
            myFunction();
        });

        function myFunction() {
            myVar = setTimeout(function () {
                $("nav").hide();
            }, 1000);
        }

        function myStopFunction() {
            if (typeof myVar != 'undefined') {
                clearTimeout(myVar);
            }
        }

        $(document).ready(function () {
            $('form input').change(function () {
                $('form p').text(this.files.length + " file(s) selected");
            });
        });

    </script>
</body>

</html>
