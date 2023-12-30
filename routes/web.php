<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// frontend
Route::get('/', function () {
    return view('frontend.home');
});


// backend
Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/login', function () {
    return view('backend.login');
});


Route::post('/login', [LoginController::class, 'authenticate']);