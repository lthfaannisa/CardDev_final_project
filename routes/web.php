<?php

use App\Http\Controllers\LowonganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\StudentController;



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

Route::group(['middleware' => 'prevent-back-history'], function () {
    // Route ini akan mengarahkan ke halaman utama
// url: yang akhiranya adalah / akan diarahkan ke halaman utama
    Route::get('/', [PagesController::class, 'halamanUtama']);


    // Route ini akan mengarahkan ke halaman login
// url: yang akhiranya adalah /loginpage akan diarahkan ke halaman login
    Route::get('/login', [LoginController::class, 'index'])->name('login');



    // Route ini akan mengarahkan ke halaman register
// url: yang akhiranya adalah /registerPage akan diarahkan ke halaman register
    Route::get('/register', [RegisterController::class, 'index']);

    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/register', [RegisterController::class, 'store']);


    // Jika session login tidak ada maka akan diarahkan ke halaman login page dan jika ada maka akan diarahkan ke halaman dashboard
// Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');
// Route::get('/myprofile', [PagesController::class, 'myprofile'])->middleware('auth');
// Route::get('/ongoing', [PagesController::class, 'ongoing'])->middleware('auth');
// Route::get('/history', [PagesController::class, 'history'])->middleware('auth');

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');
    //Route::get('/profile', [PagesController::class, 'profile'])->middleware('auth');
    Route::get('/bantuan', [PagesController::class, 'bantuan'])->middleware('auth');
    Route::get('/lowongan', [LowonganController::class, 'lowongan'])->middleware('auth');
    Route::get('/lowongan/create', [LowonganController::class, 'create'])->middleware('auth');
    Route::post('/lowongan/simpan', [LowonganController::class, 'store'])->middleware('auth');
    Route::get('/editlowongan/{id}', [LowonganController::class, 'edit'])->middleware('auth');
    Route::post('/updatelowongan/{id}', [LowonganController::class, 'update'])->middleware('auth');
    Route::get('/dataalumni', [StudentController::class, 'dataalumni'])->middleware('auth');
    Route::get('/student/create', [StudentController::class, 'create'])->middleware('auth');
    Route::post('/student/simpan', [StudentController::class, 'store'])->middleware('auth');
    Route::post('/updatealumni/{id}', [StudentController::class, 'update'])->middleware('auth');
    Route::get('/show/{id}', [StudentController::class, 'show'])->middleware('auth');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
    Route::get('/student/delete/{id}', [StudentController::class, 'destroy'])->middleware('auth');
    Route::get('/search', [StudentController::class, 'search'])->middleware('auth');
    Route::get('/lowongansearch', [LowonganController::class, 'search'])->middleware('auth');
    Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth');



    Route::get('/lowongan-u', function () {
        return view('user.lowongan');
    });

    Route::get('/lowongan-a', function () {
        return view('admin.lowongan');
    });


    Route::get('/edit-profile', function () {
        return view('admin.editprofile');
    });

    Route::get('/tambah-loker', function () {
        return view('admin.tambahloker');
    });




    // Route ini akan mengarahkan ke halaman logout
// url: yang akhiranya adalah /logout akan diarahkan ke halaman logout
// jika user sudah logout maka akan diarahkan ke halaman login dan session akan berhenti

});