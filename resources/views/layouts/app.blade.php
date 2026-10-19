<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - DOYOK Handmade </title>

    <link rel="stylesheet"
    href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    <style>

                .product-card {
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12) !important;
        }

        .product-card img {
            transition: transform 0.4s ease;
        }

        .product-card:hover img {
            transform: scale(1.04);
        }

        body {
            background-color: #faf7f2;
            color: #463629;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #fff;
        }

        .brand {
            color: #805b3d;
            font-weight: bold;
        }

        .hero {
            background: #eee1d0;
            border-radius: 20px;
            padding: 60px 30px;
        }

        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-img {
            height: 220px;
            object-fit: cover;
        }

        .btn-brown {
            background-color: #805b3d;
            color: white;
        }

        .btn-brown:hover {
            background-color: #62432d;
            color: white;
        }
    </style>
</head>

<body>


<nav class="navbar navbar-expand-lg shadow-sm py-3 sticky-top">
    <div class="container">

        <a class="navbar-brand brand fs-4"
           href="{{ route('handmade.index') }}">
            DOYOK Handmade.
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    Beranda
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('handmade.index') }}">
                    Koleksi Produk
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">
                    Profil
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">
                    Tentang Kami
                </a>
            </li>

        </ul>


        </div>

    </div>
</nav>


<main>
    @yield('content')
</main>


<footer id="footer" class="text-center py-4 mt-5 bg-white">
    <h5 class="fw-bold brand">DOYOK Handmade.</h5>

    <p class="text-muted mb-2">
        Mendukung kreativitas dan karya pengrajin lokal.
    </p>

    <small class="text-muted">
        &copy; {{ date('Y') }} DOYOK Handmade.
    </small>
</footer>

<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
