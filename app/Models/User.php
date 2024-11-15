<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_user';

    protected $primaryKey = 'id_user'; // Make sure to specify the correct primary key

    // The fields that are mass assignable
    protected $fillable = [
        'nama_user',
        'username',
        'password',
        'email',
        'lokasi',
        'telp',
        'foto_user',
    ];
}