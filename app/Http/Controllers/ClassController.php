<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $title = "Class";
        $class = ClassRoom::with(['student','teacher'])->get();
        return view('classroom',[
            'classlist' => $class,
            'title' => $title
        ]);
    }
}
