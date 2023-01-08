<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $student = Student::create($request->all());
        # Create Flash Message
        if($student){
            Session::flash('success-store');
            Session::flash('message', 'Add New Student Running Successfully!');
        }else{
            Session::flash('error-store');
            Session::flash('message', 'Add New Student Error!');
        }
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
        # Create Flash Message
        if($student){
            Session::flash('success-update');
            Session::flash('message', 'Updated Student Running Successfully!');
        }else{
            Session::flash('error-update');
            Session::flash('message', 'Updated Student Error!');
        }
        return redirect('/students');
    }
}
