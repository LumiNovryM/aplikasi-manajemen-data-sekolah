<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Students";
        $student = Student::all();
        return view('student',[
            'studentlist' => $student,
            'title' => $title
        ]);    
    }

    public function show($id)
    {
        $student = Student::with(['class','extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student, 'title' => 'Students']);
    }
}
