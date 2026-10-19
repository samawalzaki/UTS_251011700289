@extends('layouts.app')

@section('title', 'Tentang Kami - Handmade Gallery')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <span class="badge bg-warning text-dark px-3 py-2">
            TENTANG KAMI
        </span>

        <h1 class="fw-bold mt-3">
            Mengenal DOYOK Handmade 
        </h1>

        <p class="text-muted">
            Menghadirkan keindahan melalui karya kerajinan tangan.
        </p>
    </div>

    <div class="row align-items-center g-4">

        <div class="col-md-6">
            <img src="{{ asset('assets/images/handmade-about.jpg') }}"
                 class="img-fluid rounded-4 shadow-sm"
                 alt="Kerajinan Handmade">
        </div>

        <div class="col-md-6">
            <h3 class="fw-bold">Cerita Kami</h3>

            <p class="text-muted">
                DOYOK Handmade merupakan tempat untuk mengenalkan
                berbagai produk kerajinan tangan yang dibuat dengan
                kreativitas, ketelitian, dan keunikan tersendiri.
            </p>

            <p class="text-muted">
                Kami ingin membantu memperkenalkan karya para
                pengrajin lokal agar semakin dikenal dan dihargai
                oleh masyarakat.
            </p>
        </div>

    </div>

</div>

@endsection
