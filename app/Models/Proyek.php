<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $guard = [];
    protected $fillable = ['image','judul_proyek','tahun','deskripsi_proyek','jenis_proyek','id_kategori','link_proyek'];
    use HasFactory;

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
