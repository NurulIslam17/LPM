<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductCOntroller;
use App\Http\Controllers\ScreenshotController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ComppanyController;

Route::get('/', [HomeController::class, 'dashboard'])->name('/');
Route::get('/student-index', [StudentController::class, 'index'])->name('student.index');
Route::get('/student-create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student-store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student-show/{id}', [StudentController::class, 'show'])->name('student.show');
Route::get('/download-pdf/{id}', [StudentController::class, 'downloadPdf'])->name('download.pdf');

//product
Route::get('/products', [ProductCOntroller::class, 'index'])->name('product.index');
Route::get('/products-show/{id}', [ProductCOntroller::class, 'show'])->name('product.show');
// canva.screenshot
Route::get('/screen_shot', [ScreenshotController::class, 'screenshoot'])->name('canva.screenshot');

Route::get('/company_index', [ComppanyController::class, 'index'])->name('company_index');
Route::get('/company_show/{id}', [ComppanyController::class, 'show'])->name('company_show');
