<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/uploads/images/logo/favicon.png') }}">	
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/4.5.0/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <livewire:styles />
    <livewire:scripts />
    <script src="{{ asset('/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('/css/bootstrap/4.5.0/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/4.0.4/highcharts.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>

<body style="background-color: #e2e8f0;">

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    {{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color: #171d26!important"> --}}
        <a class="navbar-brand font-weight-bold" href="{{ route('dashboard.index') }}"><i class="fa fa-carrot"></i> KREASI STORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fa fa-chart-line"></i> Analytic</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-bag"></i> Products</a>
                    <div class="dropdown-menu shadow border-0" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('categories.index') }}"><i class="fa fa-folder"></i> Categories</a>
                        <a class="dropdown-item" href="{{ route('tags.index') }}"><i class="fa fa-shopping-bag"></i> Data Products</a>
                        <a class="dropdown-item" href="{{ route('posts.index') }}"><i class="fa fa-award"></i> Voucher</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> Orders</a>
                    <div class="dropdown-menu shadow border-0" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> Data Orders</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-credit-card"></i> Payment Confirmation</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-laptop"></i> Sliders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-users"></i> Users</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right: 0px">
                <li class="dropdown">
                    <a class="dropdown-toggle text-white"
                        style="padding-top: 13px;line-height: 30px;padding-bottom:9px;text-decoration: none;"
                        data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> Admin
                        <span class="caret"></span></a>
                    <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('root') }}" target="_blank"><i class="fa fa-external-link-alt"></i> View Site</a>
                        <div class="dropdown-divider"></div>
                        <livewire:console.logout />
                    </div>
            </ul>
        </div>
    </nav>

    <div class="jumbotron rounded-0" style="background-color: #566479;padding-bottom:8rem">
        <div class="container">
        </div>
    </div>

    <div class="container-fluid mb-5" style="margin-top: -120px">

        @yield('content')

    </div>
    <script>
        @if(session()->has('success'))
            toastr.success('{{ session('success') }}')
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}')
        @endif
    </script>
</body>
</html>