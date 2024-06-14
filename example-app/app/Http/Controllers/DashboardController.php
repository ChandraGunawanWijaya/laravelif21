<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $mahasiswaprodi = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->select('prodis.nama', DB::raw('COUNT(*) AS jumlah'))
        ->groupBy('prodis.nama')
        ->get();


        $mahasiswajk = DB::select(" SELECT prodis.nama,
        SUM(CASE WHEN mahasiswas.jk = 'L' THEN 1 ELSE 0 END) AS laki_laki,
        SUM(CASE WHEN mahasiswas.jk = 'P' THEN 1 ELSE 0 END) AS perempuan
            FROM
                mahasiswas
            JOIN
                prodis ON mahasiswas.prodi_id = prodis.id
            GROUP BY
                prodis.nama");

          return view('dashboard')->with('mahasiswaprodi', $mahasiswaprodi)->with('mahasiswajk', $mahasiswajk);

    }
}
