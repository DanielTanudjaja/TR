<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom2.css">
</head>

<body id="body">

    <div class="col-6">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
    </div>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">Kostku</h3>
            </div>

            <ul class="list-unstyled components">
                <img class="img-profile" src="/assets/images/admin.jpg" alt="">
                <p class="nama-user">{{ Auth::user()->username }}</p>
                <li
                    class="{{((request()->is('pageadmin/dashboard')) || (request()->is('dashboard1'))) ? 'active' : ''}}">
                    <a href="/pageadmin/dashboard">
                        <img src="/assets/images/dash.png" width="30px" height="30px" alt="">
                        Dashboard</a>
                </li>
                <li
                    class="{{((request()->is('pageadmin/manageaccount')) ||(request()->is('pageadmin/manageaccount/pindah/'))) ? 'active' : ''}}">
                    <a href="/pageadmin/manageaccount">
                        <img src="/assets/images/acc.png" width="30px" height="30px" alt="">
                        Manage Account</a>
                </li>
                <li class="{{request()->is('pageadmin/VBooking') ? 'active' : ''}}">
                    <a href="/pageadmin/VBooking">
                        <img src="/assets/images/book.png" width="30px" height="30px" alt="">
                        Validasi Booking</a>
                </li>
                <li class="{{request()->is('pageadmin/VPembayaran') ? 'active' : ''}}">
                    <a href="/pageadmin/VPembayaran">
                        <img src="/assets/images/money.png" width="30px" height="30px" alt="">
                        Validation Pembayaran</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <form>
                        <button type=submit formaction="{{ route('logout') }}"
                            class="btn btn-danger btnku">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span>
                            <img src="/assets/images/close.png" width="40px" height="40px" alt="">
                        </span>
                        <span class="text-dark"></span>
                        <span class="text-dark"></span>
                        {{-- <span></span>
                        <span></span> --}}
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    @yield('header')
                </div>
            </nav>
            <div class="container">
                <div class="col-12">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
            </div>

            @yield('container')

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="chart.js"></script>

    <script>

    </script>
</body>


</html>
