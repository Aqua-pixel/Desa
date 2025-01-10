<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($keuangan) ? 'Edit' : 'Tambah' }} Keuangan Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">{{ isset($keuangan) ? 'Edit' : 'Tambah' }} Keuangan Desa</h1>
        <form 
            action="{{ isset($keuangan) ? route('admin.keuangan.update', $keuangan) : route('admin.keuangan.store') }}" 
            method="POST" 
            enctype="multipart/form-data" 
            class="p-4 bg-white rounded shadow-sm"
        >
            @csrf
            @if (isset($keuangan))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input 
                    type="file" 
                    id="foto" 
                    name="foto" 
                    class="form-control"
                    {{ isset($keuangan) ? '' : 'required' }}
                >
                @if (isset($keuangan) && $keuangan->foto)
                    <small class="text-muted">Foto saat ini:</small>
                    <div>
                        <img 
                            src="{{ asset('storage/' . $keuangan->foto) }}" 
                            alt="Foto {{ $keuangan->kategori }}" 
                            class="img-thumbnail mt-2" 
                            style="max-height: 150px;"
                        >
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-control" value="{{ $keuangan->kategori ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" class="form-control" step="0.01" value="{{ $keuangan->jumlah ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4">{{ $keuangan->deskripsi ?? '' }}</textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $keuangan->tanggal ?? '' }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
