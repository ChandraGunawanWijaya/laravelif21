@extends('layout.main')
@section('title','Daftar Fakultas')

@section('content')
<h2>Daftar Fakultas</h2>
<p>ini Halaman Daftar Fakultas</p>

    @foreach ($fakultas as $item)
    {{$item['nama']}} {{$item['singkatan']}} <br>
    @endforeach

    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Fakultas</h4>
                  <p class="card-description">
                    List Data Fakultas
                    Add class <code>.table-hover</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama Fakultas</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($fakultas as $item)
                         <tr>
                            <td>{{$item['nama']}}</td> <br>
                            <td>{{$item['singkatan']}}</td> <br>
                            </tr>
                             @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @endsection


