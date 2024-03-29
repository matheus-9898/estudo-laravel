<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Users
    Route::get('/usuarios',[UserController::class,'index'])->name('user.index');
    Route::get('/editar_nivel/{id}',[UserController::class,'edit'])->name('user.edit')->middleware('can:level');
    Route::put('update_nivel/{id}',[UserController::class,'updateNivel'])->name('user.updateNivel');

    //Clientes
    Route::resources([
        'cliente' => ClienteController::class
    ]);
    Route::get('/meus_clientes/{user}',[ClienteController::class,'meus_clientes'])->name('cliente.meus_clientes');
});

require __DIR__.'/auth.php';
