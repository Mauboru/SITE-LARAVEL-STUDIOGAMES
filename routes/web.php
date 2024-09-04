<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::resource('jogo', 'App\Http\Controllers\JogoController');
Route::get('report/jogo', 'App\Http\Controllers\JogoController@report')->name('report');
// Route::get('graph/eixo', 'App\Http\Controllers\JogoController@graph')->name('graph');

require __DIR__.'/auth.php';