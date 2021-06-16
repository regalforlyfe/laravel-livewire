<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proyek as ProyekModel;
use App\Models\User;

class Profil extends Component
{
    public function render()
    {
        $proyek = ProyekModel::orderBy('created_at', 'DESC')->get();
        $user = User::get();
        return view('livewire.profil', [
            'proyek' => $proyek,
            'user' => $user
        ]);
    }

}
