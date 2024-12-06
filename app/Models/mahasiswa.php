<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim', 'jurusan', 'nama_lengkap', 'tanggal_lahir', 
        'tempat_lahir', 'hobi', 'alamat', 'foto'
    ];
}
