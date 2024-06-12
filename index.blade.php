@extends('layouts.admin')

@section('main-content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelas.index') }}">Detail Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Absensi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Materi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
                </li>
            </ul>
        </div>
</nav>

<!-- Content -->
<div class="container mt-5">
    
    <h1 class="h2 mb-4 text-gray-800 text-center">{{ __('Daftar Mahasiswa') }}</h1>
<div class="card shadow mb-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">NPM </th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Email</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->npm }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->email }}</td>
                <td>{{ $mahasiswa->jenis_kelamin }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
