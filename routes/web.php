<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

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
