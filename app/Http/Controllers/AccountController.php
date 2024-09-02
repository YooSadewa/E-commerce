<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account; // Assuming you have an Account model
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class AccountController extends Controller
{
    // Show the profile page
    public function index()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('profile.index', compact('user'));
    }

    // Show the profile update form
    public function edit()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('profile.edit', compact('user'));
    }

    // Handle the profile update
    public function update(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        // Validate the request data
        $request->validate([
            'username' => 'required|string|max:255',
            'no_telp' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255',
            'birthdate' => 'nullable|date',
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional, only if you want to allow profile picture updates
        ]);

        // Update the user's profile
        $user->update([
            'nama' => $request->input('username'),
            'no_telp' => $request->input('no_telp'),
            'email' => $request->input('email'),
            'birthdate' => $request->input('birthdate'),
        ]);

        // Handle profile picture update (if provided)
        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $path = $file->store('profile_pictures', 'public');
            $user->update(['foto_profil' => $path]);
        }

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    // Optional: Handle password update
    public function updatePassword(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        // Validate the password update request
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check if the current password is correct
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        $user->update(['password' => Hash::make($request->input('new_password'))]);

        return redirect()->route('profile.index')->with('success', 'Password updated successfully.');
    }
}
