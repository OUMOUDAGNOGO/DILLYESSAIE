<?php

use App\Http\Controllers\PanierController;
use App\Http\Controllers\WelcomeController;
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
    return view('index');
});

 Route::get('produits/{slug}',[WelcomeController::class, 'showproduit'])->name('showproduit');
//  panier
  
Route::post('ajouterpanier' , [\App\Http\Controllers\PanierController::class, 'ajoutpanier'])->name('ajoutpanier');

Route::get('/',[\App\Http\Controllers\WelcomeController::class ,'index']);
