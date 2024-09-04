<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('jogo', 'App\Http\Controllers\JogoController');
    Route::resource('categoria', 'App\Http\Controllers\CategoriaController');

    Route::get('index/jogo', 'App\Http\Controllers\JogoController@index')->name('jogo');
    Route::get('index/categoria', 'App\Http\Controllers\CategoriaController@index')->name('categoria');
    Route::get('report/jogo', 'App\Http\Controllers\JogoController@report')->name('report');
    Route::get('graph/jogo', 'App\Http\Controllers\JogoController@graph')->name('graph');
});

require __DIR__.'/auth.php';