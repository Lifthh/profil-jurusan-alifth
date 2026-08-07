@extends('layout')
@section('title', 'Profil Jurusan')

@section('content')

    <div class="container my-5">
        <h2 class="mb-4">Profil Jurusan Rekayasa Perangkat Lunak</h2>

        <div class="mb-4">
            <h4>Visi</h4>
            <p>Menjadi jurusan unggulan yang menghasilkan lulusan kompeten, kreatif, dan siap bersaing di industri teknologi informasi.</p>
        </div>

        <div class="mb-4">
            <h4>Misi</h4>
            <ul>
                <li>Menyelenggarakan pembelajaran berbasis kompetensi dan teknologi terkini.</li>
                <li>Membangun kerja sama dengan industri untuk praktik kerja lapangan.</li>
                <li>Mengembangkan karakter disiplin, kreatif, dan inovatif pada siswa.</li>
            </ul>
        </div>

        <div class="mb-4">
            <h4>Kompetensi Lulusan</h4>
            <ul>
                <li>Pemrograman Web (HTML, CSS, JavaScript, PHP)</li>
                <li>Pemrograman Mobile (Android/Kotlin)</li>
                <li>Basis Data (MySQL, PostgreSQL)</li>
                <li>Perancangan & Analisis Sistem</li>
            </ul>
        </div>

        <div class="mb-4">
            <h4>Fasilitas</h4>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/300x200" class="img-fluid rounded mb-2" alt="Lab Komputer">
                    <p class="text-center">Lab Komputer</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/300x200" class="img-fluid rounded mb-2" alt="Ruang Kelas">
                    <p class="text-center">Ruang Kelas</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="https://via.placeholder.com/300x200" class="img-fluid rounded mb-2" alt="Perpustakaan">
                    <p class="text-center">Perpustakaan</p>
                </div>
            </div>
        </div>
    </div>

@endsection