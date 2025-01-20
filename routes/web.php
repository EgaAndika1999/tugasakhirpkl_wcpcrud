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
    return view('landingpage.index');
});

/* ================== ROUTE UNTUK KEHALAMAN PRODUCT =============== */
Route::get('/product', function () {
    return view('productpage.product');
})->name('product');

/* ================== ROUTE UNTUK KEMBALI KE HALAMAN SUBMIT =============== */
Route::view('/index', 'index')->name('index');

/* ================== ROUTE UNTUK KEHALAMAN TAMBAHPRODUCT =============== */
Route::get('/tambah-produk', function () {
    return view('productpage.tmbhproduct');
})->name('tmbhproduct');






/* ================== KUMPULAN ROUTE SIDEBAR DASHBOARD MENUJU ABOUT, TEAM, PROJECT, CALLENDER, HOME, LOGOUT =============== */
/* ================== ROUTE UNTUK SIDEBAR DASHBOARD KE HALAMAN TEAM =============== */
Route::get('/teamproduct', function () {
    return view('productpage.teamproduct');
})->name('teamproduct');
/* ================== ROUTE UNTUK SIDEBAR DASHBOARD KE HALAMAN ABOUTUS =============== */
Route::get('/aboutus', function () {
    return view('productpage.aboutproduct');
})->name('aboutus');
/* ================== ROUTE UNTUK SIDEBAR DASHBOARD KE HALAMAN PROJECTCODEWAVE =============== */
Route::get('/projectcdw', function () {
    return view('productpage.projectcodewv');
})->name('projectcdw');
/* ================== ROUTE UNTUK SIDEBAR DASHBOARD KE HALAMAN AWAL =============== */
Route::get('/', function () {
    return view('landingpage.index');
})->name('home');




/* ================== KUMPULAN ROUTE SIDEBAR ABOUT MENUJU DASHBOARD, TEAM, PROJECT, HOME, LOGOUT =============== */
/* ================== ROUTE UNTUK SIDEBAR ABOUT KE HALAMAN DASHBOARD =============== */
Route::get('/adashboard', function () {
    return view('productpage.product');
})->name('adashboard');
/* ================== ROUTE UNTUK SIDEBAR ABOUT KE HALAMAN TEAM =============== */
Route::get('/ateamcdw', function () {
    return view('productpage.teamproduct');
})->name('ateamcdw');
/* ================== ROUTE UNTUK SIDEBAR ABOUT KE HALAMAN PROJECT =============== */
Route::get('/aprojectcdw', function () {
    return view('productpage.projectcodewv');
})->name('aprojectcdw');
/* ================== ROUTE UNTUK SIDEBAR ABOUT KE HALAMAN AWAL =============== */
Route::get('/', function () {
    return view('landingpage.index');
})->name('home');




/* ================== KUMPULAN ROUTE SIDEBAR TEAM MENUJU DASHBOARD, ABOUT, PROJECT, HOME, LOGOUT =============== */
/* ================== ROUTE UNTUK SIDEBAR TEAM KE HALAMAN DASHBOARD =============== */
Route::get('/tdashboard', function () {
    return view('productpage.product');
})->name('tdashboard');
/* ================== ROUTE UNTUK SIDEBAR TEAM KE HALAMAN ABOUT =============== */
Route::get('/tabout', function () {
    return view('productpage.aboutproduct');
})->name('tabout');
/* ================== ROUTE UNTUK SIDEBAR TEAM KE HALAMAN PROJECT =============== */
Route::get('/tproject', function () {
    return view('productpage.projectcodewv');
})->name('tproject');
/* ================== ROUTE UNTUK SIDEBAR ABOUT KE HALAMAN AWAL =============== */
Route::get('/', function () {
    return view('landingpage.index');
})->name('home');




/* ================== KUMPULAN ROUTE SIDEBAR PROJECT MENUJU DASHBOARD, ABOUT, TEAM, HOME, LOGOUT =============== */
/* ================== ROUTE UNTUK SIDEBAR PROJECT KE HALAMAN DASHBOARD =============== */
Route::get('/pdashboard', function () {
    return view('productpage.product');
})->name('pdashboard');
/* ================== ROUTE UNTUK SIDEBAR PROJECT KE HALAMAN ABOUT =============== */
Route::get('/pabout', function () {
    return view('productpage.aboutproduct');
})->name('pabout');
/* ================== ROUTE UNTUK SIDEBAR PROJECT KE HALAMAN TEAM =============== */
Route::get('/pteam', function () {
    return view('productpage.teamproduct');
})->name('pteam');
/* ================== ROUTE UNTUK SIDEBAR ABOUT KE HALAMAN AWAL =============== */
Route::get('/', function () {
    return view('landingpage.index');
})->name('home');


