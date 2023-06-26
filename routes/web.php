<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::any('products/search', [ProductController::class, 'search'])->name('products.search');
Route::resource('products', ProductController::class);

// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::post('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::redirect('/redirect1', '/redirect2');

// Route::get("redirect1", function() {
//     return redirect('/redirect2');
// });

Route::get("redirect2", function() {
    return 'Redirect 02';
});


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
