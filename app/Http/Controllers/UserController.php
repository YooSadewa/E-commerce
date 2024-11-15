<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
// Show the login form
public function showLoginForm()
{
    return view('login');
}

// Handle login request
public function login(Request $request)
{
    // Validate the input
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    // Retrieve the user based on the username
    $user = User::where('username', $request->username)->first();

    // Check if the user exists and if the password matches as plain text
    if ($user && $user->password === $request->password) {
        Auth::login($user);
        return redirect()->route('welcome'); // Redirect to the home page or desired route
    } else {
        // Return with error if credentials are incorrect
        return back()->withErrors(['username' => 'Username or Password Incorrect'])->withInput();
    }
}

// Handle logout
public function logout()
{
    Auth::logout();
    return redirect()->route('login');
}

public function profile()
{
    $user = Auth::user();  // Get the logged-in user
    return view('profile.profile', compact('user'));  // Pass the logged-in user to the view
}
 
public function show($id)
{
    $user = User::find($id);  // Find the user by ID
    if (!$user) {
        return redirect()->route('home')->with('error', 'User not found');
    }
    return view('profile.show', compact('user'));  
}

    /**
     * Show the form to edit the user profile.
     */
    public function edit($id)
    {
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        return view('profile.edit', compact('user'));
    }

    /**
     * Update the user profile.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // Validate the user input
        $request->validate([
            'nama_user' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:tb_user,username,' . $id,
            'email' => 'required|email|max:255|unique:tb_user,email,' . $id,
            'telp' => 'nullable|string|max:20',
            'lokasi' => 'nullable|string|max:255',
            'foto_user' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // Update user data
        $user->nama_user = $request->nama_user;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->telp = $request->telp;
        $user->lokasi = $request->lokasi;

        // Handle file upload for profile picture
        if ($request->hasFile('foto_user')) {
            // Delete old photo if exists
            if ($user->foto_user && Storage::exists($user->foto_user)) {
                Storage::delete($user->foto_user);
            }

            // Store the new image
            $path = $request->file('foto_user')->store('uploads', 'public');
            $user->foto_user = $path;
        }

        $user->save();

        return redirect()->route('user.show', $user->id_user)->with('success', 'Profile updated successfully');
    }

    /**
     * Show the form to edit the user password.
     */
    public function editPassword($id)
    {
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        return view('profile.edit-password', compact('user'));
    }

    /**
     * Update the user password.
     */
    public function updatePassword(Request $request, $id)
    {
        $user = User::find($id);

        // Validate the password input
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check if current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('user.show', $user->id_user)->with('success', 'Password updated successfully');
    }

    /**
     * Show the form to change the user location.
     */
    public function editLocation($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        return view('profile.edit-location', compact('user'));
    }

    /**
     * Update the user location.
     */
    public function updateLocation(Request $request, $id)
    {
        $user = User::find($id);

        // Validate the location input
        $request->validate([
            'lokasi' => 'required|string|max:255',
        ]);

        // Update location in the database
        $user->lokasi = $request->lokasi;
        $user->save();

        return redirect()->route('user.show', $user->id_user)->with('success', 'Location updated successfully');
    }
}
