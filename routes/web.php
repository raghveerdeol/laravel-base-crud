<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[AnimalController::class, 'index'])->name('pages.home');
Route::post('/',[AnimalController::class, 'store'])->name('pages.store');
Route::get('/create',[AnimalController::class, 'create'])->name('pages.create');
Route::get('/{animal}',[AnimalController::class, 'show'])->name('pages.show');
Route::put('/{animal}',[AnimalController::class, 'update'])->name('pages.update');
Route::delete('/{animal}',[AnimalController::class, 'destroy'])->name('pages.destroy');
Route::get('/{animal}/edit',[AnimalController::class, 'edit'])->name('pages.edit');
