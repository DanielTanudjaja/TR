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

    <title>Gallery</title>
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
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link-text text-dark" href="">Tertarik tinggal di kost kami?</a>
                </div>
                <a class="nav-item btn btn-primary tombol" href="/booking">Skuy Booking!</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Konten -->
    <div class="container gallery-container pt-md-5 text-center">
        <h1 class="display-4 mx-auto">Gallery</h1>
        <div class="tz-gallery">
            <div class="row row-gal mb-3">
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img1.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img1.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img2.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img2.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img3.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img3.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-gal">
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img4.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img4.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img5.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img5.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img6.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img6.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-gal">
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img7.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img7.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img8.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img8.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card img">
                        <a href="{{ asset('/assets/gallery/img9.JPG') }}" class="lightbox">
                            <img src="{{ asset('/assets/gallery/img9.JPG') }}" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- Login -->
    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="table">
            <div class="table-cell">
                <div class="modal-dialog modal-sm" role="document">
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
                                Login
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <small class="form-text">Alamat Email</small>
                                    <input type="email" class="form-control">
                                    <small class="form-text text-muted">Contoh: email@opend.com</small>
                                </div>
                                <div class="form-group">
                                    <small class="form-text">Kata Sandi</small>
                                    <input type="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"
                                    style="border-radius: 10px;">Masuk</button>
                                <div class="user-accounts-alt__separator">
                                    <span class="user-accounts-hline"></span>
                                    <span class="user-accounts-alt__separator-text">Belum punya akun?</span>
                                    <span class="user-accounts-hline"></span>
                                </div>
                                <small class="form-text text-muted" style="display: block; text-align: center;">Booking
                                    kamar <span class="text-primary font-weight-bold">sekarang</span></small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login -->

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
        baguetteBox.run('.tz-gallery');

    </script>
</body>

</html>
