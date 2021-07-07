<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proyek as ProyekModel;
use App\Models\Kategori as KategoriModel;
use App\Models\Mahasiswa as MahasiswaModel;
use App\Models\Dosen as DosenModel;
use App\Models\PilihAnggota as AnggotaModel;
use Illuminate\Support\Facades\DB;

class Proyek extends Component
{
    use WithFileUploads;

    public $statusUpdate = false;

    public $judul_proyek, $image, $deskripsi_proyek, $jenis_proyek, $id_kategori, $link_proyek, $tahun;

    public function render()
    {
        $kategori = KategoriModel::get();
        $mahasiswa = MahasiswaModel::get();
        $dosen = DosenModel::get();
        $proyek = DB::table('proyek')
            ->join('anggota', 'proyek.id', '=', 'anggota.id_proyek')
            ->join('kategori', 'proyek.id_kategori', '=', 'kategori.id_kategori')
            ->get();
        $anggota = AnggotaModel::get();
        return view('livewire.proyek', [
            'kategori' => $kategori,
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen,
            'proyek' => $proyek,
            'anggota' => $anggota,
        ]);
    }

    public function getProyek($id)
    {
        $this->statusUpdate = true;
        $proyek = ProyekModel::find($id);
        $this->emit('getProyek', $proyek);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = AnggotaModel::find($id);
            $data->delete();
            return redirect('/profil');
        }
    }
}
