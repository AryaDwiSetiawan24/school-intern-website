<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nisn',
        'nama',
        'jenis_kelamin',
        'kelas',
        'foto',
    ];

    protected $casts = [
        'jenis_kelamin' => 'string', 
    ];
}
