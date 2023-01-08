<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    # Index Data
    public function index()
    {
        $teacherlist = Teacher::all();
        return view('teacher',[
            'data' => $teacherlist,
            'title' => 'Teachers'
        ]);
    }

    # Detail Data
    public function show($id)
    {
        $teacher = Teacher::with('class.student')->findOrFail($id);
        return view('teacher-detail',[
            "teacher" => $teacher,
            "title" => "Teachers"
        ]);
    }
    
    # Create Data
    public function create()
    {
        return view('teacher-add', [
            "title" => "Teachers"
        ]);
    }

    # Create Action
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        # Create Flash Message
        if($teacher){
            Session::flash('store-success');
            Session::flash('message', 'Add New Teacher Running Successfully!');
        }else{
            Session::flash('store-error');
            Session::flash('message', 'Add New Teacher Error!');
        }
        return redirect('teacher');
    }

    # Edit Data
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher-edit',[
            "teacher" => $teacher,
            "title" => "Teachers"
        ]);
    }

    # Edit Data Action 
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        # Create Flash Message
        if($teacher){
            Session::flash('update-success');
            Session::flash('message', 'Updated Teacher Running Successfully!');
        }else{
            Session::flash('update-error');
            Session::flash('message', 'Updated Teacher Error!');
        }
        return redirect('/teacher');
    }
}
