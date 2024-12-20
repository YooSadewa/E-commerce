<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        // Mengambil semua barang dari database
        $barangs = Barang::all();

        return view('welcomeadmin', compact('barangs')); // Ganti 'your_view_name' dengan nama view yang sesuai
    }

    public function indexUser()
    {
        // Mengambil semua barang dari database
        $barangs = Barang::all(); 

        return view('welcome', compact('barangs')); // Ganti 'your_view_name' dengan nama view yang sesuai
    }
    
    public function showCategory($category)
    {
        $barangs = DB::table('tb_barang')->where('kategori', $category)->get();
        return view('category', compact('barangs', 'category'));
    }

    public function showCategoryUser($category)
    {
        $barangs = DB::table('tb_barang')->where('kategori', $category)->get();
        return view('categoryuser', compact('barangs', 'category'));
    }

    public function indexSearch(Request $request)
    {
        $search = $request->input('search'); // Mendapatkan input pencarian

        // Mencari produk berdasarkan nama
        $barangs = Barang::where('nama_barang', 'LIKE', '%' . $search . '%')->get();

        return view('search', compact('barangs', 'search')); // Mengirim $barangs dan $search ke view
    }


    public function show($id_barang)
    {
        $barang = DB::table('tb_barang')->where('id_barang', $id_barang)->first();

        // Tampilkan ke view infoproduct.blade.php
        return view('admin.infoproduct', ['barang' => $barang]);
    }

    public function showuser($id_barang)
    {
        $barang = DB::table('tb_barang')->where('id_barang', $id_barang)->first();

        // Tampilkan ke view infoproduct.blade.php
        return view('barang.infoproduct', ['barang' => $barang]);
    }

    public function create()
    {
        return view('barang.tambah'); // Adjust if necessary
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|unique:tb_barang',
            'harga_barang' => 'required',
            'stok' => 'required|integer',
            'deskripsi_barang' => 'required',
            'kategori' => 'required',
            'foto_utama' => 'nullable|file'
        ]);

        $fotoUtamaPath = null;

        // Check if the file was uploaded
        if ($request->hasFile('foto_utama')) {
            $file = $request->file('foto_utama');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('barang_images', $fileName, 'public');  // Ubah 'uploads/products' menjadi 'barang_images'
            $fotoUtamaPath = '/storage/' . $filePath;
        }

        // Save the product data
        Barang::create([
            'nama_barang' => $validated['nama_barang'],
            'harga_barang' => $validated['harga_barang'],
            'stok' => $validated['stok'],
            'deskripsi_barang' => $validated['deskripsi_barang'],
            'kategori' => $validated['kategori'],
            'foto_utama' => $fotoUtamaPath, // Save the image path or null
        ]);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga_barang' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi_barang' => 'nullable|string',
            'kategori' => 'nullable|string|max:100',
            'foto_utama' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the barang
        $barang = Barang::findOrFail($id);

        // Handle file upload for foto_utama
        if ($request->hasFile('foto_utama')) {
            // Delete old image if exists
            if ($barang->foto_utama && Storage::exists($barang->foto_utama)) {
                Storage::delete($barang->foto_utama);
            }

            // Store new image
            $fotoPath = $request->file('foto_utama')->store('barang_images', 'public');
            $validatedData['foto_utama'] = $fotoPath;
        }

        // Update the barang
        $barang->update($validatedData);

        // Redirect with success message
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);

        // Delete the image if it exists
        if ($barang->foto_utama) {
            Storage::disk('public')->delete(str_replace('/storage/', '', $barang->foto_utama));
        }

        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
