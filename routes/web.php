<?php

use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\userController;
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

Route::get('/', function() {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.dashboard');
})->name('dashboard');

Route::get('/dashboard/daftar-data', [PerjalananController::class, 'index'])->name('daftar-data');

Route::get('/dashboard/input', function () {
    return view('pages.dashboard.input');
})->name('input');

Route::get('/login', function() {
    return view('pages.login');
})->name('login');

Route::get('/register', [UserController::class, 'halamanRegister'])->name('register');

Route::post('/simpanUser', [UserController::class, 'simpanUser']);
Route::post('/simpanPerjalanan', [PerjalananController::class, 'simpanPerjalanan']);
