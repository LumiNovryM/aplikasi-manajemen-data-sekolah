<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Builder\Class_;

class ClassController extends Controller
{
    # Index Data
    public function index()
    {
        $title = "Class";
        $class = ClassRoom::get();
        return view('classroom',[
            'classlist' => $class,
            'title' => $title
        ]);
    }

    # Detail Data
    public function show($id)
    {
        $class = ClassRoom::with(['student', 'teacher'])->findOrFail($id);
        return view('class-detail', ['class' => $class, 'title' => 'Class']);
    }

    # Create Data 
    public function create()
    {
        $teacher = Teacher::all();
        return view('class-add', [
            "title" => "Class",
            "teacher" => $teacher
        ]);
    }

    # Create Action
    public function store(Request $request)
    {
        $class = ClassRoom::create($request->all());
        # Create Flash Message
        if($class){
            Session::flash('success-store');
            Session::flash('message', 'Add New Class Running Successfully!');
        }else{
            Session::flash('error-store');
            Session::flash('message', 'Add New Class Error!');
        }
        return redirect('/class');
    }

    # Edit Data
    public function edit($id)
    {
        $class = ClassRoom::with(['student', 'teacher'])->findOrFail($id);
        $teacher = Teacher::all();
        return view('class-edit',[
            "title" => "Class",
            "teacher" => $teacher,
            "class" => $class
        ]);
    }

    # Edit Action Data
    public function update(Request $request, $id)
    {
        $class = ClassRoom::findOrFail($id);
        $class->update([
            'name' => $request->name,
            'teacher_id' => $request->teacher_id
        ]);
        # Create Flash Message
        if($class){
            Session::flash('update-success');
            Session::flash('message', 'Updated Class Running Successfully!');
        }else{
            Session::flash('update-erorr');
            Session::flash('message', 'Updated Class Error!');
        }
        return redirect('/class');
    }

    # Delete Data
    public function delete($id)
    {
        $class = ClassRoom::findOrFail($id);
        return view('class-delete', [
            'class' => $class,
            'title' => "Class"
        ]);
    }

    # Delete Data Action
    public function destroy($id)
    {
        $class = ClassRoom::findOrFail($id);
        $class->delete();
        # Create Flash Message
        if($class){
            Session::flash('success-destroy');
            Session::flash('message', 'Delete Class Running Successfully!');
        }else{
            Session::flash('error-destroy');
            Session::flash('message', 'Delete Class Error!');
        }
        return redirect('/class');
    }
}
