<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\SaranController;
use App\Models\Kegiatan;
// use App\Http\Controllers\LoginController;


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

// Route::get('/login', function () {
//     return view('home');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('layouts.main');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('layouts.about');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'blog'])->name('layouts.blogpost');
Route::get('/contact', [\App\Http\Controllers\BlogController::class, 'contact'])->name('layouts.contact');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('layouts.admin.admin');
Route::get('/reset', [\App\Http\Controllers\AdminController::class, 'reset'])->name('auth.sb-login.pass');
Route::get('/table', [\App\Http\Controllers\TableController::class, 'tab'])->name('layouts.admin.table');
Route::get('/blog/details/{id}', [\App\Http\Controllers\BlogController::class, 'blog_details'])->name('layouts.blog_details');
Route::get('/opd', [\App\Http\Controllers\OPDController::class, 'opd'])->name('opd.opd');

// Route::get('/kegiatan', [\App\Http\Controllers\KegiatanController::class, 'kegiatan'])->name('layouts.admin.kegiatan');
// Route::get('/create-kegiatan', [\App\Http\Controllers\KegiatanController::class, 'create_kegiatan'])->name('layouts.admin.create_kegiatan');
// Route::get('/show-kegiatan', [\App\Http\Controllers\KegiatanController::class, 'show'])->name('layouts.admin.show_kegiatan');
// Route::post('/create-kegiatan', 'KegiatanController@store');
// Route::get('/show/{id}','App\Http\Controllers\KegiatanController@show')->name('layouts.admin.show_kegiatan');
// // Route::get('/show/{kegiatan}', ['as' => 'kegiatan.show', 'uses' => 'KegiatanController@show']);
// Route::delete('/kegiatan/delete/{kegiatan}', ['as' => 'kegiatan.destroy', 'uses' => 'KegiatanController@destroy']);
// // Route::resource('kegiatan', KegiatanController::class);
// // Route::resource('kegiatan', KegiatanController::class);
// // Route::resource('saran',  SaranController::class);
// // Route::get('/log2', [\App\Http\Controllers\LogController::class, 'log'])->name('auth.login_new');
// // Route::get('/loginadmin', [\App\Http\Controllers\AdminController::class, 'login'])->name('layouts.login.login');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/kegiatan','App\Http\Controllers\KegiatanController@index')->name('kegiatan.index');
    Route::get('/admin/create','App\Http\Controllers\KegiatanController@create')->name('kegiatan.create');
    Route::post('/admin/create','App\Http\Controllers\KegiatanController@store')->name('kegiatan.create');
    Route::get('/edit/{id}','App\Http\Controllers\KegiatanController@edit')->name('kegiatan.edit');
    Route::post('/edit/{id}','App\Http\Controllers\KegiatanController@update')->name('kegiatan.edit');
    // Route::get('/show/{id}','App\Http\Controllers\KegiatanController@show')->name('kegiatan.show');
    // Route::get('/admin/kegiatan/show/{kegiatan}', ['as' => 'kegiatan.show', 'uses' => 'KegiatanController@show']);
    Route::get('/admin/kegiatan/{id}','App\Http\Controllers\KegiatanController@show')->name('kegiatan.show');
    Route::delete('/kegiatan/delete/{kegiatan}', ['as' => 'kegiatan.destroy', 'uses' => 'KegiatanController@destroy']);
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/profil','App\Http\Controllers\ProfilController@index')->name('profil.index');
    Route::get('/admin/profil/create','App\Http\Controllers\ProfilController@create')->name('profil.create');
    Route::post('/admin/profil/create','App\Http\Controllers\ProfilController@store')->name('profil.create');
    Route::get('/edit/profil/{id}','App\Http\Controllers\ProfilController@edit')->name('profil.edit');
    Route::post('/edit/profil/{id}','App\Http\Controllers\ProfilController@update')->name('profil.edit');
    // Route::get('/show/{id}','App\Http\Controllers\KegiatanController@show')->name('kegiatan.show');
    // Route::get('/admin/kegiatan/show/{kegiatan}', ['as' => 'kegiatan.show', 'uses' => 'KegiatanController@show']);
    Route::get('/admin/profil/{id}','App\Http\Controllers\ProfilController@show')->name('profil.show');
    Route::delete('/admin/delete/{profil}', ['as' => 'profil.destroy', 'uses' => 'ProfilController@destroy']);
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/aktivitas','App\Http\Controllers\AktivitasController@index')->name('aktivitas.index');
    Route::get('/admin/aktivitas/create','App\Http\Controllers\AktivitasController@create')->name('aktivitas.create');
    Route::post('/admin/aktivitas/create','App\Http\Controllers\AktivitasController@store')->name('aktivitas.create');
    Route::get('/edit/aktivitas/{id}','App\Http\Controllers\AktivitasController@edit')->name('aktivitas.edit');
    Route::post('/edit/aktivitas/{id}','App\Http\Controllers\AktivitasController@update')->name('aktivitas.edit');
    // Route::get('/show/{id}','App\Http\Controllers\KegiatanController@show')->name('kegiatan.show');
    // Route::get('/admin/kegiatan/show/{kegiatan}', ['as' => 'kegiatan.show', 'uses' => 'KegiatanController@show']);
    Route::get('/admin/aktivitas/{id}','App\Http\Controllers\AktivitasController@show')->name('aktivitas.show');
    Route::delete('/aktivitas/delete/{aktivitas}', ['as' => 'aktivitas.destroy', 'uses' => 'AktivitasController@destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('saran',  SaranController::class);