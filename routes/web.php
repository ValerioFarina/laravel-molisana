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

    $pasta_sizes = [];

    foreach ($pasta_types as $pasta_type) {
        if (!in_array($pasta_type["tipo"], $pasta_sizes)) {
            $pasta_sizes[] = $pasta_type["tipo"];
        }
    }

    $data = [
        'pasta_types' => $pasta_types,
        'pasta_sizes' => $pasta_sizes
    ];

    return view('products', $data);
})->name('products');

Route::get('/news', function () {
    return view('news');
})->name('news');
