<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;


Route::get('/',[HomeController::class,'dashboard'])->name('/');
Route::get('/student-index',[StudentController::class,'index'])->name('student.index');
Route::get('/student-create',[StudentController::class,'create'])->name('student.create');
Route::post('/student-store',[StudentController::class,'store'])->name('student.store');
Route::get('/student-show/{id}',[StudentController::class,'show'])->name('student.show');
Route::get('/download-pdf/{id}',[StudentController::class,'downloadPdf'])->name('download.pdf');
