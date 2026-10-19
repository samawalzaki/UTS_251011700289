@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')

<div class="container py-5">

    <!-- Hero Section -->
    <div class="hero text-center mb-5">
        <span class="badge bg-light text-dark mb-3 px-3 py-2">
            HANDMADE GALLERY
        </span>

        <h1 class="fw-bold display-5">
            Karya Tangan Penuh Kreativitas
        </h1>

        <p class="mt-3">
            Temukan berbagai produk handmade unik yang dibuat
            dengan kreativitas dan ketelitian para pengrajin lokal.
        </p>

        <a href="#produk" class="btn btn-brown px-4 mt-3">
            Lihat Koleksi
        </a>
    </div>

    <!-- Judul Produk -->
    <div class="text-center mb-4" id="produk">
        <h2 class="fw-bold">Koleksi Produk Kami</h2>
        <p class="text-muted">
            Pilihan kerajinan tangan terbaik untuk kamu.
        </p>
    </div>

    
<!-- Form Pencarian -->
<div class="row justify-content-center mb-4">

    <div class="col-md-7">

        
    <form action="{{ route('handmade.index') }}" method="GET"
        class="row g-3 mb-5">

        <div class="col-md-5">
            <input type="text"
                name="search"
                class="form-control rounded-3"
                placeholder="Cari nama produk, pengrajin, atau bahan..."
                value="{{ request('search') }}">
        </div>

        <div class="col-md-4">
            <select name="category" class="form-select rounded-3">
                <option value="">Semua Kategori</option>

                <option value="Tas dan Aksesori"
                    {{ request('category') == 'Tas dan Aksesori' ? 'selected' : '' }}>
                    Tas dan Aksesori
                </option>

                <option value="Keramik"
                    {{ request('category') == 'Keramik' ? 'selected' : '' }}>
                    Keramik
                </option>

                <option value="Dekorasi Rumah"
                    {{ request('category') == 'Dekorasi Rumah' ? 'selected' : '' }}>
                    Dekorasi Rumah
                </option>
            </select>
        </div>

        <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-brown w-100">
                Cari
            </button>

            <a href="{{ route('handmade.index') }}"
            class="btn btn-outline-secondary">
                Reset
            </a>
        </div>

     </form>


    </div>

</div>


    <!-- Daftar Produk -->
    <div class="row g-4">

        @forelse ($handmades as $handmade)

        
        <div class="col-md-4 col-lg-4 mb-4">
            <div class="card product-card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                <img
                    src="{{ asset('assets/images/' . $handmade->image) }}"
                    class="card-img-top"
                    alt="{{ $handmade->name }}"
                    style="height: 250px; object-fit: cover;"
                >

                <div class="card-body p-4">

                    <span class="badge bg-warning text-dark mb-2">
                        {{ $handmade->category }}
                    </span>

                    <h5 class="fw-bold mt-2">
                        {{ $handmade->name }}
                    </h5>

                    <p class="text-muted small mb-2">
                        Pengrajin: {{ $handmade->artisan }}
                    </p>

                    <p class="fw-bold mb-3" style="color: #956844;">
                        Rp {{ number_format($handmade->price, 0, ',', '.') }}
                    </p>

                    <a href="{{ route('handmade.detail', $handmade->id) }}"
                    class="btn btn-brown w-100">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>



        @empty

        <div class="col-12 text-center">
            <p>Belum ada produk tersedia.</p>
        </div>

        @endforelse

    </div>
     {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-4">
         {{ $handmades->links('pagination::bootstrap-5') }}
        </div>

</div>

@endsection
