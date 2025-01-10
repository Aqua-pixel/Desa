<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aparatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AparaturController extends Controller
{
    public function index()
    {
        // Gunakan paginate() untuk mendukung links()
        $aparatur = Aparatur::paginate(10); // Sesuaikan jumlah item per halaman


        // $aparatur = Aparatur::all(); // Ambil semua data aparatur
        return view('admin.aparatur.index', compact('aparatur'));
    }


    public function create()
    {
        return view('admin.aparatur.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto wajib diisi
        ]);

        // Simpan file foto
        if ($request->hasFile('foto')) {
            // Simpan foto ke dalam folder `storage/app/public/photos`
            $filename = $request->file('foto')->store('photos', 'public');
            $validatedData['foto'] = $filename; // Menyimpan path ke database
        }

        // Simpan data ke dalam database
        Aparatur::create($validatedData);

        // Redirect setelah data berhasil disimpan
        return redirect()->route('admin.aparatur.index')->with('success', 'Data aparatur berhasil disimpan.');
    }

    public function edit(Aparatur $aparatur)
    {
        return view('admin.aparatur.edit', compact('aparatur'));
    }

    public function update(Request $request, Aparatur $aparatur)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto opsional saat update
        ]);

        // Periksa apakah ada file foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($aparatur->foto) {
                Storage::disk('public')->delete($aparatur->foto);
            }

            // Simpan foto baru
            $filename = $request->file('foto')->store('photos', 'public');
            $validated['foto'] = $filename;
        }

        // Perbarui data aparatur
        $aparatur->update($validated);

        return redirect()->route('admin.aparatur.index')->with('success', 'Aparatur berhasil diperbarui!');
    }

    public function destroy(Aparatur $aparatur)
    {
        // Hapus file foto dari storage jika ada
        if ($aparatur->foto) {
            Storage::disk('public')->delete($aparatur->foto);
        }

        // Hapus data dari database
        $aparatur->delete();

        return redirect()->route('admin.aparatur.index')->with('success', 'Aparatur berhasil dihapus!');
    }
}
