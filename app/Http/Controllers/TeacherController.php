<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacherlist = Teacher::all();
        return view('teacher',[
            'data' => $teacherlist,
            'title' => 'Teachers'
        ]);
    }

    public function show($id)
    {
        $teacher = Teacher::with('class.student')->findOrFail($id);
        return view('teacher-detail',[
            "teacher" => $teacher,
            "title" => "Teachers"
        ]);
    }
}
