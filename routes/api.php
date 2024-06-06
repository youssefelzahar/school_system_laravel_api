<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ClassesTeacherController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('students', [StudentController::class, 'index']);
Route::get('students/{id}', [StudentController::class, 'show']);
Route::post('students', [StudentController::class, 'store']);
Route::post('students/{id}/enroll', [StudentController::class, 'enroll']);
Route::get('students/{id}/courses', [StudentController::class, 'getcourses']);


Route::get('courses', [CourseController::class, 'index']);
Route::get('courses/{id}', [CourseController::class, 'show']);
Route::post('courses', [CourseController::class, 'store']);

Route::get('teachers', [TeacherController::class,'index']);
Route::get('teachers/{id}', [TeacherController::class, 'show']);

Route::post('teachers', [TeacherController::class,'store']);


Route::get('classes', [ClassesController::class,'index']);
Route::get('classes/{id}', [ClassesController::class,'show']);
Route::post('classes', [ClassesController::class,'store']);

Route::get('/classes-teacher', [ClassesTeacherController::class, 'index']);

Route::post('/classes-teacher', [ClassesTeacherController::class, 'store']);
