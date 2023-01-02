<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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
Route::get('/students', [StudentController::class, 'index']);
# Class Route
Route::get('/class', [ClassController::class, 'index']);
# Extracurricular Route
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
# Teacher Route
Route::get('/teacher', [TeacherController::class, 'index']);