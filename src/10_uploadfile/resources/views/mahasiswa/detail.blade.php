@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <img width="100px" height="100px" src="{{asset('storage/'.$Mahasiswa->foto)}}"></td>
                    <li class="list-group-item"><b>Nim: </b>{{ $Mahasiswa->nim }}</li>
                    <li class="list-group-item"><b>Nama: </b>{{ $Mahasiswa->nama }}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{ $Mahasiswa->kelas->nama_kelas }}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{ $Mahasiswa->jurusan }}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection