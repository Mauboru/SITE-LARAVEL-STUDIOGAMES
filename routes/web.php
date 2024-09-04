<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::resource('jogo', 'App\Http\Controllers\JogoController');
Route::get('report/eixo', 'App\Http\Controllers\EixoController@report')->name('report');
Route::get('graph/eixo', 'App\Http\Controllers\EixoController@graph')->name('graph');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';