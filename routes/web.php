<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

// Login
Route::get('/login', 'LoginController@halamanlogin')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout'); 
Route::get('/registrasi', 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi', 'LoginController@simpanregistrasi')->name('simpanregistrasi');

Route::group(['middleware' => ['auth:user,alumni','cekrole:admin,alumni']],function(){
    Route::get('/beranda', 'BerandaController@index')->name('beranda');

    // Route Alumni
    // Route::get('/alumni/detail/{nik}', 'AlumniController@detail');
    // Route::get('/alumni/profile', 'AlumniController@profile');
    // Route::post('/alumni/profile', 'AlumniController@update_profile');

    // Route Event
    Route::get('/event/detail/{id}', 'EventController@detail');

    // Route Lowongan
    Route::get('/lowongan/tambah', 'LowonganController@tambah');
    Route::post('/lowongan/store', 'LowonganController@store');
    Route::get('/lowongan/detail/{id}', 'LowonganController@detail');
});

Route::group(['middleware' => ['auth:user,alumni','cekrole:admin']],function(){
   
    // Route Alumni
    Route::get('/alumni', 'AlumniController@index')->name('alumni');
    Route::get('/alumni/tambah', 'AlumniController@tambah');
    Route::post('/alumni/store', 'AlumniController@store');
    Route::get('/alumni/editt/{nik}', 'AlumniController@edit');
    Route::put('/alumni/update/{nik}', 'AlumniController@update');
    Route::get('/alumni/delete/{nik}', 'AlumniController@delete');
    Route::get('/alumni/cetak_alumni', 'AlumniController@cetak_alumni');
    Route::get('/alumni/cetak_alumni_form', 'AlumniController@cetak_alumni_form');
    Route::get('/alumni/cetak_alumni_pertahun/{thn_lulus}', 'AlumniController@cetak_alumni_pertahun');


    // Route Lowongan
    Route::get('/lowongan', 'LowonganController@index')->name('lowongan');
    Route::get('/lowongan/edit/{id}', 'LowonganController@edit');
    Route::put('/lowongan/update/{id}', 'LowonganController@update');
    Route::get('/lowongan/delete/{id}', 'LowonganController@delete');

    // Route Event
    Route::get('/event', 'EventController@index')->name('event');
    Route::get('/event/tambah', 'EventController@tambah');
    Route::post('/event/store', 'EventController@store');
    Route::get('/event/edit/{id}', 'EventController@edit');
    Route::put('/event/update/{id}', 'EventController@update');
    Route::get('/alumni/detail/{nik}', 'AlumniController@detail');
    Route::get('/event/delete/{id}', 'EventController@delete');
    Route::get('/event/cetak_event', 'EventController@cetak_event');
    Route::get('/event/cetak_event_form', 'EventController@cetak_event_form');
    Route::get('/event/cetak_event_pertanggal/{tglawal}/{tglakhir}', 'EventController@cetak_event_pertanggal');

    // Route Perusahaan
    Route::get('/perusahaan', 'PerusahaanController@index')->name('perusahaan');
    Route::get('/perusahaan/tambah', 'PerusahaanController@tambah');
    Route::post('/perusahaan/store', 'PerusahaanController@store');
    Route::get('/perusahaan/edit/{id}', 'PerusahaanController@edit');
    Route::put('/perusahaan/update/{id}', 'PerusahaanController@update');
    Route::get('/perusahaan/delete/{id}', 'PerusahaanController@delete');

    // Route Jabatan
    Route::get('/jabatan', 'JabatanController@index')->name('jabatan');
    Route::get('/jabatan/tambah', 'JabatanController@tambah');
    Route::post('/jabatan/store', 'JabatanController@store');
    Route::get('/jabatan/edit/{id}', 'JabatanController@edit');
    Route::put('/jabatan/update/{id}', 'JabatanController@update');
    Route::get('/jabatan/delete/{id}', 'JabatanController@delete');
});

Route::group(['middleware' => ['auth:user,alumni','cekrole:alumni']],function(){

    // Route Alumni
    Route::get('/alumni/index_alumni', 'AlumniController@index_alumni');
    Route::get('/alumni/detail_alumni/{nik}', 'AlumniController@detail_alumni');

    // Route Lowongan
    Route::get('/lowongan/index_alumni', 'LowonganController@index_alumni');

    // Route Event
    Route::get('/event/index_alumni', 'eventController@index_alumni');
});