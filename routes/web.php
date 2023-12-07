<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;

Route::resource('contactos', ContactosController::class);
Route::get('/', [ContactosController::class, 'index'])->name('contactos.index');
