<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/struktur_dasar_html', function () {
    return view('pemrograman_dasar_web.struktur_dasar_html');
});
Route::get('/semantic_html', function () {
    return view('pemrograman_dasar_web.semantic_html');
});
Route::get('/multimedia_html', function () {
    return view('pemrograman_dasar_web.multimedia');
});
Route::get('/html_css', function () {
    return view('pemrograman_dasar_web.html_css');
});
Route::get('/tabel_dan_form', function () {
    return view('pemrograman_dasar_web.tabel_dan_form');
});
Route::get('/desain_kotak_konten', function () {
    return view('pemrograman_dasar_web.desain_kotak_konten');
});
Route::get('/layout_responsive_flexbox', function () {
    return view('pemrograman_dasar_web.layout_responsive_flexbox');
});
Route::get('/layout_responsive2', function () {
    return view('pemrograman_dasar_web.layout_responsive2');
});
Route::get('/transisi', function () {
    return view('pemrograman_dasar_web.transisi');
});
Route::get('/animasi', function () {
    return view('pemrograman_dasar_web.animasi');
});

