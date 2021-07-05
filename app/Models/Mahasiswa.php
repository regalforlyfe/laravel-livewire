<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $guard = [];
    protected $fillable = ['id_users','nama','nim','prodi','foto_profil','alamat','no_hp','instagram'];
    use HasFactory;
}
