<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'nama_admin' => 'Admin Name',
            'username' => 'adminuser',
            'password' => Hash::make('password123'),
            'email' => 'admin@example.com',
            'telp' => '1234567890'
        ]);
    }
}