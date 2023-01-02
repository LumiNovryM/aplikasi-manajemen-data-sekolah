<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $title = "Class";
        $class = ClassRoom::get();
        return view('classroom',[
            'classlist' => $class,
            'title' => $title
        ]);
    }

    public function show($id)
    {
        $class = ClassRoom::with(['student', 'teacher'])->findOrFail($id);
        return view('class-detail', ['class' => $class, 'title' => 'Class']);
    }
}
