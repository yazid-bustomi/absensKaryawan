<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// Route::get('/', function(){
//     return view('layouts.app');
//     return Auth::user()->role;
// });

Route::get('/', [HomeController::class, 'index']);


Route::get('/admin', [AdminController::class, 'index'])->name('homeadm');
Route::get('/admin/tambahuser', [AdminController::class, 'create'])->name('admin');
Route::post('/admin/tambahuser', [AdminController::class, 'store'])->name('tambahuser');
Route::get('/admin/{id}/edit', [AdminController::class, 'edit']);
Route::get('/admin/absensi', [AdminController::class, 'absensi'])->name('absadm');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users', [UserController::class, 'index'])->name('homeusr');
Route::get('/users/absen', [UserController::class, 'create'])->name('absen');
Route::post('/users/absen', [UserController::class, 'store'])->name('absen');