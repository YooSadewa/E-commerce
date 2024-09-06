<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_barang')->insert([
            'nama_barang'=>'Rizky A',
            'harga_barang'=>'123',
            'stok'=>'123',
            'deskripsi_barang'=>'thajsjsj',
            'kategori'=>'mouse',
        ]);
    }
}
