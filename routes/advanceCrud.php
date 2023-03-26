<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvanceCrudController;

Route::get('/', [AdvanceCrudController::class, 'index'])->name('index');
Route::get('/create', [AdvanceCrudController::class, 'create'])->name('create');
// Route::post('/store', [AdvanceCrudController::class, 'store'])->name('store');
