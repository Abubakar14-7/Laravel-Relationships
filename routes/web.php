<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

// Students CRUD
Route::get('/students', [StudentController::class, 'index'])->name('student.index');     
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create'); 
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');   
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');  
Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('student.update');   
Route::get('/students/delete/{id}', [StudentController::class, 'delete'])->name('student.delete'); 

// Courses CRUD
Route::get('/courses', [CourseController::class, 'index'])->name('course.index');     
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create'); 
Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');   
Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');  
Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');   
Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete'); 
