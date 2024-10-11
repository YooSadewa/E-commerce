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
    
    public function showCategory($category)
    {
        $barangs = DB::table('tb_barang')->where('kategori', $category)->get();
        return view('category', compact('barangs', 'category'));
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
        $barang = Barang::findOrFail($id);
    
        $validated = $request->validate([
            'nama_barang' => 'required|unique:tb_barang,nama_barang,' . $id . ',id_barang',
            'harga_barang' => 'required',
            'stok' => 'required|integer',
            'deskripsi_barang' => 'required',
            'kategori' => 'required',
            'foto_utama' => 'nullable|file'
        ]);

        // Update the image if a new one is uploaded
        if ($request->hasFile('foto_utama')) {
            // Delete the old image if it exists
            if ($barang->foto_utama) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $barang->foto_utama));
            }

            $file = $request->file('foto_utama');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('barang_images', $fileName, 'public');
            $barang->foto_utama = '/storage/' . $filePath;
        }

        // Update the product data
        $barang->nama_barang = $validated['nama_barang'];
        $barang->harga_barang = $validated['harga_barang'];
        $barang->stok = $validated['stok'];
        $barang->deskripsi_barang = $validated['deskripsi_barang'];
        $barang->kategori = $validated['kategori'];
        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
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
