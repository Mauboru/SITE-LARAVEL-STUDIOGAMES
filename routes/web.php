<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eixo', 'App\Http\Controllers\EixoController');
Route::get('report/eixo', 'App\Http\Controllers\EixoController@report')->name('report');
Route::get('graph/eixo', 'App\Http\Controllers\EixoController@graph')->name('graph');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';