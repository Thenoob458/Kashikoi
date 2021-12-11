<?php

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

use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\ObraController;

Route::get('/', function () {
    return view('home');
});

Route::get('/add', [RegistrationController::class, 'add']);

Route::get('/obra/{name}', [ObraController::class, 'information']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/recomenda', function () {
    return view('recomenda');
});

Route::get('/search', function () {
    return view('search');
});
