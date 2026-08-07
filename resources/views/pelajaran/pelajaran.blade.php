@extends('layout')
@section('title', 'Daftar Pelajaran')

@section('content')

    <div class="container my-5">
        <h2 class="mb-4">Daftar Mata Pelajaran Jurusan RPL</h2>

        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Guru Pengajar</th>
                    <th>Jam/Minggu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pemrograman Web</td>
                    <td>X, XI</td>
                    <td>Nama Guru 2, S.Pd</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Basis Data</td>
                    <td>XI</td>
                    <td>Nama Guru 3, S.Kom</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pemrograman Mobile</td>
                    <td>XII</td>
                    <td>Nama Guru 4, S.Pd</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Perancangan Sistem</td>
                    <td>XI, XII</td>
                    <td>Nama Guru 1, S.Kom</td>
                    <td>4</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection