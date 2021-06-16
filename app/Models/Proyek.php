<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $guard = [];
    protected $fillable = ['judul_proyek','tahun','deskripsi_proyek','id_kategori','link_proyek','image','jenis_proyek'];
    use HasFactory;
}
