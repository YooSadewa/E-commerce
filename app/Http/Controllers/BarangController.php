<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('admin.infoproduct', compact('barangs')); // Update view to use infoproduct
    }
    
    public function create()
    {
        return view('admin.tambah'); // Adjust if necessary
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
        if ($request->hasFile('foto_utama')) {
            $fotoUtamaPath = $request->file('foto_utama')->store('barang_images', 'public');
        }
    
        Barang::create([
            'nama_barang' => $validated['nama_barang'],
            'harga_barang' => $validated['harga_barang'],
            'stok' => $validated['stok'],
            'deskripsi_barang' => $validated['deskripsi_barang'],
            'kategori' => $validated['kategori'],
            'foto_utama' => $fotoUtamaPath,
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
            'kategori' => 'nullable',
            'foto_utama' => 'nullable|file'
        ]);
    
        if ($request->hasFile('foto_utama')) {
            if ($barang->foto_utama) {
                Storage::delete('public/' . $barang->foto_utama);
            }
    
            $fotoUtamaPath = $request->file('foto_utama')->store('barang_images', 'public');
            $barang->foto_utama = $fotoUtamaPath;
        }
    
        $barang->nama_barang = $validated['nama_barang'];
        $barang->harga_barang = $validated['harga_barang'];
        $barang->stok = $validated['stok'];
        $barang->deskripsi_barang = $validated['deskripsi_barang'];
    
        $barang->save();
    
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate.');
    }
    
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
    
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
