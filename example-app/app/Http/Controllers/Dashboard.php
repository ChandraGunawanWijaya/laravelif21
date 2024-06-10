<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    1 references|0 overrides
    public function index() {
        $mahasiswaprodi = DB::select("SELECT
        prodis.nama, COUNT(*) as jumlah
        from mahasiswa join prodis on mahasiswa.prodis_id = prodis.id")

        return view('dashboard')-> with('mahasiswaprodis',$mahasiswaprodis)

    }

}
