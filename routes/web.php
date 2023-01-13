<?php

use App\Models\Student;
use App\Models\Teacher;
use PhpParser\Builder\Class_;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentcurricularController;

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

# Login Route 
// 1.)Login page
Route::get('/login', [AuthController::class, 'login'])->name('login');
// 2.)Check Login
Route::post('/login', [AuthController::class, 'authenticating']);


# Student-Route
// 1.)Index Route
Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
// 2.)Detail Route
Route::get('/students-detail/{id}', [StudentController::class, 'show'])->middleware('auth');
// 3.)Create Route
Route::get('/students-add', [StudentController::class, 'create'])->middleware('auth');
// 4.)Create Action Route
Route::post('/students-save', [StudentController::class, 'store'])->middleware('auth');
// 5.)Update Route 
Route::get('/students-edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
// 6.)Update Action Route
Route::put('/students-update/{id}', [StudentController::class, 'update'])->middleware('auth');
// 7.)Delete Data Route
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware('auth');
// 8.)Delete Data Action Route
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware('auth');
// 9.)List Deleted Data
Route::get('/student-deleted', [StudentController::class, 'deletedStudent'])->middleware('auth');
// 10.)Restore Data Action
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware('auth');


# Class Route
// 1.)Index Route
Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
// 2.)Detail Route
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');
// 3.)Create Route
Route::get('/class-create', [ClassController::class, 'create'])->middleware('auth');
// 4.)Create Action Route
Route::post('/class-save', [ClassController::class, 'store'])->middleware('auth');
// 5.)Update Route
Route::get('/class-edit/{id}', [ClassController::class, 'edit'])->middleware('auth');
// 6.)Update Action Route
Route::put('/class-update/{id}', [ClassController::class, 'update'])->middleware('auth');
// 7.)Delete Data Route
Route::get('/class-delete/{id}', [ClassController::class, 'delete'])->middleware('auth');
// 8.)Delete Data Action Route
Route::delete('/class-destroy/{id}', [ClassController::class, 'destroy'])->middleware('auth');

# Extracurricular Route [Master]
// 1.)Index Route
Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
// 2.)Detail Route
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');
// 3.)Create Route
Route::get('/extracurricular-create', [ExtracurricularController::class, 'create'])->middleware('auth');
// 4.)Create Action Route
Route::post('/extracurricular-save', [ExtracurricularController::class, 'store'])->middleware('auth');
// 5.)Update Route
Route::get('/extracurricular-edit/{id}', [ExtracurricularController::class, 'edit'])->middleware('auth');
// 6.)Update Action Route
Route::put('/extracurricular-update/{id}', [ExtracurricularController::class, 'update'])->middleware('auth');
// 7.)Delete Data Route
Route::get('/extracurricular-delete/{id}', [ExtracurricularController::class, 'delete'])->middleware('auth');
// 8.)Delete Data Action Route
Route::delete('/extracurricular-destroy/{id}', [ExtracurricularController::class, 'destroy'])->middleware('auth');

# Teacher Route [Master]
// 1.)Index Route 
Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
// 2.)Detail Route
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show'])->middleware('auth');
// 3.)Create Route
Route::get('/teacher-create', [TeacherController::class, 'create'])->middleware('auth');
// 4.)Create Action Route
Route::post('/teacher-save', [TeacherController::class, 'store'])->middleware('auth');
// 5.)Update Route
Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit'])->middleware('auth');
// 6.)Update Action Route
Route::put('/teacher-update/{id}', [TeacherController::class, 'update'])->middleware('auth');
// 7.)Delete Data Route
Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete'])->middleware('auth');
// 8.)Delete Data Action
Route::delete('/teacher-destroy/{id}', [TeacherController::class, 'destroy'])->middleware('auth');