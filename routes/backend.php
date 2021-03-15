<?php

use Illuminate\Support\Facades\Route;
// ->middleware('guest')
 Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
 Route::post('/login', 'AuthController@LoginProsess')->middleware('guest');
 Route::get('/logout', 'AuthController@logout')->middleware('auh')->name('logout');


//  Route::get('/register', 'AuthController@Register');
//  Route::post('/registerp', 'AuthController@RegisterProsess');


 Route::get('main', function () {
    return view('Backend.main');
})->middleware('auth');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@LoginProsess')->middleware('guest');

 Route::get('/register', 'AuthController@Register')->middleware('guest');
 Route::post('/registerp', 'AuthController@RegisterProsess')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('Home', function () {
    return view('Backend.Home');
})->name('Home')->middleware('auth');

Route::get('BKK', 'Bkk@data')->name('BKK')->middleware('auth');
Route::get('BKK/add', 'Bkk@add')->middleware('auth');
Route::post('BKK', 'Bkk@addprosess')->middleware('auth');
Route::get('BKK/edit/{id}', 'BKK@edit')->middleware('auth');
Route::patch('BKK/{id}', 'BKK@editprosess')->middleware('auth');
Route::delete('BKK/{id}', 'BKK@delete')->middleware('auth');

Route::get('Profil-Latar-Belakang', 'Latar_Belakang@data')->name('Latar-Belakang')->middleware('auth');
Route::get('Profil-Latar-Belakang/edit/{id}', 'Latar_Belakang@edit')->middleware('auth');
Route::patch('Profil-Latar-Belakang/{id}', 'Latar_Belakang@editprosess')->middleware('auth');
Route::delete('Profil-Latar-Belakang/{id}', 'Latar_Belakang@delete')->middleware('auth');

Route::get('Profil-Dasar-Pemikiran', 'Dasar_Pemikiran@data')->name('Dasar-Pemikiran')->middleware('auth');
Route::get('Profil-Dasar-Pemikiran/edit/{id}', 'Dasar_Pemikiran@edit')->middleware('auth');
Route::patch('Profil-Dasar-Pemikiran/{id}', 'Dasar_Pemikiran@editprosess')->middleware('auth');
Route::delete('Profil-Dasar-Pemikiran/{id}', 'Dasar_Pemikiran@delete')->middleware('auth');

Route::get('Profil-Visi-Misi-Moto', 'Visi_Misi_Moto@data')->name('Visi-Misi-Moto')->middleware('auth');
Route::get('Profil-Visi-Misi-Moto/edit/{id}', 'Visi_Misi_Moto@edit')->middleware('auth');
Route::patch('Profil-Visi-Misi-Moto/{id}', 'Visi_Misi_Moto@editprosess')->middleware('auth');
Route::delete('Profil-Visi-Misi-Moto/{id}', 'Visi_Misi_Moto@delete')->middleware('auth');

Route::get('Kegiatan', 'Kegiatan@data')->name('Kegiatan')->middleware('auth');
Route::get('Kegiatan/add', 'Kegiatan@add')->middleware('auth');
Route::post('Kegiatan', 'Kegiatan@addprosess')->middleware('auth');
Route::get('Kegiatan/edit/{id}', 'Kegiatan@edit')->middleware('auth');
Route::patch('Kegiatan/{id}', 'Kegiatan@editprosess')->middleware('auth');
Route::delete('Kegiatan/{id}', 'Kegiatan@delete')->middleware('auth');

Route::get('Perekrutan-Umum', 'Perekrutan_Umum@data')->name('Perekrutan-Umum')->middleware('auth');
Route::get('Perekrutan-Umum/add', 'Perekrutan_Umum@add')->middleware('auth');
Route::post('Perekrutan-Umum', 'Perekrutan_Umum@addprosess')->middleware('auth');
Route::get('Perekrutan-Umum/edit/{id}', 'Perekrutan_Umum@edit')->middleware('auth');
Route::patch('Perekrutan-Umum/{id}', 'Perekrutan_Umum@editprosess')->middleware('auth');
Route::delete('Perekrutan-Umum/{id}', 'Perekrutan_Umum@delete')->middleware('auth');

Route::get('Sekema-Perekrutan', 'Sekema_Perekrutan@data')->name('Sekema-Perekrutan')->middleware('auth');
Route::get('Sekema-Perekrutan/add', 'Sekema_Perekrutan@add')->middleware('auth');
Route::post('Sekema-Perekrutan', 'Sekema_Perekrutan@addprosess')->middleware('auth');
Route::get('Sekema-Perekrutan/edit/{id}', 'Sekema_Perekrutan@edit')->middleware('auth');
Route::patch('Sekema-Perekrutan/{id}', 'Sekema_Perekrutan@editprosess')->middleware('auth');
Route::delete('Sekema-Perekrutan/{id}', 'Sekema_Perekrutan@delete')->middleware('auth');

Route::get('Institusi-Pasangan', 'Institusi_Pasangan@data')->name('Institusi-Pasangan')->middleware('auth');
Route::get('Institusi-Pasangan/add', 'Institusi_Pasangan@add')->middleware('auth');
Route::post('Institusi-Pasangan', 'Institusi_Pasangan@addprosess')->middleware('auth');
Route::get('Institusi-Pasangan/edit/{id}', 'Institusi_Pasangan@edit')->middleware('auth');
Route::patch('Institusi-Pasangan/{id}', 'Institusi_Pasangan@editprosess')->middleware('auth');
Route::delete('Institusi-Pasangan/{id}', 'Institusi_Pasangan@delete')->middleware('auth');

Route::get('Kontak', 'Kontak@data')->name('Kontak')->middleware('auth');
Route::get('Kontak/add', 'Kontak@add')->middleware('auth');
Route::post('Kontak', 'Kontak@addprosess')->middleware('auth');
Route::get('Kontak/edit/{id}', 'Kontak@edit')->middleware('auth');
Route::patch('Kontak/{id}', 'Kontak@editprosess')->middleware('auth');
Route::delete('Kontak/{id}', 'Kontak@delete')->middleware('auth');

Route::get('Password', 'Password@data')->name('Password')->middleware('auth');
Route::PATCH('Password/{id}', 'Password@edit')->name('Password')->middleware('auth');