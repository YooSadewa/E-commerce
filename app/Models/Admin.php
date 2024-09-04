<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
    use HasFactory;

    protected $table = 'tb_admin';

    // Menggunakan primary key 'id_barang'
    protected $primaryKey = 'id_admin';

    // Primary key auto-increment
    public $incrementing = true;

    // Tipe data primary key
    protected $keyType = 'int';

    // Kolom yang boleh diisi secara massal
    protected $fillable = [
        'nama_admin',
        'username',
        'password',
        'telp',
        'email',
        'foto_admin',
    ];

    // Timestamps
    public $timestamps = true;
}
