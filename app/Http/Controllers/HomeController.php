<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')
            ->join('users', 'mahasiswa.id_users', '=', 'users.id')
            //->join('mahasiswa', 'users.id', '=', 'mahasiswa.id_users')
            //->join('dosen', 'users.id', '=', 'dosen.id_users')
            ->get();
        return view('home', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}
