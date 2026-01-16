<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Character\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('character.index');
})->name('index');

Route::controller(RegisterController::class)->prefix('/register')->name('register.')->group(function () {
    Route::get('/', 'create')->name('create'); // Страница для регистрации
    Route::get('/store', 'store')->name('store'); // Маршрут для регистрации
});

Route::controller(LoginController::class)->prefix('/login')->name('login.')->group(function () {
    Route::get('/', 'create')->name('create'); // Страница для регистрации
    Route::get('/store', 'store')->name('store'); // Маршрут для регистрации
});

Route::controller(CharacterController::class)->prefix('/characters')->name('character.')->group(function () {
    Route::get('/', 'index')->name('index'); // Страница со всеми персонажами
    Route::get('/{id}/show')->name('show'); // Просмотр конкретного персонажа
});
