<!-- resources/views/admin/umkm/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah UMKM</title>
</head>
<body>
    <h1>Tambah UMKM</h1>
    <!-- Make sure the form uses the correct route for creating a new UMKM -->
    <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama_usaha">Nama Usaha:</label>
            <input type="text" name="nama_usaha" id="nama_usaha" required>
        </div>
        <div>
            <label for="pemilik">Pemilik:</label>
            <input type="text" name="pemilik" id="pemilik" required>
        </div>
        <div>
            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" id="kategori" required>
        </div>
        <div>
            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" id="lokasi" required>
        </div>
        <div>
            <label for="kontak">Kontak:</label>
            <input type="text" name="kontak" id="kontak" required>
        </div>
        <div>
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" required></textarea>
        </div>
        <div>
            <label for="foto">Foto:</label>
            <input type="file" name="foto" id="foto">
        </div>
        <div>
            <button type="submit">Tambah UMKM</button>
        </div>
    </form>
</body>
</html>
