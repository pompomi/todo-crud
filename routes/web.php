<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = \App\Models\Todo::all();
    return view('home', ['data' => $data]);
})->middleware('auth')->name('home');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login.login');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('login.logout');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('todos', \App\Http\Controllers\TodoController::class);
});
