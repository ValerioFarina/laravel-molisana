<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/prodotti', function () {
    $pasta_types = config('pasta');

    $pasta_sizes = Arr::pluck($pasta_types, 'tipo');

    $pasta_sizes = array_unique($pasta_sizes);

    $data = [
        'pasta_types' => $pasta_types,
        'pasta_sizes' => $pasta_sizes
    ];

    return view('products', $data);
})->name('products');

Route::get('/news', function () {
    return view('news');
})->name('news');
