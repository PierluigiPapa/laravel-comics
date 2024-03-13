<?php

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

Route::get('/', function () {
    $comics = [
        'films' => config('comics'),
        'elenco_film' => 'elenco'
    ];
    return view('home', $comics);
});

Route::get('/comics', function () {
    return view('comics');
});
