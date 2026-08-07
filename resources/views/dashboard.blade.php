@extends('layout')
@section('title', 'Beranda - Jurusan Rekayasa Perangkat Lunak')

@section('content')

    <!-- Hero -->
    <div class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="fw-bold">Jurusan Rekayasa Perangkat Lunak</h1>
            <p class="lead">Membentuk generasi muda yang siap kerja di dunia teknologi & software development</p>
        </div>
    </div>

    <!-- Statistik Singkat -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <h2 class="fw-bold text-primary">12</h2>
                <p>Tenaga Pengajar</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold text-primary">8</h2>
                <p>Mata Pelajaran</p>
            </div>
            <div class="col-md-4">
                <h2 class="fw-bold text-primary">200+</h2>
                <p>Siswa Aktif</p>
            </div>
        </div>
    </div>

    <!-- Tentang Singkat -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500x300" class="img-fluid rounded" alt="Kegiatan Jurusan">
            </div>
            <div class="col-md-6">
                <h3>Tentang Jurusan</h3>
                <p>
                    Jurusan Rekayasa Perangkat Lunak (RPL) membekali siswa dengan
                    kemampuan pemrograman, pengembangan aplikasi web & mobile,
                    basis data, serta manajemen proyek perangkat lunak. Lulusan
                    disiapkan untuk siap kerja di industri IT maupun melanjutkan
                    pendidikan ke jenjang lebih tinggi.
                </p>
                <a href="/profil" class="btn btn-primary">Lihat Profil Lengkap</a>
            </div>
        </div>
    </div>

    <!-- Kontak Jurusan -->
    <div class="container my-5">
        <div class="card bg-light">
            <div class="card-body text-center">
                <h4 class="card-title">Kontak Jurusan</h4>
                <p class="mb-1"><strong>Telepon/WA:</strong> 0812-3456-7890</p>
                <p class="mb-1"><strong>Email:</strong> rpl@namasekolah.sch.id</p>
                <p class="mb-0"><strong>Ruang:</strong> Gedung B, Lantai 2</p>
            </div>
        </div>
    </div>

@endsection