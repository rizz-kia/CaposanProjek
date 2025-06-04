<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});
<<<<<<< HEAD
Route::get('/beranda-guru', function () {
    return view('beranda-guru');
=======
Route::get('/beranda-santri', function () {
    return view('beranda-santri');
>>>>>>> 0282a7b1e5b81ce35af0a49049d547cd82430d9e
});
Route::get('/beranda-superadmin', function () {
    return view('beranda-superadmin');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);