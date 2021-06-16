<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Pilihanggota as Anggota;
use App\Models\Proyek;
use Illuminate\Http\Request;

class Pilihanggota extends Component
{
    public $id_proyek,$id_dosen,$id_mahasiswa,$id_mahasiswa1,$id_mahasiswa2,$id_mahasiswa3,$id_mahasiswa4,$id_mahasiswa5,$id_mahasiswa6,$id_mahasiswa7,$id_mahasiswa8,$id_mahasiswa9,$id_mahasiswa10;

    public function render()
    {
        $proyek = Proyek::get();
        $users = User::get();
        //dd($id_proyek);
        return view('livewire.pilihanggota', [
            'users' => $users,
            'proyek' => $proyek,
        ]);
    }

    public function edit($id_proyek){
        $proyek = Proyek::find($id_proyek);
        $users = User::get();
        //dd($id_proyek);
        return view('livewire.pilihanggota', [
            'users' => $users,
            'proyek' => $proyek,
        ]);
    }

    public function store(){
        dd($this);
        for($x = 1; $x <=10; $x++){

        Anggota::create([
            'id_proyek' => $this->id_proyek,
            'id_dosen' => $this->id_dosen,
            'id_mahasiswa' => $this->id_mahasiswa.$x,
        ]);

        };
        
        session()->flash('info','Anggota berhasil ditambahkan');
    }

}

