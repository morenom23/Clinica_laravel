<?php

use App\Http\Controllers\ProfileController;
//use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    Route::get('consulta/create', 'App\Http\Controllers\consultas_controller@Create')->name('consulta.create');
    Route::post('consulta/store', 'App\Http\Controllers\consultas_controller@store')->name('consulta.store');
    Route::get('consulta/index', 'App\Http\Controllers\consultas_controller@index')->name('consulta.index');
    Route::put('consulta/update/{id}', 'App\Http\Controllers\consultas_controller@update')->name('consulta.update');
    Route::get('consulta/{id}', 'App\Http\Controllers\consultas_controller@edit')->name('consulta.edit');
    Route::delete('consulta/{id}/eliminar', 'App\Http\Controllers\consultas_controller@delete')->name('consulta.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});








// Route::get('consultas/store', 'App\Http\Controllers\consultas_controller@store')->name('consulta.store');
