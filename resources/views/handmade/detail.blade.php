@extends('layouts.app')

@section('title', $handmade->name . ' - Handmade Gallery')

@section('content')

<div class="container py-5">

    {{-- Breadcrumb --}}
    <div class="mb-4">
        <a href="{{ route('home') }}" class="text-decoration-none text-muted">
            Beranda
        </a>

        <span class="text-muted"> / </span>

        <a href="{{ route('handmade.index') }}"
           class="text-decoration-none text-muted">
            Koleksi Produk
        </a>

        <span class="text-muted"> / Detail Produk</span>
    </div>

    <div class="row g-5 align-items-start">

        {{-- Foto Produk --}}
        <div class="col-md-6">
            <img
                src="{{ asset('assets/images/' . $handmade->image) }}"
                alt="{{ $handmade->name }}"
                class="img-fluid rounded-4 shadow-sm w-100"
                style="height: 450px; object-fit: cover;"
            >
        </div>

        {{-- Informasi Produk --}}
        <div class="col-md-6">

            <span class="badge bg-warning text-dark px-3 py-2 mb-3">
                {{ $handmade->category }}
            </span>

            <h1 class="fw-bold mb-3">
                {{ $handmade->name }}
            </h1>

            <h3 class="fw-bold mb-4" style="color: #956844;">
                Rp {{ number_format($handmade->price, 0, ',', '.') }}
            </h3>

            <hr>

            <div class="mb-3">
                <strong>Nama Pengrajin</strong>
                <p class="text-muted">{{ $handmade->artisan }}</p>
            </div>

            <div class="mb-3">
                <strong>Bahan Produk</strong>
                <p class="text-muted">{{ $handmade->material }}</p>
            </div>

            <div class="mb-4">
                <strong>Deskripsi Produk</strong>
                <p class="text-muted">
                    {{ $handmade->description ?: 'Belum ada deskripsi produk.' }}
                </p>
            </div>

            <a href="{{ route('handmade.index') }}"
               class="btn btn-brown px-4 py-2">
                Kembali ke Koleksi
            </a>

        </div>

    </div>

</div>

@endsection
