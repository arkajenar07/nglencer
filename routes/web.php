<?php

use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('landing',[
        'destinasi'=> DB::table('destinations')->offset(0)->limit(3)->get(),
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::controller(PostsController::class)->group(function() {
    Route::get('/search/', 'search')->name('search');
});

Route::get('/look/{id}', [PostsController::class, 'edit'])->middleware(['auth', 'verified'])->name('maps.look');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

