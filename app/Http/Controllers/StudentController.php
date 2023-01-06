<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    # Index Data
    public function index()
    {
        $title = "Students";
        $student = Student::all();
        return view('student',[
            'studentlist' => $student,
            'title' => $title
        ]);    
    }

    # Detail Data
    public function show($id)
    {
        $student = Student::with(['class','extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student, 'title' => 'Students']);
    }

    # Create Data
    public function create()
    {
        $class = ClassRoom::all();
        return view('student-add',[
            "title" => "Students",
            "class" => $class
        ]);
    }

    # Create Data Action
    public function store(Request $request)
    {
        // dd($request->all());
        Student::create($request->all());
        return redirect('/students');
    }

    # Update Data
    public function edit($id)
    {
        $class = ClassRoom::all();
        $student = Student::with(['class','extracurriculars'])->findOrFail($id);
        return view('student-edit',[
            "title" => "Students",
            "students" => $student,
            "class" => $class
        ]);
    }

    # Update Data Action
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('/students');
    }
}
