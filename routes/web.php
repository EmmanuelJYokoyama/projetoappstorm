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
    return view('welcome');
});

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@create');
Route::get('/vendas', 'App\Http\Controllers\VendasController@create');
Route::get('/vendas', 'App\Http\Controllers\VendasController@create');


