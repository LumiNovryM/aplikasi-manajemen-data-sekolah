<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    # Index Data
    public function index()
    {
        $title = "Extracurricular";
        $eskul = Extracurricular::with('students')->get();
        return view('extracurricular',[
            "eskullist" => $eskul,
            "title" => $title
        ]);
    }

    # Detail Data
    public function show($id)
    {
        $eskul = Extracurricular::with('students')->findOrFail($id);
        return view('extracurricular-detail',[
            "eskul" => $eskul,
            "title" => "Extracurriculars"
        ]);
    }
}
