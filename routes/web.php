<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
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
    return view('home', [
        "name" => "Lumi Novry M",
        "role" => "Admin",
        "buah" => ["Pisang", "Mangga", "Manggis", "Pepaya", "Apel"],
        "title" => "Home"
    ]);
});

# Student-Route
// 1.)Index Route
Route::get('/students', [StudentController::class, 'index']);
// 2.)Detail Route
Route::get('/students/{id}', [StudentController::class, 'show']);


# Class Route
// 1.)Index Route
Route::get('/class', [ClassController::class, 'index']);
// 2.)Detail Route
Route::get('/class/{id}', [ClassController::class, 'show']);

# Extracurricular Route
// 1.)Index Route
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
// 2.)Detail Route
Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show']);

# Teacher Route
Route::get('/teacher', [TeacherController::class, 'index']);