<?php

use Illuminate\Support\Facades\Route;

Route::any('/any', function() {
    return 'Any';
});

Route::match(['get', 'post'], '/match', function() {
    return 'match funcionando';
});

Route::get('/categorias/{flag}/teste', function($flag) {
    return "posts da categoria: {$flag}";
});

Route::get('/produtos/{idProduct?}', function($idProduct = '') {
    return "Produtos(s) {$idProduct}";
});

Route::post('/register', function () {
    return '';
});

Route::get('/empresa', function () {
    return 'Informações sobre a empresa';
});

Route::get('/contato', function () {
    return view('site.contact');
});

Route::get('/', function () {
    return view('welcome');
});
