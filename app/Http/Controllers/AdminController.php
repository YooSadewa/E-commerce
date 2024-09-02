<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index() {
        $admins = Admin::all();
        return view('admin.profile', compact('admins'));
    }

    public function edit(Admin $admin) {
        return view('admin.editprofile', compact('admin'));
    }

    public function update(Request $request, $id) {
        $admin = Admin::findOrFail($id);

        $validated = $request->validate([
            'username' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'foto_admin' => 'nullable|file'
        ]);

        if ($request->hasFile('foto_admin')) {
            if ($admin->foto_admin) {
                Storage::delete('public/' . $admin->foto_admin);
            }

            $fotoAdmin = $request->file('foto_admin')->store('admin_images', 'public');
            $admin->foto_admin = $fotoAdmin;
        }
        $admin->username = $validated['username'];
        $admin->telp = $validated['telp'];
        $admin->email = $validated['email'];
        
        $admin->save();

        return redirect()->route('admin.profile') -> with('success', 'Akun Berhasil Di Update');
    }

}
