@extends('layout')
@section('title', 'Daftar Guru')

@section('content')

    <div class="container my-5">
        <h2 class="mb-4">Daftar Guru Jurusan RPL</h2>

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="Guru">
                    <div class="card-body">
                        <h5 class="card-title">Nama Guru 1, S.Kom</h5>
                        <p class="card-text text-muted">Ketua Jurusan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="Guru">
                    <div class="card-body">
                        <h5 class="card-title">Nama Guru 2, S.Pd</h5>
                        <p class="card-text text-muted">Guru Pemrograman Web</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="Guru">
                    <div class="card-body">
                        <h5 class="card-title">Nama Guru 3, S.Kom</h5>
                        <p class="card-text text-muted">Guru Basis Data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 text-center">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="Guru">
                    <div class="card-body">
                        <h5 class="card-title">Nama Guru 4, S.Pd</h5>
                        <p class="card-text text-muted">Guru Pemrograman Mobile</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection