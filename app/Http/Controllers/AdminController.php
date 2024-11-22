<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        $admin = Admin::find(session('id_admin'));
        
        if (!$admin) {
            return redirect()->route('admin.login')->with('error', 'Admin tidak ditemukan');
        }
    
        return view('admin.profileadmin', compact('admin'));
    }

    public function index()
    {
        $admins = Admin::all();
        return view('admin.profileadmin', compact('admins'));
    }

    public function edit($id)
    {
        $admin = Admin::where('id_admin', $id)->first();
        return view('admin.editprofile', compact('admin'));
    }

    public function editPass($id)
    {
        $admin = Admin::where('id_admin', $id)->first();
        return view('admin.editpass', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input termasuk foto_admin
        $validated = $request->validate([
            'nama_admin' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'telp' => 'required|integer',
            'foto_admin' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi foto admin
        ]);

        // Cek apakah ada data yang sama (kecuali data yang sedang diedit)
        $exists = Admin::where('nama_admin', $request->nama_admin)
            ->where('username', $request->username)
            ->where('email', $request->email)
            ->where('telp', $request->telp)
            ->where('id_admin', '!=', $id) // mengecualikan data yang sedang di-edit
            ->exists();

        // Jika kombinasi sudah ada, kembalikan dengan error
        if ($exists) {
            return redirect()->route('welcomeadmin')->withErrors(['duplicate' => 'Data sudah ada.']);
        }

        // Cari admin yang akan di-update berdasarkan id_admin
        $admin = Admin::where('id_admin', $id)->firstOrFail();

        // Jika ada file foto yang diunggah, proses foto_admin
        if ($request->hasFile('foto_admin')) {
            // Hapus foto lama jika ada
            if ($admin->foto_admin && file_exists(public_path('uploads/' . $admin->foto_admin))) {
                unlink(public_path('uploads/' . $admin->foto_admin));
            }

            // Simpan foto baru
            $file = $request->file('foto_admin');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);

            // Simpan nama file ke dalam validasi data
            $validated['foto_admin'] = $filename;
        }

        // Update admin dengan data dari form
        $admin->update($validated);

        // Redirect ke halaman welcome dengan pesan sukses
        return redirect()->route('welcomeadmin')->with('Success', 'Data Berhasil Diperbarui');
    }

    public function updatePass(Request $request, $id)
    {
        // Validasi form
        $request->validate([
            'password' => 'required',
            'email' => 'required|email',
            'new_password' => 'required|confirmed|min:8', // add confirmation rule
        ]);

        $admin = Admin::find($id);

        if (!$admin) {
            return back()->withErrors(['email' => 'Admin tidak ditemukan.']);
        }

        // Verifikasi email
        if ($request->email !== $admin->email) {
            return back()->withErrors(['email' => 'Email tidak sesuai dengan yang terdaftar di akun ini.']);
        }

        // Verifikasi password saat ini
        if ($request->password !== $admin->password) {
            return back()->withErrors(['password' => 'Password saat ini salah.']);
        }

        // Update password dengan password baru
        $admin->password = $request->new_password;

        if ($admin->save()) {
            return redirect()->route('admin.profile')->with('success', 'Password berhasil diperbarui.');
        } else {
            return back()->withErrors(['error' => 'Gagal memperbarui password. Silakan coba lagi.']);
        }
    }

    public function showLoginForm()
    {
        return view('admin.loginadmin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Check admin by username and password without hashing
        $admin = Admin::where('username', $request->username)
                      ->where('password', $request->password)
                      ->first();

        if ($admin) {
            // Successful login
            Session::put('id_admin', $admin->id_admin);
            Session::put('admin_name', $admin->nama_admin);

            return redirect()->route('welcomeadmin')->with('success', 'Login successful');
        }

        // Failed login
        return back()->withErrors([
            'username' => 'Invalid credentials'
        ])->withInput($request->only('username'));
    }

    public function logout()
    {
        Session::flush();

        return redirect()->route('loginadmin')->with('success', 'Logged out successfully');
    }

    public function indexAbout()
    {
        return view('about');
    }

    public function indexKontak()
    {
        return view('kontak');
    }
}
