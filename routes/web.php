<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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

Route::get('/categories',[CategoriesController::class, 'index'])->name('categories.index');
Route::post('/categories',[CategoriesController::class, 'store'])->name('categories.store');
Route::delete('categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
