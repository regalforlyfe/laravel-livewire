<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $guard = [];
    protected $fillable = ['id_user','nama','nidn','prodi','foto_profil','alamat','no_hp','instagram'];
    use HasFactory;
}
