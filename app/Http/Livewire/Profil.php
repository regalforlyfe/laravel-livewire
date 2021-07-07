<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User as UserModel;
use App\Models\Kategori;
use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class Profil extends Component
{
    use WithFileUploads;
    
    public $statusProfil = false;

    public $image;

    public function render()
    {
        $kategori = Kategori::get();
        //$user = User::get();
         $user = DB::table('users')
        //->join('mahasiswa', 'users.id', '=', 'mahasiswa.id_users')
        ->join('mahasiswa', 'users.id', '=', 'mahasiswa.id_users')
        //     ->join('dosen', 'users.id', '=', 'dosen.id_users')
        ->get();
        $dosen = Dosen::get();
        return view('livewire.profil', [
            'kategori' => $kategori,
            'user' => $user,
            'dosen' => $dosen,
        ]);
    }

    public function editProfil($id)
    {
        $this->statusProfil = true;
        $user = UserModel::find($id);
        $this->emit('editProfil', $user);
    }

}
