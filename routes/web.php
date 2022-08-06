<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KegiatanController;
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
Route::get('/kegiatan', [\App\Http\Controllers\KegiatanController::class, 'kegiatan'])->name('layouts.admin.kegiatan');
Route::get('/create-kegiatan', [\App\Http\Controllers\KegiatanController::class, 'create_kegiatan'])->name('layouts.admin.create_kegiatan');
Route::post('kegiatan', 'KegiatanController@store');
// Route::resource('kegiatan', KegiatanController::class);
// Route::resource('kegiatan', KegiatanController::class);
Route::resource('saran',  SaranController::class);
// Route::get('/log2', [\App\Http\Controllers\LogController::class, 'log'])->name('auth.login_new');
// Route::get('/loginadmin', [\App\Http\Controllers\AdminController::class, 'login'])->name('layouts.login.login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
