<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_admin')->insert([
            'nama_admin'=>'Rizky A',
            'username'=>'123',
            'password'=>'123',
            'email'=>'thy@gmail.com',
            'telp'=>'22222'
        ]);
    }
}
