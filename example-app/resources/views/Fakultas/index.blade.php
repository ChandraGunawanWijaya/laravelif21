@extends('layout.main')
@section('title','Daftar Fakultas')

@section('content')
    <H2>Daftar fakultas</H2>
    <p> ini halaman daftar fakultas </p>

@foreach ($fakultas as $item)
    {{$item['nama']}} {{$item['singkatan']}} <br>
@endforeach
@endsection

