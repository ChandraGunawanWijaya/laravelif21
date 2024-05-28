@extends('layout.main')

@section('title','Daftar Fakultas')

@section('content')
    <H2>Tambah fakultas</H2>
    <p>ini halaman tambah Program Studi </p>
    <form action="{{route('prodi.store')}}" method="post">
    @csrf
    
    Nama Program Studi: <input type="text" name="nama" id="" value="{{old('nama')}}"> <br>
    @error('nama')
        {{ $message}}
        @enderror
   
    Nama Fakultas: <select name="fakultas_id" id="">
        @foreach ($fakultas as $item )
            <option value="{{$item["id"]}}">{{$item["nama"]}} </option>
        @endforeach
    </select>
    <button type="submit">Simpan</button>
    @error('singkatan')
        {{ $message}}
        @enderror

    </form>
@endsection
    