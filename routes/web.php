<?php
namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Pengguna\DashboardController as PenggunaDashboardController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [HomeController::class, 'produk']);
Route::get('/about', [HomeController::class, 'tentang']);
Route::get('/page', [HomeController::class, 'halaman']);


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth','is_admin'])->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index']);
});

Route::prefix('pengguna')->middleware(['auth', 'is_pengguna'])->group(function () {
    Route::get('dashboard', [PenggunaDashboardController::class, 'index']);
});

Route::resource('products', ProductsController::class);

