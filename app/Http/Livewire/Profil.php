<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyek as ProyekModel;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class Profil extends Component
{
    public function render()
    {
        $proyek = ProyekModel::orderBy('created_at')->get();
        $kategori = Kategori::get();
        $user = User::get();
        $mahasiswa = Mahasiswa::get();
        $dosen = Dosen::get();
        return view('livewire.profil', [
            'proyek' => $proyek,
            'user' => $user,
            'kategori' => $kategori,
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen,
        ]);
    }

}
