<?php

use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(TodoController::class)->group(function(){
    Route::get('todo/','index')->name('todo.index');
    Route::post('todo/store','store')->name('todo.store');
    Route::put('todo/update/{id}','update')->name('todo.update');
    Route::delete('todo/destroy/{id}','destroy')->name('todo.destroy');
});