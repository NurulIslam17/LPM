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
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TutorialsController;
use App\Http\Controllers\ProductszController;
use App\Http\Controllers\AjaxCrudController;

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

Route::post('/get_mejor_ajax', [CategoryController::class, 'ajaxCall']);

//manage_employee
Route::get('/manage_employee', [EmployeeController::class, 'index'])->name('manage_employee');
Route::get('/store_facalty', [EmployeeController::class, 'create'])->name('store_facalty');
Route::post('/store_facalty', [EmployeeController::class, 'store'])->name('store_facalty');

// Multi dependent Dropdown

// Divission
Route::get('/manage_division', [DivisionController::class, 'index'])->name('manage_division');
Route::get('/create_divission', [DivisionController::class, 'create'])->name('create_divission');
Route::post('/store_divission', [DivisionController::class, 'store'])->name('store_divission');

// City
Route::get('/manage_city', [CityController::class, 'index'])->name('manage_city');
Route::get('/create_city', [CityController::class, 'create'])->name('create_city');
Route::post('/store_city', [CityController::class, 'store'])->name('store_city');

// Area
Route::get('/manage_area', [AreaController::class, 'index'])->name('manage_area');
Route::get('/create_area', [AreaController::class, 'create'])->name('create_area');
Route::post('/store_area', [AreaController::class, 'store'])->name('store_area');

// Applicant routes

//Ajax for applicant create form
Route::post('/get_city', [ApplicantController::class, 'getCity'])->name('get_city');
Route::post('/get_area', [ApplicantController::class, 'getArea'])->name('get_area');

Route::get('/manage_applicant', [ApplicantController::class, 'index'])->name('manage_applicant');
Route::get('/create_applicant', [ApplicantController::class, 'create'])->name('create_applicant');
Route::post('/store_applicant', [ApplicantController::class, 'store'])->name('store_applicant');

// animal
Route::resource('animals', AnimalController::class);
Route::post('/change_status', [AnimalController::class, 'changeStatus'])->name('status_id');


// tutorials
Route::resource('tutorials', TutorialsController::class);
Route::get('/tutorials-delete/{id}', [TutorialsController::class, 'tutorialsDelete'])->name('tutorials.delete');

// product sz
Route::resource('productsz', ProductszController::class);

//ajax crud
Route::resource('ajax-crud', AjaxCrudController::class);
Route::post('/ajax/crud/store/', [AjaxCrudController::class, 'save'])->name('save.data');
Route::post('/ajax-delete', [AjaxCrudController::class, 'delete']);
