<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilihanggota extends Model
{
    protected $table = 'anggota';
    protected $guard = [];
    protected $fillable = ['id_dosen','id_mahasiswa','id_proyek'];
    use HasFactory;
}
