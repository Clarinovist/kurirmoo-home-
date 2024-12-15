<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IklanController;
use App\Http\Controllers\Admin\KeunggulanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LandingpageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


// Landing Page
Route::get('/', [LandingpageController::class, 'index'])->name('home');
Route::get('/privacy-policy', [LandingpageController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/syarat-ketentuan', [LandingpageController::class, 'syaratketentuan'])->name('syaratketentuan');


// login
Route::get('/login', [AuthenticatedSessionController::class, 'form_login'])->name('login');
Route::middleware('guest')->post('/login', [AuthenticatedSessionController::class, 'login'])->name('login');
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->middleware('auth')->name('logout');
// Admin
Route::get('/home-admin', [HomeController::class, 'index'])->name('home-admin');

// Hero
Route::get('/hero-admin', [HeroController::class, 'index'])->name('hero');
Route::post('/ubah_hero/{id}', [HeroController::class, 'ubah_hero'])->name('ubah_hero');

// About Us
Route::get('/about-us-admin', [AboutController::class, 'index'])->name('AboutUs');
Route::post('/ubah_about/{id}', [AboutController::class, 'ubah_about'])->name('ubah_about');

// Iklan
Route::get('/iklan-admin', [IklanController::class, 'index'])->name('iklan');
Route::post('/tambahIklan', [IklanController::class, 'tambah_iklan'])->name('tambahIklan');
Route::post('/ubah_iklan/{id}', [IklanController::class, 'ubah_iklan'])->name('ubah_iklan');
Route::delete('/hapus_iklan/{id}', [IklanController::class, 'hapus_iklan'])->name('hapus_iklan');

// Keunggulan
Route::get('/keunggulan-admin', [KeunggulanController::class, 'index'])->name('keunggulan');
Route::post('/tambah_keunggulan', [KeunggulanController::class, 'tambah_keunggulan'])->name('tambah_keunggulan');
Route::post('/ubah_keunggulan/{id}', [KeunggulanController::class, 'ubah_keunggulan'])->name('ubah_keunggulan');
Route::delete('/hapus_keunggulan/{id}', [KeunggulanController::class, 'hapus_keunggulan'])->name('hapus_keunggulan');





