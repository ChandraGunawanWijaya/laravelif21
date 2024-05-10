@extends('layout.main')
@section('title','Daftar Fakultas')

@section('content')
<<<<<<< HEAD
<h2>Daftar Fakultas</h2>
<p>Halaman Daftar Fakultas</p>

    @foreach ($fakultas as $item)
    {{$item['nama']}} {{$item['singkatan']}} <br>
    @endforeach

    @foreach ($prodi as $item1)
    {{$item1['nama']}} {{$item1['singkatan']}} <br>
    @endforeach

    @endsection
=======
    <H2>Daftar fakultas</H2>
    <p> ini halaman daftar fakultas </p>

@foreach ($fakultas as $item)
    {{$item['nama']}} {{$item['singkatan']}} <br>
@endforeach
@endsection
>>>>>>> 4dabc282deb714296f1d82b51a8df713bf493c99

