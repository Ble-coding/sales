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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'store']);


// Auth::routes();
Route::resource('ventes', 'App\Http\Controllers\VenteController');
Route::resource('sales', 'App\Http\Controllers\SaleController');
Route::resource('achats', 'App\Http\Controllers\AchatController');
// Route::post('ventes', [App\Http\Controllers\VenteController::class, 'datesearch' ])->name('ventes.search');

Route::resource('produits', 'App\Http\Controllers\ProduitController');
Route::resource('stocks', 'App\Http\Controllers\StockController');
Route::resource('fournisseurs', 'App\Http\Controllers\FournisseurController');
Route::resource('clients', 'App\Http\Controllers\ClientController');
Route::resource('appros', 'App\Http\Controllers\ApproController');
Route::resource('purchases', 'App\Http\Controllers\PurchaseController');


