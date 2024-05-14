@extends('layout.main')
@section('title','Daftar Fakultas')

@section('content')
<h2>Daftar Fakultas</h2>
<p>ini Halaman Daftar Fakultas</p>

    @foreach ($fakultas as $item)
    {{$item['nama']}} {{$item['singkatan']}} <br>
    @endforeach

    @endforeach
    @endsection


