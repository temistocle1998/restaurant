<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resources(['categories'=> CategorieController::class]);
Route::get('/categories', 'CategorieController@index');
Route::get('/categories/create', 'CategorieController@create');
Route::post('categories', 'CategorieController@store')->name('categories.store');
Route::get('/categories/{categorie}', 'CategorieController@show');
Route::get('categories/{categorie}/edit', 'CategorieController@edit');
Route::patch('categories/{categorie}', 'CategorieController@update');
Route::delete('categories/{categorie}', 'CategorieController@destroy');
Route::resource('plats', 'PlatController');
Route::resource('factures', 'FactureController');
Route::get('/commandes/{commande}', 'CommandeController@commander');
Route::post('/commandes', 'CommandeController@payer');
