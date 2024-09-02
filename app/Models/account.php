<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    // Specify the table name if it's different from the model name
    protected $table = 'account';

    // Specify the primary key if it's different from the default 'id'
    protected $primaryKey = 'id_akun';
    
    public $incrementing = true;
    // Specify the fields that are mass-assignable
    protected $fillable = [
        'nama',
        'email',
        'password',
        'alamat',
        'level',
        'foto_profil',
        'no_telp', // Added based on the controller logic
        'birthdate' // Added if you're storing birthdate
    ];

    // Disable timestamps if you don't want created_at and updated_at
    public $timestamps = true;

    // You can add any relationships or custom methods below
}
