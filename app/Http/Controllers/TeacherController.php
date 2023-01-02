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
}
