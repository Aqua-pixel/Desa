<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar UMKM</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        img { max-width: 100px; }
        a { margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Daftar UMKM</h1>
    <a href="{{ route('admin.umkm.create') }}">Tambah UMKM</a>
    <table>
        <thead>
            <tr>
                <th>Nama Usaha</th>
                <th>Pemilik</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Kontak</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($umkms as $umkm)
            <tr>
                <td>{{ $umkm->nama_usaha }}</td>
                <td>{{ $umkm->pemilik }}</td>
                <td>{{ $umkm->kategori }}</td>
                <td>{{ $umkm->lokasi }}</td>
                <td>{{ $umkm->kontak }}</td>
                <td>
                    @if ($umkm->foto)
                    <img src="{{ asset('storage/' . $umkm->foto) }}" alt="Foto UMKM">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.umkm.edit', $umkm->id) }}">Edit</a>
                    <form action="{{ route('admin.umkm.destroy', $umkm->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Hapus UMKM?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
