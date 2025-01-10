<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit UMKM</title>
</head>
<body>
    <h1>Edit UMKM</h1>
    <form action="{{ route('admin.umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="nama_usaha">Nama Usaha:</label>
            <input type="text" name="nama_usaha" id="nama_usaha" value="{{ $umkm->nama_usaha }}" required>
        </div>
        <div>
            <label for="pemilik">Pemilik:</label>
            <input type="text" name="pemilik" id="pemilik" value="{{ $umkm->pemilik }}" required>
        </div>
        <div>
            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" id="kategori" value="{{ $umkm->kategori }}" required>
        </div>
        <div>
            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" id="lokasi" value="{{ $umkm->lokasi }}" required>
        </div>
        <div>
            <label for="kontak">Kontak:</label>
            <input type="text" name="kontak" id="kontak" value="{{ $umkm->kontak }}" required>
        </div>
        <div>
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" required>{{ $umkm->deskripsi }}</textarea>
        </div>
        <div>
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto">
            @if ($umkm->foto)
            <img src="{{ asset('storage/' . $umkm->foto) }}" alt="Foto UMKM" width="100">
            @endif
        </div>
        <button type="submit">Update</button>
        <a href="{{ route('admin.umkm.index') }}">Batal</a>
    </form>
</body>
</html>
