<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabupaten Sukoharjo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hint.css/2.7.0/hint.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            position: relative;
            height: 500px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: auto;
        }

        .hero .carousel-indicators button {
            background-color: #000;
        }

        @keyframes slide {
            0% {transform: translateX(0);}
            25% {transform: translateX(-100%);}
            50% {transform: translateX(-200%);}
            75% {transform: translateX(-300%);}
            100% {transform: translateX(0);}
        }
        .card-text.text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .overflow-auto {
            scrollbar-width: thin; /* Untuk browser modern */
            overflow-x: auto; /* Gulir horizontal */
        }

        .overflow-auto::-webkit-scrollbar {
            height: 8px; /* Tinggi scrollbar */
        }

        .overflow-auto::-webkit-scrollbar-thumb {
            background-color: #ccc; /* Warna scrollbar */
            border-radius: 10px;
        }

        .overflow-auto::-webkit-scrollbar-thumb:hover {
            background-color: #999; /* Hover efek */
        }
        .pagination {
            font-size: 16px; /* Ubah ukuran font */
        }

        .pagination .page-item .page-link {
            width: 40px; /* Lebar tombol */
            height: 40px; /* Tinggi tombol */
            line-height: 38px; /* Pusatkan teks */
            text-align: center;
            padding: 0;
            border-radius: 50%; /* Buat tombol menjadi lingkaran */
            transition: all 0.2s ease;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff; /* Warna tombol aktif */
            color: white;
            border-color: #007bff;
        }

        .pagination .page-item .page-link:hover {
            background-color: #0056b3; /* Warna hover */
            color: white;
            border-color: #0056b3;
        }
        /* Container Styles */
        .sejarah-item {
            width: 100%;
            text-align: center;
            border-bottom: 2px solid #ddd;
            padding: 20px 0;
            position: relative;
        }

        .sejarah-header h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .sejarah-image img {
            max-height: 400px;
            object-fit: cover;
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .sejarah-text {
            font-size: 16px;
            line-height: 1.6;
            max-height: 100px; /* Initial hidden height */
            overflow: hidden;
            transition: max-height 0.5s ease;
        }

        .sejarah-text.expanded {
            max-height: 1000px; /* Large enough to show all content */
        }

        /* Toggle Button */
        .toggle-button {
            background: none;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            outline: none;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #f0f0f0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .toggle-button:hover {
            background: #e0e0e0;
        }

        .toggle-button.active {
            background: #d1d1d1;
        }


        /* Arrow V Icon */
        .arrow-v {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            transition: transform 0.3s ease;
        }

        .toggle-button.active .arrow-v {
            transform: rotate(180deg); /* Rotate to point up */
        }
        /* Arrow Icon */
        .arrow-icon {
            fill: #333;
            width: 24px;
            height: 24px;
            transition: transform 0.3s ease;
        }

        .toggle-button.active .arrow-icon {
            transform: rotate(180deg);
        }

        .arrow-down {
            display: inline-block;
            width: 24px;
            height: 24px;
            border-left: 3px solid #333;
            border-bottom: 3px solid #333;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
        }

        .toggle-button.active .arrow-down {
            transform: rotate(180deg); /* Rotate for 'up' arrow */
        }
        .arrow {
            display: inline-block;
            width: 0; 
            height: 0; 
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 15px solid #333; /* Downward arrow */
            transition: transform 0.3s ease;
        }

        .toggle-button.active .arrow {
            transform: rotate(180deg); /* Rotate for upward arrow */
        }







        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .text-primary {
            color: #007bff;
        }

        .text-secondary {
            color: #6c757d;
        }

        .text-muted {
            color: #adb5bd;
        }

        #umkm-container {
            padding: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .rounded {
            border-radius: 10px;
        }

        .shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }






        .struktur-aparatur {
        text-align: center;
        margin: 20px;
        }

        .foto-utama img {
        width: 100%;
        height: auto;
        max-width: 800px;
        border-radius: 10px;
        margin-bottom: 30px; /* Jarak antara diagram dan daftar anggota */
        }

        .list-aparatur {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        }

        .aparatur-item {
        text-align: center;
        max-width: 200px;
        margin-bottom: 20px;
        }

        .aparatur-foto {
        width: 100%;
        height: auto;
        border-radius: 10px;
        }

        .nama {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
        }

        .posisi {
        font-size: 16px;
        color: gray;
        }


        .modal-backdrop {
            z-index: 1040 !important;
        }

        .modal {
            z-index: 1050 !important;
        }
        .modal {
            max-height: 90vh; /* Modal maksimum 90% tinggi layar */
            overflow-y: auto;
        }




    </style>
</head>
<body>
    <header class="bg-light border-bottom">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <img src="logo.png" alt="Logo Kabupaten Sukoharjo" height="50">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sejarah">Sejarah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#geografis">Geografis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#struktur">Struktur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#keuangan">Keuangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#umkm">UMKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#peninggalan">Peninggalan</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Peninggalan</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#lambang">Lambang</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div id="heroCarousel" class="carousel slide hero" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/logoskh.png') }}" alt="Hero Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/sejarah1.png') }}" alt="Hero Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/sepikul1.jpg') }}" alt="Hero Image 1">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    </div>
    
    <main>
    <div id="berita" class="container my-4">
    <!-- <h2 class="text-center mb-4">Informasi Terbaru dan Publikasi Kegiatan</h2> -->
    <h2 class="text-center mb-4 text-primary">Informasi Terbaru</h2>
    <div class="d-flex overflow-auto gap-3">
        @forelse ($beritas as $berita)
            <!-- Card Berita -->
            <div class="card flex-shrink-0" style="width: 18rem;">
                <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}" class="card-img-top" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->judul }}</h5>
                    <p class="card-text text-truncate" title="{{ $berita->konten }}">
                        {{ Str::limit($berita->konten, 150) }}
                    </p>
                    <p class="text-muted"><small>{{ $berita->tanggal }}</small></p>
                    <!-- Tombol Baca Selengkapnya -->
                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalBerita{{ $berita->id }}">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Modal Berita dengan Scroll -->
            <div class="modal fade overflow-hidden" id="modalBerita{{ $berita->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $berita->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel{{ $berita->id }}">{{ $berita->judul }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="{{ $berita->judul }}" class="img-fluid mb-3">
                            <p>{{ $berita->konten }}</p>
                            <p class="text-muted"><small>{{ $berita->tanggal }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">Tidak ada berita terbaru.</p>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-3 d-flex justify-content-center">
        {{ $beritas->links('pagination::bootstrap-4') }}
    </div>
</div>

    </div>
        <div id="sejarah" class="container-fluid my-5 px-5">
            <h2 class="text-center mb-4 text-primary">Sejarah Kami</h2>
            @foreach ($sejarah as $item)
                <div class="sejarah-item mb-5 p-4 position-relative">
                    <!-- <div class="sejarah-header text-center">
                        <h4 class="text-dark fw-bold">{{ $item->judul }}</h4>
                        <span class="badge bg-primary text-white">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                    </div> -->
                    <!-- <div class="sejarah-image text-center my-4">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Sejarah" class="img-fluid">
                    </div> -->
                    <div class="sejarah-item">
                        <div class="sejarah-image">
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Sejarah">
                        </div>
                        <div class="sejarah-text short-text">
                            {{ $item->deskripsi }}
                        </div>
                        <!-- <div class="sejarah-header">
                            <h2>{{ $item->tanggal }}</h2>
                        </div> -->
                        <button class="toggle-button" onclick="toggleText(this)">
                            <span class="arrow-v">V</span>
                        </button>
                        
                    </div>

                </div>
            @endforeach
        </div>

        <!-- <div id="content" class="container-fluid my-5 px-5">
            <h2 class="text-center mb-4 text-primary">Geografis</h2>
            @foreach ($geografis as $item)
                <div class="sejarah-item mb-5 p-4 position-relative"></div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="Geografis">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->tanggal }}</h5>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> -->


        <div id="geografis" class="container-fluid my-5 px-5">
            <h2 class="text-center mb-4 text-primary">Geografis</h2>
            <div class="row">
                @foreach ($geografis as $item)
                        <div class="sejarah-item mb-5 p-4 position-relative">
                            <div class="sejarah-image text-center my-4">
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Geografis" class="img-fluid">
                            </div>
                            <div class="sejarah-text short-text">
                                {{ $item->deskripsi }}
                            </div>
                            <!-- <div class="sejarah-header text-center mt-3">
                                <h4 class="text-dark fw-bold">{{ $item->judul }}</h4>
                                <span class="badge bg-primary text-white">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </span>
                            </div> -->
                            <button class="toggle-button" onclick="toggleText(this)">
                                <span class="arrow-v">V</span>
                            </button>
                            
                        </div>
                @endforeach
            </div>
        </div>

        <div id="struktur" class="container-fluid my-5 px-5">
            <h2 class="text-center mb-4 text-primary">Struktur Aparatur</h2>
            <!-- <p class="card-text">Berikut adalah struktur organisasi pemerintah Kabupaten Sukoharjo:</p> -->
            <div class="struktur-aparatur">
                <!-- Foto Utama (Diagram) -->
                <div class="foto-utama">
                    <img src="{{ asset('image/sepikul1.jpg') }}" alt="Diagram Aparatur">
                </div>
                
                <!-- Daftar Anggota Aparatur -->
                <div class="list-aparatur">
                    @if($aparatur->isEmpty())
                        <p>Tidak ada data aparatur.</p>
                    @else
                        @foreach($aparatur as $item)
                            <div class="aparatur-item">
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto {{ $item->nama }}" class="aparatur-foto">
                                <p class="nama">{{ $item->nama }}</p>
                                <p class="posisi">{{ $item->posisi }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>


        <!-- <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Informasi Keuangan Desa</h2>
                            Foto
                            Kategori
                            Jumlah
                            Deskripsi
                            Tanggal
                    <tbody>
                        @foreach ($keuangans as $keuangan)
                            <tr>
                                <td>
                                    @if ($keuangan->foto)
                                        <img src="{{ asset('storage/' . $keuangan->foto) }}" class="img-fluid" alt="Foto Keuangan" style="max-height: 100px;">
                                    @else
                                        Tidak ada foto
                                    @endif
                                </td>
                                <td>{{ $keuangan->kategori }}</td>
                                <td>Rp {{ number_format($keuangan->jumlah, 2) }}</td>
                                <td>{{ $keuangan->deskripsi }}</td>
                                <td>{{ $keuangan->tanggal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> -->




        <div id="keuangan" class="container-fluid my-5 px-5">
            <h2 class="text-center mb-4 text-primary">Informasi Keuangan Desa</h2>
            <div class="row">
                @foreach ($keuangans as $keuangan)
                <div class="col-12 mb-5">
                    <!-- Kontainer untuk setiap item -->
                    <div class="keuangan-item position-relative">
                        <!-- Gambar -->
                        <div class="keuangan-image text-center">
                            @if ($keuangan->foto)
                            <img src="{{ asset('storage/' . $keuangan->foto) }}" 
                                alt="Foto Keuangan" 
                                class="rounded" 
                                style="max-width: 100%; height: auto; border-radius: 20px;">
                            @else
                            <div class="text-center text-muted rounded" 
                                style="height: 200px; display: flex; justify-content: center; align-items: center; border-radius: 20px; background-color: #f8f9fa;">
                                Tidak ada foto
                            </div>
                            @endif
                        </div>

                        <!-- Teks di bawah gambar -->
                        <div class="keuangan-text mt-3">
                            <p class="mb-2">{{ $keuangan->deskripsi }}</p>
                            <small class="text-muted">{{ $keuangan->tanggal }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>



        <div id="umkm" class="umkm my-4">
            <div class="card mb-4">
                <div class="card-body">
                <!-- <h2 class="text-center mb-4 text-primary">Struktur Aparatur</h2> -->
                    <!-- <img src="{{ asset('image/produk-umkm.png') }}" class="img-fluid d-block mx-auto mb-4" alt="Produk UMKM"> -->
                    <!-- <h3 class="mt-4 text-center">Daftar UMKM</h3> -->
                    <h2 class="text-center mb-4 text-primary">Daftar UMKM</h2>
                    @if ($umkms->isEmpty())
                        <p class="text-center">Tidak ada UMKM yang tersedia saat ini.</p>
                    @else
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($umkms->take(6) as $umkm)
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card-img-top text-center p-3">
                                            @if ($umkm->foto)
                                                <img src="{{ asset('storage/' . $umkm->foto) }}" class="img-fluid" alt="Foto UMKM" style="max-height: 200px; object-fit: cover;">
                                            @else
                                                <img src="{{ asset('image/default-umkm.png') }}" class="img-fluid" alt="Foto UMKM" style="max-height: 200px; object-fit: cover;">
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $umkm->nama_usaha }}</h5>
                                            <p><strong>Pemilik:</strong> {{ $umkm->pemilik }}</p>
                                            <p><strong>Kategori:</strong> {{ $umkm->kategori }}</p>
                                            <p><strong>Lokasi:</strong> {{ $umkm->lokasi }}</p>
                                            <p><strong>Kontak:</strong> {{ $umkm->kontak }}</p>
                                            <p class="text-truncate">{{ $umkm->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div id="peninggalan" class="container my-4">
    <div class="card mb-4">
        <div class="card-body">
            <!-- <h2 class="card-title text-center">Wisata Kabupaten Sukoharjo</h2>
            <h3 class="text-center">Destinasi Pilihan</h3>
            <img src="{{ asset('image/wisata.png') }}" class="img-fluid d-block mx-auto mb-4" alt="Wisata Sukoharjo">
            <h3 class="mt-4 text-center">Daftar Wisata</h3> -->
            <h2 class="text-center mb-4 text-primary">Daftar Peninggalan</h2>
            @if ($wisatas->isEmpty())
                <p class="text-center">Tidak ada destinasi wisata yang tersedia saat ini.</p>
            @else
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($wisatas as $wisata)
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-img-top text-center p-3">
                                    @if ($wisata->foto)
                                        <img src="{{ asset('storage/' . $wisata->foto) }}" class="img-fluid" alt="Foto Wisata" style="max-height: 200px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('image/default-wisata.png') }}" class="img-fluid" alt="Foto Wisata" style="max-height: 200px; object-fit: cover;">
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $wisata->nama }}</h5>
                                    <p><strong>Lokasi:</strong> {{ $wisata->lokasi }}</p>
                                    <p><strong>Jenis Wisata:</strong> {{ $wisata->jenis_wisata ?? '-' }}</p>
                                    <p><strong>Rating:</strong> {{ $wisata->rating ?? '-' }}/5</p>
                                    <p><strong>Jam Operasional:</strong> {{ $wisata->jam_operasional ?? '-' }}</p>
                                    <p class="text-truncate">{{ $wisata->deskripsi }}</p>
                                    <a href="{{ $wisata->link_peta }}" target="_blank" class="btn btn-primary w-100 mt-2">Lihat di Peta</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

    <footer class="bg-dark text-white py-3 mt-5">
        <p class="text-center">&copy; 2024 Kabupaten Sukoharjo. All rights reserved.</p>
    </footer>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButtons = document.querySelectorAll(".toggle-btn");
            
            toggleButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    
                    const id = this.getAttribute("data-id");
                    const textContainer = document.getElementById(`text-${id}`);
                    const shortText = textContainer.querySelector(".short-text");
                    const fullText = textContainer.querySelector(".full-text");

                    if (fullText.classList.contains("d-none")) {
                        // Tampilkan teks lengkap
                        shortText.classList.add("d-none");
                        fullText.classList.remove("d-none");
                        this.innerHTML = '<i class="bi bi-chevron-up">ʌ</i>';
                    } else {
                        // Sembunyikan teks lengkap
                        fullText.classList.add("d-none");
                        shortText.classList.remove("d-none");
                        this.innerHTML = '<i class="bi bi-chevron-down">v</i>';
                    }
                });
            });
        });
            function toggleText(button) {
            const textDiv = button.previousElementSibling;
            textDiv.classList.toggle('expanded');
            button.classList.toggle('active');
        }
        
        </script>
    </body>
</html>
