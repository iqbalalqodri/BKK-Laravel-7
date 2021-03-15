<?php

use Illuminate\Support\Facades\Route;

    // Route::get('main', function () {
    //     return view('main');
    // });

Route::get('/','Home@data_home');


Route::get('Profil-Latar-Belakang','Profil@data_latar_belakang');
Route::get('Profil-Dasar-Pemikiran','Profil@data_Dasar_Pemikiran');
Route::get('Profil-visi-misi-moto','Profil@data_visi_misi_moto');

Route::get('Kegiatan','Kegiatan@data');

Route::get('Perekrutan-Umum','Perekrutan_Umum@data');

Route::get('Sekema-Perekrutan','Sekema_Perekrutan@data');

Route::get('Institusi-Pasangan','Institusi_Pasangan@data');

Route::get('Kontak','Kontak@data');

Route::get('Lowongan-Pekerjaan','Lowongan_Pekerjaan@data_bkk');

Route::get('Lowongan-Pekerjaan/cari','Lowongan_Pekerjaan@cari');

Route::get('Detail-Lowongan-Pekerjaan/{id}','Lowongan_Pekerjaan@data_bkk_single' );
// Route::patch('portofolio_pendidikan', 'Portofolio_pendidikan@editprosess')


