@extends('layouts.app')

@section('title', 'Beranda - Handmade Gallery')

@section('content')

{{-- HERO SECTION --}}
<div class="container py-5">

    <div class="rounded-4 p-5 text-center"
         style="background: linear-gradient(135deg, #efe1cf, #dfc5a8);
                min-height: 430px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;">

        <span class="badge bg-light text-dark px-3 py-2 mb-3">
            SELAMAT DATANG DI DOYOK HANDMADE
        </span>

        <h1 class="display-4 fw-bold mb-3">
            Karya Tangan Penuh Kreativitas
        </h1>

        <p class="text-dark mb-4" style="max-width: 650px;">
            Temukan berbagai produk handmade unik dan menarik
            yang dibuat dengan kreativitas serta ketelitian
            para pengrajin lokal.
        </p>

        <a href="{{ route('handmade.index') }}"
           class="btn btn-brown px-4 py-3">
            Jelajahi Koleksi
        </a>

    </div>

</div>

{{-- KEUNGGULAN --}}
<div class="container py-4">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Mengapa DOYOK Handmade?</h2>
        <p class="text-muted">
            Lebih dari sekadar produk, setiap karya memiliki cerita.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                <h5 class="fw-bold">Karya Kreatif</h5>
                <p class="text-muted mb-0">
                    Produk dibuat dengan ide dan kreativitas
                    yang menghasilkan karya unik.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                <h5 class="fw-bold">Buatan Tangan</h5>
                <p class="text-muted mb-0">
                    Setiap produk memiliki sentuhan tangan
                    dan ketelitian para pengrajin.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                <h5 class="fw-bold">Mendukung Pengrajin Lokal</h5>
                <p class="text-muted mb-0">
                    Membantu memperkenalkan karya pengrajin
                    lokal kepada masyarakat.
                </p>
            </div>
        </div>

    </div>

</div>

{{-- AJAKAN --}}
<div class="container py-5">

    <div class="rounded-4 text-center p-5"
         style="background-color: #efe1cf;">

        <h2 class="fw-bold">Temukan Karya Favoritmu!</h2>

        <p class="text-muted mt-3">
            Jelajahi berbagai pilihan kerajinan handmade
            yang menarik dan memiliki keunikan tersendiri.
        </p>

        <a href="{{ route('handmade.index') }}"
           class="btn btn-brown px-4 mt-2">
            Lihat Semua Produk
        </a>

    </div>

</div>

@endsection
