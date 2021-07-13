<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PilihAnggota as Anggota;
use App\Models\Proyek as ProyekModel;
use App\Models\Mahasiswa as MahasiswaModel;
use App\Models\Dosen as DosenModel;
use Illuminate\Support\Facades\DB;


class PilihAnggota extends Component
{
    public $id_proyek, $id_dosen;
    public $id_mahasiswa;
    public $anggota;


    public function render()
    {
        $proyek = ProyekModel::get();
        $mahasiswa = DB::table('mahasiswa')
        ->join('users', 'mahasiswa.id_users', '=', 'users.id')
        ->get();
        $dosen = DB::table('dosen')
        ->join('users', 'dosen.id_users', '=', 'users.id')
        ->get();
    
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
