<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductCOntroller;
use App\Http\Controllers\ScreenshotController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ComppanyController;
use App\Http\Controllers\ProductimgController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;

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

// manage Multiple images
Route::get('/manage_product_index', [ProductimgController::class, 'index'])->name('manage_product_index');
Route::get('/create_multiImage', [ProductimgController::class, 'create'])->name('create_multiImage');
Route::post('/store_multiImg', [ProductimgController::class, 'store'])->name('store_multiImg');
Route::get('/show_product/{id}', [ProductimgController::class, 'show'])->name('show_product');

Route::get('/single_search', [ProductimgController::class, 'ajaxSearch'])->name('single_search');

// Employe

//Department
Route::get('/manage_department', [DepartmentController::class, 'index'])->name('manage_department');
Route::get('/create_department', [DepartmentController::class, 'create'])->name('create_department');
Route::post('/store_department', [DepartmentController::class, 'store'])->name('store_department');

//manage_category
Route::get('/manage_category', [CategoryController::class, 'index'])->name('manage_category');
Route::get('/create_category', [CategoryController::class, 'create'])->name('create_category');
Route::post('/store_mejor', [CategoryController::class, 'store'])->name('store_mejor');

//manage_employee
Route::get('/manage_employee', [EmployeeController::class, 'index'])->name('manage_employee');
