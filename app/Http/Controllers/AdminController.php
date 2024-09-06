<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;    // Tambahkan ini untuk DB
use Illuminate\Support\Facades\Hash; 
use App\Models\Admin;

class AdminController extends Controller
{
    public function show($id_admin)
    {
        $admin = Admin::findOrFail($id_admin); // Use findOrFail for better error handling
        return view('admin.show', compact('admin'));
    }

    public function profile()
    {
        $admins = Admin::all(); // Fetch all admins
        return view('admin.profile', compact('admins'));
    }


    public function index() {
        $admins = Admin::all();
        return view('admin.profile', compact('admins'));
    }    

    public function indexUpdate(Admin $admin) {
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

    public function indexlogin() {
        return view("loginadmin");
    }

    public function indexLoginUser() {
        return view("login");
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $admin = Admin::where('username', $request->username)
                      ->where('password', $request->password)
                      ->first();
    
        if ($admin) {
            // Simpan informasi admin ke session
            session(['admin_id' => $admin->id_admin]);
            return redirect()->route('welcomeadmin');
        } else {
            return redirect('/login')->withErrors("Username atau password salah");
        }
    }

    public function logout() {
        session()->forget('admin_id');
        return redirect()->route('welcomeadmin');
    }
    

}
