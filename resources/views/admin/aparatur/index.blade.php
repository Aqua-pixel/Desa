<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Aparatur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Aparatur</h1>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <a href="{{ route('admin.aparatur.create') }}" class="btn btn-primary mb-3">Tambah Aparatur</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aparatur as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" width="50">

                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->posisi }}</td>
                    <td>
                        <a href="{{ route('admin.aparatur.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.aparatur.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $aparatur->links() }}
    </div>
</body>
</html>
