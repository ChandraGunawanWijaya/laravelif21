@extends('layout.main')

@section('title','Daftar Fakultas')

@section('content')
    <H2>Tambah fakultas</H2>
    <p>halaman tambah fakultas </p>
    <form action="{{route('fakultas.store')}}" method="post">
    @csrf
    Nama Fakultas: <input type="text" name="nama" id=""> <br>
    @error('nama')
        {{ $message}}
        @enderror
    Singkatan: <input type="text" name="singkatan" id=""> <br>
    <button type="submit">Simpan</button>
    @error('singkatan')
        {{ $message}}
        @enderror

    </form>

    
@endsection
    