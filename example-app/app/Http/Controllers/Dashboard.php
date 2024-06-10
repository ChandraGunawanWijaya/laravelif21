<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    public function index(){
        $mahasiswaprodi = DB::select("SELECT mahasiswas.*, prodis.nama AS nama_prodi
                FROM mahasiswas
                JOIN prodis ON mahasiswas.prodi_id = prodis.id"
                );

            return view('dashboard')->with('mahasiswaprodi', $mahasiswaprodi);

    }
}