<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(TodoController::class)->group(function () {
    Route::get('todo/', 'index')->name('todo.index');
    Route::post('todo/store', 'store')->name('todo.store');
    Route::put('todo/update/{id}', 'update')->name('todo.update');
    Route::delete('todo/destroy/{id}', 'destroy')->name('todo.destroy');
});

Route::controller(TypeUserController::class)->group(function () {
    Route::get('typeUser/', 'index')->name('typeUser.index');
    Route::post('typeUser/store','store')->name('typeUser.store');
    Route::put('typeUser/update','update')->name('typeUser.update');
    Route::delete('typeUser/destroy','destroy')->name('typeUser.destroy');
});

Route::controller(StatusController::class)->group(function () {
    Route::get('status/','index')->name('status.index');
    Route::post('status/store','store')->name('status.store');
    Route::put('status/update','update')->name('status.update');
    Route::delete('status/destroy','destroy')->name('status.destroy');
});

Route::controller(UserController::class)->group(function () {
    Route::get('user/','index')->name('user.index');
    Route::post('user/store','store')->name('user.store');
    Route::put('user/update','update')->name('user.update');
    Route::delete('user/destroy','destroy')->name('user.destroy');
});