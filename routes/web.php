<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('profile/edit', [GoodsController::class, 'edit']);
Route::put('profile/update', [GoodsController::class, 'update']);

Route::get('/goods', [GoodsController::class, 'index']); 
Route::get('goods/create', [GoodsController::class, 'create']);
Route::post('good/create', [GoodsController::class, 'store']);
Route::get('goods/edit', [GoodsController::class, 'edit']);
Route::put('good/update', [GoodsController::class, 'update']);
Route::delete('good/delete', [GoodsController::class, 'destroy']);

require __DIR__.'/auth.php';
