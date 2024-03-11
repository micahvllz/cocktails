<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CocktailController;

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

// Route to display the list of cocktails
Route::get('/', [CocktailController::class, 'index'])->name('cocktails.index');

// Route to display the details of a specific cocktail
Route::get('/{id}', [CocktailController::class, 'show'])->name('cocktails.show');
