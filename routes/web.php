<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);

Route::resource('courses', CourseController::class);

Route::get('/registrations', [RegistrationController::class, 'index'])
    ->name('registrations.index');
