<?php

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
    return view('welcome');
});

// AUTH
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// ADMIN

Route::get('/admin/index', function(){
	return view ('admin.index');
});



// DASHBOARD
Route::get('/dashboard/index', 'HomeController@dashboard')->name('dashboard.index');

// USER

Route::get('/admin/user/index', 'UserController@index')->name('user.index');
Route::get('/admin/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/admin/user/Update/{id}', 'UserController@update')->name('user.update');
Route::post('/admin/user/delete/{id}', 'UserController@destroy')->name('user.delete');
Route::get('/admin/user/create', 'UserController@create')->name('user.create');
Route::post('/admin/user/save', 'UserController@store')->name('user.save');
// Data master Barang
Route::get('/admin/barang/create', 'BarangController@create')->name('barang.create');
Route::post('/admin/barang/save', 'BarangController@store')->name('barang.save');
Route::get('/admin/barang/index', 'BarangController@index')->name('barang.index');
Route::get('/admin/barang/edit/{id}', 'BarangController@edit')->name('barang.edit');
Route::post('/admin/barang/delete/{id}', 'BarangController@destroy')->name('barang.delete');
Route::post('/admin/barang/Update/{id}', 'BarangController@update')->name('barang.update');
Route::get('/admin/barang/getdata/{id}', 'BarangController@getdata')->name('barang.getdata');

// DATA Master Supklier
Route::get('/admin/suplier/create', 'SuplierController@create')->name('suplier.create');
Route::post('/admin/suplier/save', 'SuplierController@store')->name('suplier.save');
Route::get('/admin/suplier/index', 'SuplierController@index')->name('suplier.index');
Route::get('/admin/suplier/edit/{id}', 'SuplierController@edit')->name('suplier.edit');
Route::post('/admin/suplier/delete/{id}', 'SuplierController@destroy')->name('suplier.delete');
Route::post('/admin/suplier/Update/{id}', 'SuplierController@update')->name('suplier.update');
Route::get('/admin/suplier/getdata/{id}', 'SuplierController@getdata')->name('suplier.getdata');
// Data master pembelian
Route::get('/pengeluaran/pembelian/create', 'PembelianController@create')->name('Pembelian.create');
Route::get('/pengeluaran/pembelian/index', 'PembelianController@index')->name('pembelian.index');
Route::post('/pengeluaran/pembelian/save', 'PembelianController@store')->name('pembelian.save');
Route::post('/pengeluaran/pembelian/delete/{id}', 'PembelianController@destroy')->name('pembelian.delete');

// Pemasukan

Route::get('/pemasukan/pembelian/create', 'PemasukanController@create')->name('Pemasukan.create');
Route::get('/pemasukan/pembelian/index', 'PemasukanController@index')->name('pemasukan.index');
Route::post('/pemasukan/pembelian/save', 'PemasukanController@store')->name('pemasukan.save');
//Route::post('/pengeluaran/pembelian/delete/{id}', 'PembelianController@destroy')->name('pembelian.delete');

// Data master Penggajian
Route::get('/pengeluaran/penggajian/create', 'PenggajianController@create')->name('penggajian.create');
Route::get('/pengeluaran/penggajian/index', 'PenggajianController@index')->name('penggajian.index');
Route::post('/pengeluaran/penggajian/save', 'PenggajianController@store')->name('penggajian.save');
Route::post('/pengeluaran/penggajian/delete/{id}', 'PenggajianController@destroy')->name('penggajian.delete');