<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    # Index Data
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $title = "Students";
        $student = Student::where('name', 'LIKE', '%'.$keyword.'%')->orWhere('gender', $keyword)->orWhere('nis', 'LIKE', '%'.$keyword.'%')->orWhereHas('class', function($query) use($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })->paginate(3);
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
    public function store(StudentCreateRequest $request)
    {
        $newName = '';
    
        # Make Condition
        if($request->file('photo')){
            # Get Original Type Of Image 
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name.'.'.now()->timestamp.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
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
            Session::flash('message', 'Update Student Running Successfully!');
        }else{
            Session::flash('error-update');
            Session::flash('message', 'Update Student Error!');
        }
        return redirect('/students');
    }

    # Delete Data
    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', [
            'student' => $student,
            'title' => 'Students'
        ]);
    }

    # Delete Data Action
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        # Create Flash Message
        if($student){
            Session::flash('success-destroy');
            Session::flash('message', 'Delete Student Running Successfully!');
        }else{
            Session::flash('error-destroy');
            Session::flash('message', 'Delete Student Error!');
        }
        return redirect('/students');
    }
    
    # Deleted Data 
    public function deletedStudent()
    {
        $student = Student::onlyTrashed()->get();
        return view('student-deleted-list', [
            "title" => "Students",
            "student" => $student
        ]);
    }

    # Restore Deleted Data
    public function restore($id)
    {
        $data = Student::withTrashed()->where('id', $id)->restore();
        # Create Flash Message
        if($data){
            Session::flash('success-restore');
            Session::flash('message', 'Restore Student Data Running Successfully!');
        }else{
            Session::flash('error-restore');
            Session::flash('message', 'Restore Student Data Error!');
        }
        return redirect('/students');
    }

}