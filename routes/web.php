<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/catalogo', [ProductController::class, 'showCatalog'])->middleware('auth');
Route::get('/promociones', [ProductController::class, 'showPromotions'])->middleware('auth');
Route::get('/pago', function () {
    return view('pago'); // Simplemente devuelve la vista 'pago.blade.php'
})->middleware('auth')->name('pago'); // Le ponemos un nombre para usarla más fácil después
Route::post('/procesar-pago', [PaymentController::class, 'process'])->middleware('auth')->name('payment.process');
require __DIR__.'/auth.php';