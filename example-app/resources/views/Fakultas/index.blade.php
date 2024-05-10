@extends('layout.main')

@section('title', 'Daftar Fakultas')

@section('content')
<h2>Daftar Fakultas</h2>
<p>Halaman Daftar Fakultas</p>

    @foreach ($fakultas as $item)
    {{$item['nama']}} {{$item['singkatan']}} <br>
    @endforeach

    @foreach ($prodi as $item1)
    {{$item1['nama']}} {{$item1['singkatan']}} <br>
    @endforeach

    @endsection

