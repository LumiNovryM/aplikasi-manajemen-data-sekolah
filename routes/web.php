<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
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
        "buah" => ["Pisang", "Mangga", "Manggis", "Pepaya", "Apel"]
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);