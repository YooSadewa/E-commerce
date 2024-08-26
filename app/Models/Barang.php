<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Menghubungkan model dengan tabel 'tb_barang'
    protected $table = 'tb_barang';

    // Menggunakan primary key 'id_barang'
    protected $primaryKey = 'id_barang';

    // Primary key auto-increment
    public $incrementing = true;

    // Tipe data primary key
    protected $keyType = 'int';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'stok',
        'deskripsi_barang',
        'kategori',
        'foto_utama',
    ];

    // Timestamps
    public $timestamps = true;
}
