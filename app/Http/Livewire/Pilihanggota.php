<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PilihAnggota as Anggota;
use App\Models\Proyek as ProyekModel;
use App\Models\Mahasiswa as MahasiswaModel;
use App\Models\Dosen as DosenModel;

class PilihAnggota extends Component
{
    public $id_proyek, $id_dosen;
    public $mahasiswa;
    public $anggota;


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
