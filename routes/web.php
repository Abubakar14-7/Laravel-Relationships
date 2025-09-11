<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('agechecker')->group(function () {


    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//////////////////////Job_Category//////////////////////

Route::get('/job-categories', [JobCategoryController::class, 'index'])->name('job_categories.index');
Route::get('/job-categories/create', [JobCategoryController::class, 'create'])->name('job_categories.create');
Route::post('/job-categories', [JobCategoryController::class, 'store'])->name('job_categories.store');
Route::get('/job-categories/{jobCategory}/edit', [JobCategoryController::class, 'edit'])->name('job_categories.edit');
Route::put('/job-categories/{jobCategory}', [JobCategoryController::class, 'update'])->name('job_categories.update');
Route::delete('/job-categories/{jobCategory}', [JobCategoryController::class, 'destroy'])->name('job_categories.destroy');

//////////////////////Job//////////////////////

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{id}/update', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{id}/delete', [JobController::class, 'destroy'])->name('jobs.destroy');


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
Route::get('/course/detail/{id}', [CourseController::class, 'detail'])->name('course.detail');  
Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');   
Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete'); 




   
});



Route::get('/checkage/{age}', [CourseController::class, 'agechecker'])->name('course.age')->middleware('agechecker');     

Route::get('/blocked', [CourseController::class, 'blockuser'])->name('user.block');