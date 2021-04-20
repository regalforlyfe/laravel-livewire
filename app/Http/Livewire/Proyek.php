<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proyek as ProyekModel;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Proyek extends Component
{
    use WithFileUploads;

    public $judul_proyek,$image,$deskripsi_proyek,$jenis_proyek,$id_kategori,$id_dosen,$id_anggota,$link_proyek,$tahun;

    public function render()
    {
        $kategori = Kategori::get();
        $users = User::get();
        $proyek = ProyekModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.proyek', [
            'proyek' => $proyek,
            'kategori' => $kategori,
            'users' => $users
        ]);
    }

    public function previewImage(){
        $this->validate([
            'image' => 'image|max:2048'
        ]);
    }

    public function store(){
        $this->validate([
            'judul_proyek' => 'required',
            'image' => 'image|max:2048|required',
            'tahun' => 'required',
            'deskripsi_proyek' => 'required',
            'id_kategori' => 'required',
            'link_proyek' => 'required',
        ]);

        $imageName = md5($this->image.microtime().'.'.$this->image->extension());

        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );

        ProyekModel::create([
            'image' => $imageName,
            'judul_proyek' => $this->judul_proyek,
            'tahun' => $this->tahun,
            'deskripsi_proyek' => $this->deskripsi_proyek,
            'jenis_proyek' => $this->jenis_proyek,
            'id_kategori' => $this->id_kategori,
            'link_proyek' => $this->link_proyek
        ]);

        session()->flash('info','Proyek berhasil dibuat');

        $this->image = '';
        $this->tahun = '';
        $this->judul_proyek = '';
        $this->deskripsi_proyek = '';
        $this->jenis_proyek = '';
        $this->id_kategori = '';
        $this->link_proyek = '';
    }

}
