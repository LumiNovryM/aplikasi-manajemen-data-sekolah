<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentcurricularController;
use App\Http\Controllers\TeacherController;
use App\Models\Extracurricular;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "name" => "Lumi Novry M",
        "role" => "Admin",
        "title" => "Home"
    ]);
});

# Student-Route
// 1.)Index Route
Route::get('/students', [StudentController::class, 'index']);
// 2.)Detail Route
Route::get('/students-detail/{id}', [StudentController::class, 'show']);
// 3.)Create Route
Route::get('/students-add', [StudentController::class, 'create']);
// 4.)Create Action Route
Route::post('/students-save', [StudentController::class, 'store']);
// 5.)Update Route 
Route::get('/students-edit/{id}', [StudentController::class, 'edit']);
// 6.)Update Action Route
Route::put('/students-update/{id}', [StudentController::class, 'update']);


# Class Route
// 1.)Index Route
Route::get('/class', [ClassController::class, 'index']);
// 2.)Detail Route
Route::get('/class-detail/{id}', [ClassController::class, 'show']);
// 3.)Create Route
Route::get('/class-create', [ClassController::class, 'create']);
// 4.)Create Action Route
Route::post('/class-save', [ClassController::class, 'store']);
// 5.)Update Route
Route::get('/class-edit/{id}', [ClassController::class, 'edit']);
// 6.)Update Action Route
Route::put('/class-update/{id}', [ClassController::class, 'update']);

# Extracurricular Route [Master]
// 1.)Index Route
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
// 2.)Detail Route
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show']);
// 3.)Create Route
Route::get('/extracurricular-create', [ExtracurricularController::class, 'create']);
// 4.)Create Action Route
Route::post('/extracurricular-save', [ExtracurricularController::class, 'store']);
// 5.)Update Route
Route::get('/extracurricular-edit/{id}', [ExtracurricularController::class, 'edit']);
// 6.)Update Action Route
Route::put('/extracurricular-update/{id}', [ExtracurricularController::class, 'update']);

# Teacher Route [Master]
// 1.)Index Route 
Route::get('/teacher', [TeacherController::class, 'index']);
// 2.)Detail Route
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show']);
// 3.)Create Route
Route::get('/teacher-create', [TeacherController::class, 'create']);
// 4.)Create Action Route
Route::post('/teacher-save', [TeacherController::class, 'store']);
// 5.)Update Route
Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit']);
// 6.)Update Action Route
Route::put('/teacher-update/{id}', [TeacherController::class, 'update']);
