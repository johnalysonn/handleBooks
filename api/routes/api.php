<?php

use App\Http\Controllers\LivroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'livros'], function () {
    Route::get('/', [LivroController::class, 'index'])->name('livro.index');
    Route::post('/store', [LivroController::class, 'store'])->name('livro.store');
    Route::put('/update/{livro}', [LivroController::class, 'update'])->name('livro.update');
    Route::delete('/destroy/{livro}', [LivroController::class, 'destroy'])->name('livro.destroy');
});
