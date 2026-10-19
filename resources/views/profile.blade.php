@extends('layouts.app')

@section('title', 'Profil - DOYOK Handmade')

@section('content')

<div class="container py-5">

    {{-- Header --}}
    <div class="text-center mb-5">
        <span class="badge bg-warning text-dark px-3 py-2">
            PROFIL USAHA
        </span>

        <h1 class="fw-bold mt-3">Profil DOYOK Handmade</h1>

        <p class="text-muted">
            Mengenal lebih dekat pemilik dan perjalanan usaha kami.
        </p>
    </div>

    {{-- Profil Pemilik --}}
    <div class="row align-items-center g-5 mb-5">

        <div class="col-md-5 text-center">
            <img
                src="{{ asset('assets/images/pemilik-doyok.jpg') }}"
                alt="Pemilik DOYOK Handmade"
                class="img-fluid rounded-4 shadow"
                style="width: 100%; max-height: 400px; object-fit: cover;"
            >
        </div>

        <div class="col-md-7">
            <h2 class="fw-bold">Pemilik DOYOK Handmade</h2>

            <p class="text-muted">
                DOYOK Handmade merupakan usaha yang menghadirkan
                berbagai produk kerajinan tangan dengan desain unik,
                kreatif, dan memiliki nilai seni.
            </p>

            <p class="text-muted">
                Usaha ini dibangun dengan semangat untuk mendukung
                kreativitas serta memperkenalkan hasil karya handmade
                kepada masyarakat luas.
            </p>
        </div>

    </div>

    {{-- Visi dan Misi --}}
    <div class="row g-4 mb-5">

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                <h3 class="fw-bold mb-3">Visi</h3>

                <p class="text-muted">
                    Menjadi usaha kerajinan handmade yang kreatif,
                    berkualitas, dan dikenal masyarakat luas serta
                    mampu memberikan nilai tambah bagi karya pengrajin lokal.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                <h3 class="fw-bold mb-3">Misi</h3>

                <ul class="text-muted">
                    <li>Menghadirkan produk handmade yang unik dan berkualitas.</li>
                    <li>Mendukung kreativitas para pengrajin lokal.</li>
                    <li>Memperkenalkan kerajinan tangan melalui media digital.</li>
                    <li>Memberikan informasi produk yang jelas kepada pelanggan.</li>
                </ul>
            </div>
        </div>

    </div>

    {{-- Tahun Pembuatan Website --}}
    <div class="text-center rounded-4 p-4"
         style="background-color: #efe0ce;">

        <h4 class="fw-bold">Tahun Pembuatan Website</h4>

        <h2 class="fw-bold" style="color: #956844;">
            2026
        </h2>

        <p class="text-muted mb-0">
            Website resmi katalog produk DOYOK Handmade.
        </p>

    </div>

</div>

@endsection
