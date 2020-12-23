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
    $pasta = collect(config('pasta'));

    $pasta_sizes = Arr::pluck($pasta, 'tipo');

    $pasta_sizes = array_unique($pasta_sizes);

    $pasta_types = [];

    foreach ($pasta_sizes as $size) {
        switch ($size) {
            case 'lunga':
                $title = 'le lunghe';
                break;

            case 'corta':
                $title = 'le corte';
                break;

            case 'cortissima':
                $title = 'le cortissime';
                break;

            default:
                $title = 'formato non definito';
                break;
        }

        $pasta_types[] = [
            'title' => $title,
            'items' => $pasta->where('tipo', $size)
        ];
    }

    $data = [
        'pasta_types' => $pasta_types
    ];

    return view('products', $data);
})->name('products');

Route::get('/prodotti/dettagli-prodotto/{id}', function ($id) {
    $pasta = config('pasta');

    $product = $pasta[$id];

    $data = [
        'product' => $product
    ];
    return view('product-details', $data);
})->name('product-details');

Route::get('/news', function () {
    return view('news');
})->name('news');
