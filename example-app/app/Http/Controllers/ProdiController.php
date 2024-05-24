<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $prodi = Prodi::all(); //selectprodi
      return view('prodi.index')->with('prodi', $prodi);
    
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = prodi::all();
        return view('prodi.create')->with('prodi',$prodi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate(['nama'=> 'required|unique:prodis','fakultas_id'=>'required']);// simpan kedalam tabel prodiProdi::create($val);// redirect ke tabel fakultas
      return redirect()->route('prodi.index')->with('success', $val['nama'] . ' Berhasil Disimpan');

    }


    /**
     * Display the specified resource.
     */
    public function show(prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prodi $prodi)
    {
        //
    }
}
