@extends('layout.main')

@section('title','Daftar Fakultas')

@section('content')
    <H2>Tambah fakultas</H2>
    <p>ini halaman tambah Program Studi </p>
    <form action="{{route('prodi.store')}}" method="post">
    @csrf
    
    Nomor Pokok Mahasiswa: <input type="text" name="npm" id="" value="{{old('npm')}}"> <br>
    @error('npm')
        {{ $message}}
        @enderror

    Nama: <input type="text" name="nama" id="" value="{{old('nama')}}"> <br>
    @error('nama')
        {{ $message}}
        @enderror
    
    tempat lahir: <input type="text" name="tempat_lahir" id="" value="{{old('tempat_lahir')}}"> <br>
    @error('tempat_lahir')
        {{ $message}}
        @enderror
    
    tanggal lahir: <input type="text" name="tanggal_lahir" id="" value="{{old('tanggal_lahir')}}"> <br>
    @error('tanggal_lahir')
        {{ $message}}
        @enderror

        alamat: <input type="text" name="alamat" id="" value="{{old('alamat')}}"> <br>
    @error('alamat')
        {{ $message}}
        @enderror
   
   
    Kota: <select name="kotas_id" id="">
        @foreach ($kotas as $item )
            <option value="{{$item["id"]}}">{{$Item["nama"]}} </option>
        @endforeach
    </select>

    prodi: <select name="prodis_id" id="">
        @foreach ($prodis as $item )
            <option value="{{$item["id"]}}">{{$Item["nama"]}} </option>
        @endforeach
    </select>
    <button type="submit">Simpan</button>

    </form>
@endsection
    