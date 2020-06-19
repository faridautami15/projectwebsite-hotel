<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/dashboar-petugas', 'HomeController@index_petugas')->name('HOME');
Route::get('/logout', 'Auth\LoginController@logout');

//HOME
Route::get('/hoteldelluna/home-pelanggan','HotelDelLunaController@home_pelanggan');
Route::get('/hoteldelluna/home-pelanggan-room','HotelDelLunaController@home_room');

 
//PETUGAS//
Route::get('/petugas/read-petugas','PetugasController@read_petugas');
Route::get('/petugas/input-petugas','PetugasController@input_petugas');
Route::post('/petugas/store-petugas','PetugasController@store_petugas');
Route::get('/petugas/edit-petugas/{id}','PetugasController@edit_petugas');
Route::post('/petugas/update-petugas','PetugasController@update_petugas');
Route::get('/petugas/delete-petugas/{id}','PetugasController@delete_petugas');
Route::get('/petugas/cari-petugas','PetugasController@cari_petugas');

//PELANGGAN//
Route::get('/pelanggan/read-pelanggan','PelangganController@read_pelanggan');
Route::get('/pelanggan/input-pelanggan','PelangganController@input_pelanggan');
Route::post('/pelanggan/store-pelanggan','PelangganController@store_pelanggan');
Route::get('/pelanggan/edit-pelanggan/{id}','PelangganController@edit_pelanggan');
Route::post('/pelanggan/update-pelanggan','PelangganController@update_pelanggan');
Route::get('/pelanggan/delete-pelanggan/{id}','PelangganController@delete_pelanggan');
Route::get('/pelanggan/cari-pelanggan','PelangganController@cari_pelanggan');
Route::get('/pelanggan/cari-reservasi','PelangganController@cari_reservasi');

//PEMBAYARAN
Route::get('/pembayaran/read-pembayaran','PembayaranController@read_pembayaran');
Route::get('/pembayaran/input-pembayaran','PembayaranController@input_pembayaran');
Route::post('/pembayaran/store-pembayaran','PembayaranController@store_pembayaran');
Route::get('/pembayaran/edit-pembayaran/{id}','PembayaranController@edit_pembayaran');
Route::post('/pembayaran/update-pembayaran','PembayaranController@update_pembayaran');
Route::get('/pembayaran/delete-pembayaran/{id}','PembayaranController@delete_pembayaran');


//KAMAR
Route::get('/kamar/read-kamar','KamarController@read_kamar');
Route::get('/kamar/input-kamar','KamarController@input_kamar');
Route::post('/kamar/store-kamar','KamarController@store_kamar');
Route::get('/kamar/edit-kamar/{id}','KamarController@edit_kamar');
Route::post('/kamar/update-kamar','KamarController@update_kamar');
Route::get('/kamar/delete-kamar/{id}','KamarController@delete_kamar');

//PEMESANAN
Route::get('/pemesanan/read-pemesanan','PemesananController@read_pemesanan');
Route::get('/pemesanan/input-pemesanan','PemesananController@input_pemesanan');
Route::post('/pemesanan/store-pemesanan','PemesananController@store_pemesanan');
Route::get('/pemesanan/edit-pemesanan/{id}','PemesananController@edit_pemesanan');
Route::post('/pemesanan/update-pemesanan','PemesananController@update_pemesanan');
Route::get('/pemesanan/delete-pemesanan/{id}','PemesananController@delete_pemesanan');

//REPORT
Route::get('/pelanggan/cetak_pdf','PelangganController@cetak_pdf');
Route::get('/petugas/cetak_pdf','PetugasController@cetak_pdf');
Route::get('/kamar/cetak_pdf','KamarController@cetak_pdf');
Route::get('/pembayaran/cetak_pdf','PembayaranController@cetak_pdf');
Route::get('/pemesanan/cetak_pdf','PemesananController@cetak_pdf');

//UPLOAD
Route::get('/upload/moment', 'UploadController@upload');
Route::post('/proses-upload/moment/', 'UploadController@proses_upload');

