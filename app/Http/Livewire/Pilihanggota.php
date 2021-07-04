<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PilihAnggota as Anggota;
use App\Models\Proyek as ProyekModel;
use App\Models\Mahasiswa as MahasiswaModel;
use App\Models\Dosen as DosenModel;

class PilihAnggota extends Component
{
    public $id_proyek, $id_dosen, $id_mahasiswa, $id_mahasiswa1, $id_mahasiswa2, $id_mahasiswa3, $id_mahasiswa4, $id_mahasiswa5, $id_mahasiswa6, $id_mahasiswa7, $id_mahasiswa8, $id_mahasiswa9, $id_mahasiswa10;

    public function render()
    {
        $proyek = ProyekModel::get();
        $mahasiswa = MahasiswaModel::get();
        $dosen = DosenModel::get();
        //dd($id_proyek);
        return view('livewire.pilih-anggota', [
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen,
            'proyek' => $proyek,
        ]);
    }

    public function store()
    {
            Anggota::create([
                'id_proyek' => $this->id_proyek,
                'id_dosen' => $this->id_dosen,
                'id_mahasiswa' => $this->id_mahasiswa,
            ]);

            return redirect('/profil');
    }
}

