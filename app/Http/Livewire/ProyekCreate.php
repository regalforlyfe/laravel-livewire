<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proyek as ProyekModel;
use App\Models\Kategori as KategoriModel;
use App\Models\Mahasiswa as MahasiswaModel;
use App\Models\Dosen as DosenModel;
use App\Models\PilihAnggota as AnggotaModel;
use Illuminate\Support\Facades\Storage;

class ProyekCreate extends Component
{
    use WithFileUploads;

    //public $statusUpdate = false;

    public $judul_proyek,$image,$deskripsi_proyek,$jenis_proyek,$id_kategori,$link_proyek,$tahun;
    public $id_dosen;
    public $id_mahasiswa;

    public function render()
    {
        $kategori = KategoriModel::get();
        $mahasiswa = MahasiswaModel::get();
        $dosen = DosenModel::get();
        $proyek = ProyekModel::get();
        return view('livewire.proyek-create',[
            'kategori' => $kategori,
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen,
            'proyek' => $proyek,
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
            'image' => 'required',
            'tahun' => 'required',
            'deskripsi_proyek' => 'required',
            'jenis_proyek' => 'required',
            'id_kategori' => 'required',
            'link_proyek' => 'required',
        ]);

        $imageName = md5($this->image.microtime()).'.'.$this->image->extension();

        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );
        
        
        $proyek = ProyekModel::create([
            'image' => $imageName,
            'judul_proyek' => $this->judul_proyek,
            'tahun' => $this->tahun,
            'deskripsi_proyek' => $this->deskripsi_proyek,
            'jenis_proyek' => $this->jenis_proyek,
            'id_kategori' => $this->id_kategori,
            'link_proyek' => $this->link_proyek
        ]);

        $anggota = AnggotaModel::create([
            'id_proyek' => $proyek->id,
            'id_dosen' => $this->id_dosen,
            'id_mahasiswa' => $this->id_mahasiswa
        ]);
    
        $this->resetInput();

        return redirect('/profil');
    }

    private function resetInput()
    {
        $this->image = null;
        $this->tahun = null;
        $this->judul_proyek = null;
        $this->deskripsi_proyek = null;
        $this->jenis_proyek = null;
        $this->id_kategori = null;
        $this->link_proyek = null;
    }
}
