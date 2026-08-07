<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/pelajaran', function () {
    return view('pelajaran.pelajaran');
});
Route::get('/guru', function () {
    return view('guru.guru');
});
Route::get('/profil', function () {
    return view('profil.profil');
});
