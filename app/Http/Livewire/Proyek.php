<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proyek as ProyekModel;
use App\Models\Pilihanggota as PilihanggotaModel;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class Proyek extends Component
{
    use WithFileUploads;

    public $judul_proyek,$image,$deskripsi_proyek,$jenis_proyek,$id_kategori,$id_dosen,$link_proyek,$tahun,
    $id_mahasiswa1,$id_mahasiswa2,$id_mahasiswa3,$id_mahasiswa4,$id_mahasiswa5,$id_mahasiswa6,$id_mahasiswa7,$id_mahasiswa8,$id_mahasiswa9,$id_mahasiswa10;

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
        //dd($this);
        $v = $this->validate([
            'judul_proyek' => 'required',
            'image' => 'required',
            'tahun' => 'required',
            'deskripsi_proyek' => 'required',
            'id_kategori' => 'required',
            'link_proyek' => 'required',
        ]);

        //dd($this->image->extension());
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

        $pilihanggota = PilihanggotaModel::create([
            'id_proyek' => $proyek->id,
            'id_dosen' => $this->id_dosen,
            'id_mahasiswa' => Auth::user()->id,
        ]);

        // for($x = 1; $x <=10; $x++){
        //     if($this->id_mahasiswa.$x != null){
        //         $pilihanggota = PilihanggotaModel::create([
        //             'id_proyek' => $proyek->id,
        //             'id_dosen' => $this->id_dosen,
        //             'id_mahasiswa' => $this->id_mahasiswa.$x,
        //         ]);
        //         print_r($x);
        //     }
        // };

        session()->flash('info','Proyek berhasil dibuat');

        $this->image = '';
        $this->tahun = '';
        $this->judul_proyek = '';
        $this->deskripsi_proyek = '';
        $this->jenis_proyek = '';
        $this->id_kategori = '';
        $this->link_proyek = '';

        return redirect('/');
    }

}
